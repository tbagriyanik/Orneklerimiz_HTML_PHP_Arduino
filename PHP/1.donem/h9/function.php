<h1>Fonksiyonlar</h1>
<?php

	enBasit();
	
	//fonksiyon yapımı
	function enBasit()
	{// TR karakterleri kullanmayın
		
		echo "Selam <i>üğişçö</i>";		
	}
	//sınavda çıkmasa da
	
	//deve notasyonu
	//yani ana kelimelerin ilk harfi büyüt
	
	echo "<br>";
	
	enBasit(); //parantez zorunlu
	
	
	echo "<br>";
	
	function parametreliOrnek($param1, $param2) 
	{
		echo "Selam ".$param1;
		$param2 = " <Br>". $param1;
		echo $param2;
	}	
	parametreliOrnek(1999, 34)	;
	
	echo "<br>";
	
	function geriDeger($sayi) 
	{
		$sonuc = $sayi % 5;
		return $sonuc;
	}	
	
	$degisken =  geriDeger(54);
	
	echo $degisken;
	
	echo "<br>";	
	
?>