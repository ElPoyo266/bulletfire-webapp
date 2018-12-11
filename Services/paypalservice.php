<?php 

function getApiContext () {
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            $ids['id'],
            $ids['secret']
        )
    );
    return $apiContext;
}

?>