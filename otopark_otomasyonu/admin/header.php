<?php 
require 'baglan.php';



$kullanicicek = $db -> prepare('SELECT * FROM kullanici_giris WHERE mail=:mail');
$kullanicicek -> execute([
  'mail' => $_SESSION['mail']
]);
$say = $kullanicicek -> rowcount();
$kaydet = $kullanicicek -> fetch(PDO::FETCH_ASSOC);
if ($say == 0) {
  header('location:index.php?izinsizgiris');
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>GÜVEN OTOPARK</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="stil.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="anasayfa.php">Anasayfa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="parkedenarac.php">PARK EDEN ARAÇ</a>
      </li>
      
      
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 " action="parkedenarac.php" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="ARAMA YAPINIZ" name="bul" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="bull" style="margin:10px;"> ARA</button>
      <button type="submit" name="cikis" class="btn bg-danger " style="color:white;"> ÇIKIŞ YAP</button>
    </form>
  </div>
</nav>
<br>
<?php 
if (isset($_POST['bull'])) {
  $bul =$_POST['bul'];
  if (!$bul) {
   echo '<div class="alert alert-danger text-center" role="alert">
   <strong> ARAMA YAPMAK İÇİN BİŞEYLER YAZINIZ</strong>
   </div>';
   header('Refresh:2;parkedenarac.php');
  }else{
    $plakabul = $db -> prepare("SELECT * FROM arac_kayit WHERE arac_plaka LIKE '%".$bul."%'");
    $plakabul -> execute(array());
    if ($plakabul -> rowCount()) {
      foreach($plakabul as $plaka ){
       echo '<div class= "alert alert-succes text-center"'.
       $plaka['arac_plaka'].' <strong > <b style="color:red;"> ARAÇ  DAHA ÇIKIŞ YAPMADI</b></strong>
       </div>';
       header('Refresh:3;parkedenarac.php');
      }
    }else{
       echo '<div class= "alert alert-danger text-center"
   <strong> GİRİLEN PLAKA OTOPARKTA YOKTUR </strong>
       </div>';
       header('Refresh:2;parkedenarac.php');
    }

  }
}

?>

<?php 
if (isset($_POST['cikis'])) {
  header('location:exit.php');
} ?>