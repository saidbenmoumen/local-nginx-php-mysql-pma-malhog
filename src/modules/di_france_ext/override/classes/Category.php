<?php
class Category extends CategoryCore {

    public $di_color;

    public function __construct($idCategory = null, $idLang = null, $idShop = null) {
        self::$definition['fields']['di_color'] = array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml');
        parent::__construct($idCategory, $idLang, $idShop);
    }

}