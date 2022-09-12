<?php

session_start();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    foreach($_SESSION['cart2'] as $k => $part){
        if($id == $part['id']){
            unset($_SESSION['cart2'][$k]);
        }
    }
    header("location:bill2.php");
}