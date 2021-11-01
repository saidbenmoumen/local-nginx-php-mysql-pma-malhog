<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Di_France_Ext extends Module
{

    public function __construct()
    {
        $this->name = 'di_france_ext';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Said Benmoumen';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.6',
            'max' => '1.7.8',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Distributeur France - System Addon');
        $this->description = $this->l('a module to extend all site custom functionalities and filters. (do not remove)');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

     /**
     * Installation of module
     * @return bool
     */

    public function install() {
        if (!parent::install()
            // hooks installation
            || !$this->registerHook([
                'actionCategoryFormBuilderModifier',
                'actionAfterCreateCategoryFormHandler',
                'actionAfterUpdateCategoryFormHandler',
            ]) 
            // sql column
            || !$this->install_Sql()
        ) {
            return false;
        }
 
        return true;
    }

    /**
     * Uninstallation of module
     * @return bool
     */
    public function uninstall() {
        return parent::uninstall() && $this->uninstall_Sql();
    }

    /**
     * Adding of DB columns for module
     * @return bool
     */
    protected function install_sql() {
        $query = "ALTER TABLE " . _DB_PREFIX_ . "category_lang ADD COLUMN di_color TEXT NULL";
        $return = Db::getInstance()->execute($query);
        return $return;
    }

    /**
     * Removing of DB Columns for module
     * @return bool
     */
    protected function uninstall_sql() {
        $query = "ALTER TABLE " . _DB_PREFIX_ . "category_lang DROP di_color";
        $return = Db::getInstance()->execute($query);
        return $return;
    }
 
    /**
     * Modification du formulaire de la catégorie
     * @param array $params
     */
    public function hookActionCategoryFormBuilderModifier(array $params)
    {
        //Récupération du form builder
        /** @var \Symfony\Component\Form\FormBuilder $formBuilder */
        $formBuilder = $params['form_builder'];
 
        //Ajout de notre champ spécifique
        $formBuilder->add('di_color',
            //Cf génériques symonfy https://symfony.com/doc/current/reference/forms/types.html
            // et spécificiques prestashop https://devdocs.prestashop.com/1.7/development/components/form/types-reference/
            \Symfony\Component\Form\Extension\Core\Type\TextType::class,
            [
                'label' => $this->l('Color'), //Label du champ
                'required' => false, //Requis ou non
                'constraints' => [ //Contraintes du champs
                    //cf. génériques symfony : https://symfony.com/doc/current/reference/constraints.html
                    // Ou vous pouvez écrire la votre cf. https://symfony.com/doc/current/validation/custom_constraint.html
                    new \Symfony\Component\Validator\Constraints\Length([
                        'max' => 20,
                        'maxMessage' => $this->l('Max caracters allowed : 20'),
                    ]),
                ],
                //La valeur peut être setée ici
                'data' => '', //Valeur du champ
            ]
        );
 
        $category = new Category((int)$params['id']);
        $params['data']['di_color'] = ($category->di_color) ? $category->di_color : '';

        $formBuilder->setData($params['data'], $params);
    }
 
    /**
     * Action effectuée après la création d'une catégorie
     * @param array $params
     */
    public function hookActionAfterCreateCategoryFormHandler(array $params)
    {
        $this->updateData($params['form_data'], $params);
    }
 
    /**
     * Action effectuée après la mise à jour d'une catégorie
     * @param array $params
     */
    public function hookActionAfterUpdateCategoryFormHandler(array $params)
    {
        $this->updateData($params['form_data'], $params);
    }
 
    /**
     * Fonction qui va effectuer la mise à jour
     * @param array $data
     */
    protected function updateData(array $data, $params)
    {
        $query = "UPDATE " . _DB_PREFIX_ . "category_lang SET di_color='".$data['di_color']."' WHERE id_category='".(int)$params['id']."' ";
        Db::getInstance()->Execute($query);
        //$cat = new Category((int)$params['id']);
        //$cat->color = $data['color'];
        //$cat->update();
    }

 
 
}