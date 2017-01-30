
<?php
require 'twilio-php-master/Services/Twilio.php';


      $cust_name = $_POST ['full_name'];
      $cust_num = $_POST ['phone'];
      $cust_add = $_POST ['address'];
      $cust_email = $_POST ['email'];
      $order = $_POST ['order'];
      $store = $_POST ['store'];
      $dispatch_num = ['716-904-0123'];


 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "AC21e829b864e06b7bb0c30a571a5479ff";
$AuthToken = "9856416b4bd7d7851a6e620a0c712585";

$client = new Services_Twilio($AccountSid, $AuthToken);




$client->account->messages->create(array(
    "From" => "(269) 591-7958",
    "To" => $cust_num,
    "Body" => "\r\n \r\n Hi " . $cust_name . " !\r\n \r\n Your order of " . $order . " from " . $store . " is confirmed!"
));

$client->account->messages->create(array(
    "From" => "(269) 591-7958",
    "To" => $dispatch_num,
    "Body" => "\r\n \r\n Name: " . $cust_name . "\r\n \r\n Ph. Num: " . $cust_num . "\r\n \r\n Address: " . $cust_add . "\r\n \r\n Store: " . $store . "\r\n \r\n Order: " . $order . " "
));
echo '
              <html>

              <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Runner Deliveries</title>
                <meta name="description" content="Delivery Service">

                <link rel="stylesheet" href="http://runnerdeliveries.com/css/main.css">
              </head>
              <body class="order-sent">

                <img class="hero-logo" src="http://runnerdeliveries.com/img/logos/logo.png" alt="Logo for Runner Deliver">    
                <h2>Your Runner has been notified!</h2> 
                <p>You will be recieving a confirmation text momentarily!</p> 
                <a href="http://runnerdeliveries.com" class="button">Home</a>
                <script src="https://use.typekit.net/wtr4lny.js"></script>
                <script>try{Typekit.load({ async: true });}catch(e){}</script>
              </body>
            </html>

';

?>





















