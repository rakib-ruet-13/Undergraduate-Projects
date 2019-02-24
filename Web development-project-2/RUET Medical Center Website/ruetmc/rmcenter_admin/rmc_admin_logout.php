<?php
 session_start();
   $_SESSION["admin_id"]="";
      header("Location: ../rmcenter_admin/rmc_admin_login.php");
      exit;

 
?>