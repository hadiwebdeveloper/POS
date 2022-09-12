<?php   

 
session_start(); 

unset($_SESSION['cart']);

    header("location:bill.php");
    exit();



?>