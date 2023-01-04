<?php  
require'baglan.php';

ob_start(); 
session_destroy();

echo '<h1 style=\'text-align:center; margin-top:45px; color:red; font-weight:bold;\'>BAŞARILI BİR ŞEKİLDE ÇIKIŞ YAPTINIZ<h1>';  
header('Refresh:2; index.php'); 

?>