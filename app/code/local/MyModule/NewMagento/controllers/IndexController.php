<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 16.07.2018
 * Time: 17:50
 */
class MyModule_NewMagento_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}