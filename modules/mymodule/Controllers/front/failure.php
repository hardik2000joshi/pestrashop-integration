<?php
class MyModuleValidationModuleFrontController extends ModuleFrontController {
    public function initContent(){
        parent::initContent();
        $this->setTemplate('modules:mymodule/views/templates/front/payment_failure.tpl');
    }
}
?>