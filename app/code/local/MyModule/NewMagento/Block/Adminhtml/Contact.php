<?php

/**
 * Created by PhpStorm.
 * User: julia
 * Date: 26.07.2018
 * Time: 16:39
 */
class MyModule_NewMagento_Block_Adminhtml_Contact extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'techtalk';
        $this->_controller = 'adminhtml_contact';
        $this->_headerText = Mage::helper('techtalk')->__('Contacts requests');

        parent::__construct();
        $this->_removeButton('add');
    }
}