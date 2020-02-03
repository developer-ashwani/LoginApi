<?php
  session_start();
  require_once "googleapi/vendor/autoload.php";
  $gClient = new Google_Client();
  $gClient->setClientId("Set your Client Id");
  $gClient->setClientSecret("Add your secret key");
  $gClient->setApplicationName("Login with social");
  $gClient->setRedirectUri("http://localhost/LoginApi/g-callback.php");
  $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
 ?>
