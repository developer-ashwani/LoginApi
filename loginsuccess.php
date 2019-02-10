<?php
  // ob_start();
   session_start();
  // if(!isset($_SESSION['access_token'])){
  //     //header('location: login.php');
  //     //exit();
  //
  //   }
      echo $_SESSION['givenName']." ";
  echo "Welcome you have succesfully loged In";
  //echo $_SESSION['givenName'];
?>
