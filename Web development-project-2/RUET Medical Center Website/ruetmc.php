<?php
 session_start();
 error_reporting(E_ERROR | E_PARSE);
 $_SESSION["admin_id"]="";
 $_SESSION["page"]="";



   header("Location: ../ruetmc/homepage/front_page.php");
    exit;



?>
