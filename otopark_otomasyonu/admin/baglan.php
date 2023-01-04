<?php 
ob_start(); 
session_start();
try {
    $db = new PDO('mysql:host=localhost;dbname=otopark','root', '');
    //echo'veri tabanı başarılı bir şekilde oluşmuştur'; 
} catch (exception $e) {
    $e -> getmessage();
}

?>