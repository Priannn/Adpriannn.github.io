<?php

require '../';

if( isset ($_POST{"Kirim"})) {

  if (send($_POST) . 0 ){
    echo "
    <script>
     aleret('Pesan Berhasil Terkirim !');
    </script>";
  } else {
    echo mysqli_eror ($conn);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Adprian04.css">
</head>
<body>
  <div class="container">
    <h1>Tampilan Halaman Kontak Kami</h1>
    <a href="Index.html">Home |</a>
         <a href="../GAMBAR/XI RPL 3_04_Gede Adprian Pratama.pdf">Download CV |</a>
         <a href="Contact.html">Contact |</a>
         <a href="aboutme.html">About me |</a>
         <hr>
         </div>
         <div class="arjibang">
           <h3> Contact Me </h3>
           <form>
           EMAIL
           <br><input type="text" placeholder="alamat email">
           <br> PESAN
           <br><textarea cols="20" rows="10" placeholder="Tulis pesan anda...."></textarea>
             <br><button type="submit" >Kirim</button>
        </form>
         </div>
         <hr>
         
</body>
</html>