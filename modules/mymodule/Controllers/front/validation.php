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
    public function postProcess(){
        // Here you can validate  cart, send to external payment, etc. 
        // postProcess() method- validation checkpoint that ensures all necessary cart info present before proceeding with payment process
        // $this->context->cart contains all cart-related info
        $cart=$this->context->cart; 

        // check if required cart information exits:
        if(!$cart->id_customer || 
           !$cart->id_address_delivery || 
           !$cart->id_address_invoice || 
           !$this->module->active){

            // Redirect to first step if validation fails
            Tools::redirect('index.php?controller=order&step=1');
        }

        // simulate a payment success
        $paymentStatus='success';

        if($paymentStatus==='success') {
            // validate order(if applicable) or redirect to third-party
        $this->module->validateOrder(
            (int)$cart->id,
            // PS_OS_PREPARATION used when payment initiated but not confirmed
            // PS_OS_PAYMENT used when payment confirmed
            Configuration::get('PS_OS_PREPARATION'), // or PS_OS_PAYMENT depending on flow
            (float)$cart->getOrderTotal(true, Cart::BOTH),
            $this->module->displayName,
            null,
            [],
            (int)$this->context->currency->id,
            false,
            $this->context->customer->secure_key 
        );

        // Redirect to order confirmation
        Tools::redirect('index.php?controller=order-confirmation&id_cart=' . (int)$cart->id . 
        '&id_module=' . (int)$this->module->id .
        '&id_order=' . (int)$this->module->currentOrder .
        '&key=' . $this->context->customer->secure_key);
        }
        else {
            // Redirect to custom failure page or show error
            Tools::redirect($this->context->link->getModuleLink('mymodule', 'failure'));
        }
    }
}
    
?>
        