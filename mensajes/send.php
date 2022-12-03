<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once './twilio-php-main/src/Twilio/autoload.php';

use Twilio\Rest\Client;
 
// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid ="AC1f636f0a14cf0f809ca62934ecc0f1a3";
$token ="3b8cbd489df2f52f69f99ed76cf670b4";
$twilio = new Client($sid, $token);

if(isset($_POST['submit'])) { 
$twilio->messages 
                            ->create($_POST['number'], // to
                           array(  
                               "messagingServiceSid" => "MG94107fea1956c065696766a47d5b5314",      
                               "body" => $_POST['message'],
                               
                           ) 
                  ); 
 
                  header("Location: index.php?sent");
                
                }
                ?>