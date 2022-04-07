<h1>Çerez Yap (Oturum Aç)</h1>
<form action="" method="post">
	Çerez Bilginiz <br>
	<input type="text" name="bilgi" id="">
	<br>
	<input type="submit" value="Değiştir">
</form>
<?php
if (isset($_POST["bilgi"])) {
	setcookie("kullaniciAdi", $_POST["bilgi"], time()+60*60*24*30); 
} else {
	setcookie("kullaniciAdi", "hasan", time()+60*60*24*30); 
}
?>
<br>
<a href="cerezSil.php">Çerezi Yoket/Oturumu Kapa</a>
<br>
<a href="cerezYap.php">Çerez Yap</a>
<br>
<a href="cerezOku.php">Çerez Oku</a>