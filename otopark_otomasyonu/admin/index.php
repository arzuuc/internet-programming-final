<?php 
require 'baglan.php';

 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>GÜVEN OTOPARK</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="admin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<div  id="container" class="container p-4" >
    <div class ="cardp-5">
        <div class= "from" >
          <?php  
            if (isset($_POST['giris'])) {
              $mail = $_POST['mail'];
              $sifre = $_POST['sifre'];

              $sorgu = $db -> prepare('SELECT * from kullanici_giris where mail=:mail and sifre=:sifre');
              $sorgu -> execute([
                'mail' => $mail,
                'sifre' => $sifre

              ]);
              $say = $sorgu -> rowCount();
              if ($say == 1) {
                $_SESSION['mail']= $mail;
                echo '<div class="alert alert-primary text-center" role="alert">
                <strong> GİRİŞ BAŞARILI ANASAYFAYA GİDİYOORSUNUZ</strong>
                </div>';
                header ('Refresh:2; anasayfa.php');
                
              }else {
                echo '<div class="alert alert-danger text-center" role="alert">
                <strong> GİRİŞ BİLGİLERİ HATALI</strong>
                </div>';
                header ('Refresh:2; index.php');
              }
            }


          ?> 
            <div class="text-center mb-3"><h1>GÜVEN OTOPARK</h1></div> 
            <form action=" "method="post">
                <div class="mb-3">
                    <input type="email" name="mail" class="form-control"placeholder="Mail giriniz"><br>
                    <input type="password" name="sifre" class="form-control"placeholder="Şifre giriniz"><br>
                   <div class="text-center">
                   <button type="submit" class="btn  bg-primary"name="giris">GİRİŞ YAP</button>
                   </div>
                </div>
                </div>
                </div>
            </form>

        </div>
    </div>
</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>