<?php
if (!isset($_SESSION)) { session_start(); }

$_SESSION = array(); 

session_destroy(); 

header("Location: RestaurantSignInPage.html"); 
exit();
?>