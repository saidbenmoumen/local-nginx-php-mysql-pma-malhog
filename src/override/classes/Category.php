<?php
class Category extends CategoryCore {
    /*
    * module: ps_democqrshooksusage
    * date: 2021-11-01 10:55:16
    * version: 1.0.0
    */
    public $di_color;
    /*
    * module: ps_democqrshooksusage
    * date: 2021-11-01 10:55:16
    * version: 1.0.0
    */
    public function __construct($idCategory = null, $idLang = null, $idShop = null) {
        self::$definition['fields']['di_color'] = array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml');
        parent::__construct($idCategory, $idLang, $idShop);
    }
}