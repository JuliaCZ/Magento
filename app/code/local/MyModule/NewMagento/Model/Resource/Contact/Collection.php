<?php

/**
 * Created by PhpStorm.
 * User: julia
 * Date: 22.07.2018
 * Time: 16:11
 */
class MyModule_NewMagento_Model_Resource_Contact_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('newmagento/contact');
    }
}