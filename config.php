<?php
  session_start();
  require_once "googleapi/vendor/autoload.php";
  $gClient = new Google_Client();
  $gClient->setClientId("401876422877-ruc312ph1i3h0ef8hpukbcbdqmugl83v.apps.googleusercontent.com");
  $gClient->setClientSecret("GvSpDXhC6G7qa8xJtW7mePWV");
  $gClient->setApplicationName("Login with social");
  $gClient->setRedirectUri("http://localhost/LoginApi/g-callback.php");
  $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
 ?>
