<?php
	$sunucu = @mysqli_connect("localhost", "root", "","amp12a" );
	
	if(!$sunucu) die("Sunucu hatası...");
	
	$sql = @mysqli_query($sunucu, "SELECT * FROM ogrenciler" );
	
	if(!$sql) die("Sorguda hata var");
	
	while($satir = mysqli_fetch_assoc($sql)){
		echo "id: " . $satir["id"]. " - isim: " . $satir["isim"]. " " . $satir["maas"]. "<br>";
		
	}
	
	mysqli_close($sunucu);
?>