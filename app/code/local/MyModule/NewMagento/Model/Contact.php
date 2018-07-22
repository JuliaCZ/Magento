<?php

/**
 * Created by PhpStorm.
 * User: julia
 * Date: 19.07.2018
 * Time: 2:31
 */
class MyModule_NewMagento_Model_Contact extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('newmagento/contact');
    }
}