<?php
header("Content-type: image/png"); //Sayfanın grafik olduğunu tarayıcıya bildiriyoruz.
$resim = imagecreate(250,250); //Resmimizi oluşturuyoruz.
imagecolorallocate( $resim, 255,0,0 ); //Resmin rengini kırmızı olarak belirliyoruz.
imagepng ($resim); //png formatında grafiği oluşturuyoruz ve tarayıcıda görüntülüyoruz.
imagedestroy($resim); //Oluşturduğumuz resmi hafızadan siliyoruz. 
?>