<?php include 'header.php'; ?>
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

  <?php 
  $kaydet =$db ->query('SELECT * FROM arac_kayit');
  $kaydet -> execute();
 ?>

  <tbody class="text-center">
  <?php
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
      <td> <a  class="btn bg-primary" href="duzenle.php?id=<?php echo $id ?>"  role="button">DÜZENLE</a></td>
      <td> <a class="btn bg-success" href="araccikis.php?id=<?php echo $id ?>"  role="button">ARAÇ ÇIKIŞ</a></td>
      <td> <a class="btn bg-danger" href="sil.php?id=<?php echo $id ?>"  role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"style="color:white;">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></a></td>
      
    </tr>
    <?php } ?>
  </tbody>

</table>



<?php include 'footer.php'; ?>