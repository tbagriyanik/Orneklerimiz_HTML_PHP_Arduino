<?php
//doğrulama kodunun türünü belirtiyoruz
header("content-Type: image/jpeg");
//doğrulama kodunun boyutunu giriyoruz
$en = 100;
$boy = 50;
//resimi oluşturuyoruz
$resim = imagecreate($en, $boy);
//kullanacağımız renkleri oluşturuyoruz
$mavi = imagecolorallocate($resim, 0, 0, 255);
$beyaz = imagecolorallocate($resim, 255, 255, 255);
//resmin uzerine yazacağımız kodu rastgele oluşturuyoruz
$GuvenlikKodu=rand(10000,99999);
//rastgele değerimizi resmin üzerine yazıyoruz
imagestring($resim, 9, 30, 20, $GuvenlikKodu, $beyaz);
//resme çizgi atarak kırılmasını zorlaştırıyoruz
imageline($resim, 0, 25,100, 25, $beyaz);
imageline($resim, 0, 35,100, 35, $beyaz);
//resmi oluşturuyoruz ve tarayıcıda görüntülüyoruz.
imagejpeg($resim);
imagedestroy($resim); //kaynağımızı temizliyoruz
?>