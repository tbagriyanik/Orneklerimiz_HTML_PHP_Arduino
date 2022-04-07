<h1>Session - Oturum KAPA</h1>
<?php
    session_start(); //sayfada oturum desteği olacak
    session_destroy(); //oturumdaki tüm veriler silinir
    echo "Oturum kapandı...";
?>
<br>
<a href="oturumKapa.php">Oturumu Kapa</a>
<br>
<a href="oturumYap.php">Oturum Yap</a>
<br>
<a href="oturumOku.php">Oturum Oku</a>