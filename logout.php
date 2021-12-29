<?php
   session_start();

   if(isset($_SESSION['isSignInOK'])){
       unset($_SESSION['isSignInOK']);
       header("location:index.php");
   }
?>