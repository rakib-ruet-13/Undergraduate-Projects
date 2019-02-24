<?php
 session_start();
 error_reporting(E_ERROR | E_PARSE);
 $_SESSION["admin_id"]="";
 $_SESSION["page"]="";



   header("Location: /front_page/rmc_front_page.php");
    exit;



?>
