<h1>Session - Oturum YAP</h1>
<h6>üyelik gerektiren yerlerde kullanalım</h6>

<form action="" method="post">
    Kullanıcı Adı<input type="text" name="ad" id=""> <br>
    <input type="submit" value="Oturum Aç">
</form>

<?php
    session_start(); //sayfada oturum desteği olacak

    if (isset($_POST["ad"])) {
        //oturum açalım
        $_SESSION["kullanici"] = $_POST["ad"];
        $_SESSION["yas"] = 18;
        $_SESSION["sinif"] = true;
        //ad temizlenmeli
    } else 
     echo "Kullanıcı adınızı giriniz...";
?>

<br>
<a href="oturumKapa.php">Oturumu Kapa</a>
<br>
<a href="oturumYap.php">Oturum Yap</a>
<br>
<a href="oturumOku.php">Oturum Oku</a>