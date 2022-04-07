<h1>Çerez Oku</h1>
<?php
    if (isset($_COOKIE["kullaniciAdi"])) {
        echo "Çerez içeriği: <br>";
        echo $_COOKIE["kullaniciAdi"];       
        //gelen bilgi temizlenmelidir
    }  else {
        echo "Daha çerez oluşmamış <br>";       
    }
?>

<br>
<a href="cerezSil.php">Çerezi Yoket/Oturumu Kapa</a>
<br>
<a href="cerezYap.php">Çerez Yap</a>
<br>
<a href="cerezOku.php">Çerez Oku</a>