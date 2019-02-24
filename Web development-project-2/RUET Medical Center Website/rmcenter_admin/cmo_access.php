<?php
 session_start();
error_reporting(E_ERROR | E_PARSE);
 if(empty($_SESSION["cmo"]))
 {
      
           header("Location: ../rmcenter_admin/redirect.php");
           exit;
 }

?>
