<h1>Çerez Sil (Oturumu Kapa gibi)</h1>

<?php
    setcookie("kullaniciAdi","", time()-1);
    echo "kullanici Adi silindi...";
?>
<br>
<a href="cerezSil.php">Çerezi Yoket/Oturumu Kapa</a>
<br>
<a href="cerezYap.php">Çerez Yap</a>
<br>
<a href="cerezOku.php">Çerez Oku</a>