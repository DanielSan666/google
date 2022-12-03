<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("287783090945-o6124qon9m18isvpufftp9qikpp374lc.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/google/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
