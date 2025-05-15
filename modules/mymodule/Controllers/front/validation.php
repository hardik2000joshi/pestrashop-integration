<?php
class MyModuleValidationModuleFrontController extends ModuleFrontController {
    public function initContent() // initContent() method used to initialize content of  a page in PrestaShop
    {
        parent::initContent();
        // check if payment- successful or failed
        // to integrate payment gateway API Logic
        // ex: validate payment status via an api call
        $paymentStatus='success';
        if($paymentStatus=='success'){
            // if payment successful, redirect to confirmation page
            $this->setTemplate('payment_success.tpl'); // custom success template
        }
        else {
            // If payment fails, show an error message
            $this->setTemplate('payment_failure.tpl'); // custom failure template
        }

    }
}
?>