<?php 

    class ShopController {

        /* ###  User call  ### */
        public function shop () {
            $products = $this->getProducts();
            $view = new Template("Shop:shop", array('products' => $products));
        }

        public function basket () {
            $player = requireConnection();
            $basket = isset($_SESSION["Basket"]) ? $_SESSION["Basket"] : new Basket();

            $view = new Template("Shop:basket", array("basket" => $basket));
            return $view->showTime();
        }

        public function cancelPayment () {
            $player = requireConnection();
        }

        public function validPayment () {
            $player = requireConnection();
        }

        public function payment () {
            $player = requireConnection();
            $ids = reqire_once("Config/paypal.php");
            // Check session basket
            $apiContext = getApiContext($ids);
            $payment = new \PayPal\Api\Payment();
            $payment->addTransaction(\Grafikart\TransactionFactory::fromBasket($basket));
            $payment->setIntent('sale');
            $redirectUrls = (new \PayPal\Api\RedirectUrls())
                ->setReturnUrl(SITEPATH . 'shop/validpay.php')
                ->setCancelUrl(SITEPATH . 'shop/cancelpay.php');
            $payment->setRedirectUrls($redirectUrls);
            $payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));
            try {
                $payment->create($apiContext);
                header('Location: ' . $payment->getApprovalLink());
                exit(0);
            } catch (\PayPal\Exception\PayPalConnectionException $e) {
                var_dump(json_decode($e->getData()));
            }
        }

        /* ###  Ajax call  ### */
        public function ajaxAddProduct () {
            $player = checkConnection();
            if($player == null) return "error";

            // Check post
            if(!isset($_POST["productId"]) || !isset($_POST["productQuantity"])) return "error";

            // Check quantity
            if($_POST["productQuantity"] < 0 || $_POST["productQuantity"] > 100) return "error";

            // Check product
            $products = $this->getProducts();
            $prod = null;
            foreach($products as $p) {
                if($p->getId() == $_POST["productId"]) {
                    $prod = $p;
                    break;
                }
            }
            if($prod == null) return "error";

            // Create basket
            if(!isset($_SESSION["Basket"])) $_SESSION["Basket"] = new Basket();

            // Add product to basket
            $_SESSION["Basket"]->addProduct($prod, $_POST["productQuantity"]);
            return "success";
        }

        public function ajaxRemoveProduct () {
            $player = checkConnection();
            if($player == null) return "error";

            // Check post
            if(!isset($_POST["productId"])) return "error";

            // Check basket
            if(!isset($_SESSION["Basket"])) return "error";

            // Check product
            $products = $this->getProducts();
            $prod = null;
            foreach($products as $p) {
                if($p->getId() == $_POST["productId"]) {
                    $prod = $p;
                    break;
                }
            }
            if($prod == null) return "error";

            $_SESSION["Basket"]->removeProduct($prod);

            return "success";
        }

        public function ajaxReduceProduct () {
            $player = checkConnection();
            if($player == null) return "error";

            // Check post
            if(!isset($_POST["productId"])) return "error";

            // Check basket
            if(!isset($_SESSION["Basket"])) return "error";

            // Check product
            $products = $this->getProducts();
            $prod = null;
            foreach($products as $p) {
                if($p->getId() == $_POST["productId"]) {
                    $prod = $p;
                    break;
                }
            }
            if($prod == null) return "error";

            $_SESSION["Basket"]->removeQuantity($prod);

            return "success";
        }

        public function ajaxIncreaseProduct () {
            $player = checkConnection();
            if($player == null) return "error";

            // Check post
            if(!isset($_POST["productId"])) return "error";

            // Check basket
            if(!isset($_SESSION["Basket"])) return "error";

            // Check product
            $products = $this->getProducts();
            $prod = null;
            foreach($products as $p) {
                if($p->getId() == $_POST["productId"]) {
                    $prod = $p;
                    break;
                }
            }
            if($prod == null) return "error";

            $_SESSION["Basket"]->addQuantity($prod);

            return "success";
        }

        /* ###  Private functions  ### */
        private function getProducts () {
            require_once("Classes/Other/Shop/product.php");
            return [
                new Product ("Poignée de billets", 1.99, "Obtenez 10 000 bills !", "", 1, 1),
                new Product ("Sacoche de billets", 4.99, "Obtenez 50 000 bills !", "", 1, 2),
                new Product ("Coffre", 0.99, "Obtenez 1 coffre !", "", 2, 3),
                new Product ("Petit pack de coffre", 4.99, "Obtenez 10 coffres !", "", 2, 4),
            ];
        }

    }


?>