<h1>Session - Oturum OKU</h1>
<h6>üyelik gerektiren yerlerde kullanalım</h6>
<br>
<?php
    session_start(); //sayfada oturum desteği olacak

    if (isset($_SESSION["kullanici"])) {
        echo "Hoşgeldiniz : ".$_SESSION["kullanici"];
    } else
    echo "Oturum açmadınız...";
?>

<br>
<a href="oturumKapa.php">Oturumu Kapa</a>
<br>
<a href="oturumYap.php">Oturum Yap</a>
<br>
<a href="oturumOku.php">Oturum Oku</a>