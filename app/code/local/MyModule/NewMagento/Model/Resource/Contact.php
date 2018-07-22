<?php

/**
 * Created by PhpStorm.
 * User: julia
 * Date: 19.07.2018
 * Time: 2:40
 */
class MyModule_NewMagento_Model_Resource_Contact extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('newmagento/contact', 'request_id');
    }
}