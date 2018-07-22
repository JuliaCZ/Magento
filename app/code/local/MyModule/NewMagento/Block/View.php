<?php

/**
 * Created by PhpStorm.
 * User: julia
 * Date: 16.07.2018
 * Time: 19:34
 */
class MyModule_NewMagento_Block_View extends Mage_Core_Block_Template
{
    public function getRequestedRecord($id)
    {
        return Mage::getModel('newmagento/contact')->load($id);
    }
//    protected function _toHtml()
//    {
//        return "<div><p style='color: red;'>Hello, WORLD!</p></div>";
//    }
}