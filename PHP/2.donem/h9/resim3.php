<?php
header("Content-type: image/jpeg"); // png türünde grafik oluşturacağımızı bildiriyoruz
$resim = imagecreate(200, 150); // resmin boyutlarını belirliyoruz.
imagecolorallocate($resim, 0, 100, 0); // Rengi yeşil olarak belirliyoruz.
$kafa = imagecolorallocate($resim, 255, 255, 255); // kafanın rengini belirliyoruz.
$goz=imagecolorallocate($resim, 255, 127, 80); // gözlerin rengini belirliyoruz.
imagefilledellipse($resim, 100, 75, 150, 100, $kafa); // (kafa) çiziyoruz.
imagefilledellipse($resim, 65, 65, 30, 20, $goz); // sol gözü çiziyoruz.
imagefilledellipse($resim, 135, 65, 30, 20, $goz); // sağ gözü çiziyoruz.
imagefilledellipse($resim, 100, 70, 10, 50, $goz); // burunu çiziyoruz.
imagefilledellipse($resim, 100, 105, 100, 10, $goz); // ağzı çiziyoruz.
imagepng($resim); // resmimizi görüntülüyoruz.
imagedestroy($resim); // resmimizi hafızadan siliyoruz. 
?>