<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class WbInstagram extends Module implements WidgetInterface
{
    public function __construct()
    {
            $this->name = 'wbinstagram';
            $this->tab = 'others';
            $this->version = '1.0.0';
            $this->author = 'webithemes';
            $this->module_key = '';
            $this->bootstrap = true;
            parent::__construct();
            $this->displayName = $this->getTranslator()->trans(
                'WB Instagram Block.',
                array(),
                'Modules.WBInstagram.Admin'
            );
            $this->description = $this->getTranslator()->trans(
                'Displays a block Instagram.',
                array(),
                'Modules.WBInstagram.Admin'
            );
            $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
    }
    public function install()
    {
        return parent::install() &&
            Configuration::updateValue('WB_INS_ID', '7542748561') &&
            Configuration::updateValue('WB_INS_CT', '7542748561.1677ed0.0cd49500c9494755bd5b802da215c494') &&
            Configuration::updateValue('WB_INS_NB', 6) &&
            $this->registerHook('displayHome') &&
            $this->registerHook('displayHeader');
    }
    public function uninstall()
    {
        Configuration::deleteByName('WB_INS_ID');
        Configuration::deleteByName('WB_INS_CT');
        Configuration::deleteByName('WB_INS_NB');
        return parent::uninstall();
    }
    public function getContent()
    {
        $html = '';
        if (Tools::isSubmit('submitModule')) {
            Configuration::updateValue('WB_INS_ID', Tools::getValue('WB_INS_ID'));
            Configuration::updateValue('WB_INS_CT', Tools::getValue('WB_INS_CT', ''));
            Configuration::updateValue('WB_INS_NB', Tools::getValue('WB_INS_NB', ''));
            $html .= $this->displayConfirmation($this->l('Configuration updated'));
            $this->_clearCache('wbinstagram.tpl');
            Tools::redirectAdmin('index.php?tab=AdminModules&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
        }
        $html .= $this->renderForm();
        return $html;
    }

    public function getWidgetVariables($hookName = null, array $configuration = null)
    {
        $images_ins = $this->userMedia();
        unset($hookName, $configuration);
        return array(
            'imagesIns' => $images_ins,
            'nb' => Configuration::get('WB_INS_NB')
        );
    }

    public function renderWidget($hookName = null, array $configuration = null)
    {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
            return $this->fetch('module:'.$this->name.'/views/templates/hook/'.$this->name.'.tpl', $this->getCacheId());
    }

    public function userMedia()
    {
        $user_id = Configuration::get('WB_INS_ID');
        $access_token = Configuration::get('WB_INS_CT');
        $url = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token='.$access_token;
        $nb = Configuration::get('WB_INS_NB');
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $nb);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $json = curl_exec($ch);
        curl_close($ch);
        return Tools::jsonDecode($json, true);
    }

    public function hookHeader()
    {
        $this->page_name = Dispatcher::getInstance()->getController();
        $this->context->controller->addJs($this->_path.'views/js/jquery.carouFredSel-6.1.0.js');
        $this->context->controller->addJs($this->_path.'views/js/webithemes.js');
        $this->context->controller->addCss($this->_path.'views/css/wbinstagram.css');
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('User ID'),
                        'name' => 'WB_INS_ID',
                        'desc' => $this->l('Instagram User ID. How to get : https://smashballoon.com/instagram-feed/find-instagram-user-id/'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('AccessToken'),
                        'name' => 'WB_INS_CT',
                        'desc' => $this->l('Instagram Access Token.  How to get : http://instagram.pixelunion.net/'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Number Images'),
                        'name' => 'WB_INS_NB'
                    )
                ),
                'submit' => array(
                    'title' => $this->l('Save')
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $aefl = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG');
        $helper->allow_employee_form_lang = $aefl ? $aefl : 0;
        $this->fields_form = array();

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='
        .$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );
        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
                'WB_INS_ID' => Tools::getValue('WB_INS_ID', Configuration::get('WB_INS_ID')),
                'WB_INS_CT' => Tools::getValue('WB_INS_CT', Configuration::get('WB_INS_CT')),
                'WB_INS_NB' => Tools::getValue('WB_INS_NB', Configuration::get('WB_INS_NB')),
        );
    }
}
