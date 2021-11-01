<?php

class LaLivetteGourmandeController extends FrontController
{
    public $php_self = 'la-livette-gourmande';
    public $ssl = true;

    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('la-livette-gourmande');
    }
}