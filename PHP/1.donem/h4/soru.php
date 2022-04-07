<?php
//iki tarih arasındaki farkı yazar
	$dogum = 2000;
	$buyil = 2021;
	$sonuc = ($buyil-$dogum);
	echo "Yaşınız ".$sonuc. " oldu";
?>
<?php
	//eğer yaşı 18 ve üzeri ise ehliyet alabilir
	//eğer yaşı 18 altı ise ehliyet alamaz...
	//eğer yaşı 20 ise "askerlik zamanı" diye yazar
	if($sonuc>=18) 
		echo "<br/>ehliye alabilir"; 
	else 
		echo "<br/>ehliyet alamaz";
	if($sonuc == 20)
		echo "<br/>askerlik zamanı";
?>
<?php
	// asgari ücret 2825 tl 
	// %30 ile stajer ücreti kaç olur
	$ucret = 2825;
	echo "<br/>Stajer ücreti bu yıl ".($ucret*30/100)." alır"; 
?>
