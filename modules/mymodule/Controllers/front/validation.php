<?php
class MyModuleValidationModuleFrontController extends ModuleFrontController {

    // helper method: sendPaymentRequest
    private function sendPaymentRequest($data) {
        // using curl to send POST request to payment provider
        $ch= curl_init('https://your-payment-gateway.com/api/pay');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $response=curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
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

        // Build API request data
        $amount=(float)$cart->getOrderTotal(true, Cart::BOTH);
        $currency=$this->context->currency->iso_code;

        // Send payment request to an external API
        $response=$this->sendPaymentRequest([
            'amount'=>$amount,
            'currency'=>$currency,
            'order_id'=>$cart->id,
            'customer_email'=>$this->context->customer->email,
        ]);

        // if api fails or times out, json_decode() could return null, so safeguard it by this condition: 
        if(!isset($response['status']) || $response['status'] !== 'success') {
            Tools::redirect($this->context->link->getModuleLink('mymodule', 'failure')); // redirect user to custom payment failure page
            return;
        }
        
        // set the order status
        $orderStatus=Configuration::get('PS_OS_PAYMENT');

        // validate and create the order
        $this->module->validateOrder(
            (int)$cart->id,
            $orderStatus,
            $amount,
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
}
    
?>
        