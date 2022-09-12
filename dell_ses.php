<?php

session_start();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    foreach($_SESSION['cart'] as $k => $part){
        if($id == $part['id']){
            unset($_SESSION['cart'][$k]);
        }
    }
    header("location:bill.php");
}