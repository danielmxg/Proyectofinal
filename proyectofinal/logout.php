<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: http://3.85.233.29:8003/login.php");
   }
?>