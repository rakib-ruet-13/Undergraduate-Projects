<?php
 session_start();
   $_SESSION["admin_id"]="";
    $_SESSION["cmo"]="";
      header("Location: ../rmcenter_admin/rmc_admin_login.php");
      exit;

 
?>