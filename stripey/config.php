<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51MVEnxKOneHsFfFbnjhXQVvj72LMFiMUvfvIRNTWdMw6KsvTD9pBfCLW7Y5ULBF2U6ybdRGmhhVljmJb57vkYbP000P4d87bz8",
        "publishableKey" => "pk_test_51MVEnxKOneHsFfFboMkekQhsezPcoocC7ixp0SeYNK3TF0uwgXcbsWKkagMai8XtsK57uBwPNn0q0J9bGmNHtU1t00aQ85hQOw"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>