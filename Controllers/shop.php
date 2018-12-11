<?php 

    class ShopController {

        public function shop () {

        }

        public function product ($id) {

        }

        public function basket () {

        }

        public function cancelPayment () {

        }

        public function validPayment () {

        }

        public function payment () {
            // Check session basket
            $apiContext = getApiContext();
            $payment = new \PayPal\Api\Payment();
            $payment->addTransaction(\Grafikart\TransactionFactory::fromBasket($basket));
            $payment->setIntent('sale');
            $redirectUrls = (new \PayPal\Api\RedirectUrls())
                ->setReturnUrl('http://localhost:8000/pay.php')
                ->setCancelUrl('http://localhost:8000/index.php');
            $payment->setRedirectUrls($redirectUrls);
            $payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));
            try {
                $payment->create($apiContext);
                header('Location: ' . $payment->getApprovalLink());
            } catch (\PayPal\Exception\PayPalConnectionException $e) {
                var_dump(json_decode($e->getData()));
            }
        }

    }


?>