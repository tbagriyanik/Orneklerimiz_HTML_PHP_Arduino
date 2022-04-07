<?php
header("Content-type: image/png"); //Sayfanın grafik olduğunu tarayıcıya bildiriyoruz.
$resim = imagecreate(250,250); //Resmimizi oluşturuyoruz.
$kirmizi= imagecolorallocate( $resim, 255,0,0 );//Resmin rengini kırmızı olarak belirliyoruz.
$beyaz = imagecolorallocate( $resim, 255,255,255 ); // beyaz rengimizi oluşturuyoruz.
$a=0;
for($x=10,$y=240;$x<130;$x+=10,$y-=10)//x ve y koordinatlarını ayarlıyoruz.
{
$a++; // renk değişimini gerçekleştirmek için kullanıyoruz
if($a %2 == 0)
$color=$beyaz; // bu kısım bir kırmızı bir beyaz olması için gerekli
else
$color=$kirmizi;
imagefilledrectangle($resim,$x,$x,$y,$y,$color);//renge göre boyama yapılıyor
}
imagepng ($resim); //png formatında grafiği oluşturuyoruz ve tarayıcıda görüntülüyoruz.
imagedestroy($resim); //Oluşturduğumuz resmi hafızadan siliyoruz.
?>