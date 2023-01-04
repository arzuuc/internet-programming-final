<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=otopark','root', '');
    //echo'veri tabanı başarılı bir şekilde oluşmuştur'; 
} catch (exception $e) {
    $e -> getmessage();
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
  <body style="background-color:gray;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin/index.php">GİRİŞ YAPMAK İÇİN TIKLAYINIZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


    </ul>
    
</nav>

<?php 
if (isset($_POST['cikis'])) {
  header('location:exit.php');
} ?>
<br>

<table class="table table-dark text-center">
  <thead>
    <tr>
      <th scope="col">SIRA NO</th>
      <th scope="col">PLAKA</th>
      <th scope="col">BULUNDUĞU KAT</th>
      <th scope="col">BULUNDUĞU BLOK</th>
      <th scope="col">ARAÇ GİRİŞ TARİHİ VE SAATİ</th>
      <th scope="col">ARAÇ ÇIKIŞ TARİHİ VE SAATİ</th>
      

    </tr>
  </thead>

  <h1  align="center">GÜVEN OTOPARK</h1>
     

  <tbody class="text-center">
  <?php 
  $kaydet =$db ->query('SELECT * FROM arac_kayit');
  $sira = 0;
  foreach ($kaydet as $kayit) {
    $sira = ++ $sira;
     $id = $kayit['arac_id'];
     $plaka = $kayit['arac_plaka'];
     $kat = $kayit['arac_kat'];
     $blok = $kayit['arac_blok'];
     $giris_tarihi = $kayit['arac_giris_tarih'];
     $cikis_tarihi = $kayit['arac_cikis_tarih'];
     ?>
    <tr>
      <th  style="background-color:red;"><?php echo $sira ?></th>
      <td><?php  echo $plaka ?></td>
      <td><?php  echo $kat ?></td>
      <td><?php  echo $blok ?></td>
      <td><?php  echo $giris_tarihi ?></td>
      <td><?php  echo $cikis_tarihi ?></td>
    
      
     

    </tr>
    <?php }
  
  ?>
  </tbody>
  <?php 




    ?>
</table>
<?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/para-birimleri.json'), true);
?>
<ul>
    <li>
        <span>DOLAR</span>
        <span>Fiyat: <?php echo $JSON['USD']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['USD']['degisim']; ?></span>
    </li>
    <li>
        <span>EURO</span>
        <span>Fiyat: <?php echo $JSON['EUR']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['EUR']['degisim']; ?></span>
    </li>
    <li>
        <span>STERLIN</span>
        <span>Fiyat: <?php echo $JSON['GBP']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['GBP']['degisim']; ?></span>
    </li>
    <li>
        <span>BITCOIN</span>
        <span>Fiyat: <?php echo $JSON['BTC']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['BTC']['degisim']; ?></span>
    </li>
    <li>
        <span>ALTIN</span>
        <span>Fiyat: <?php echo $JSON['GA']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['GA']['degisim']; ?></span>
    </li>
</ul>

<div class="textcenter">
  <b>tüm hakları saklıdır &copy; 2023 </b>
</div>
<div align="center">
  <b>ARACINIZ EMİN ELLERDE </b>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>