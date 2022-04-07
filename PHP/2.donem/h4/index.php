<h1>Sitemiz - Örnek Kullanıcı Girişi</h1>
<?php
 session_start(); //sayfa oturum destekli
    if (isset($_SESSION["ad"])) {
        echo "Hoş geldiniz ".$_SESSION["ad"];
        echo " <a href='oturum.php?oturum=kapa'>Çıkış</a>" ;
    } else {
?>
<form action="" method="post">
    <div>Kullanıcı Adınız<br>
        <input type="text" name="ad" id="">
    </div>
    <div> Parola<br>
        <input type="password" name="parola" id="">
    </div>
    <div><input type="submit" value="Giriş"></div>
</form>
<?php   
    if(isset($_POST["ad"])){
        $ad = $_POST["ad"]; //temizlik ve uzunluk kontrolleri
        $par = $_POST["parola"];
        $vt = mysqli_connect("localhost", "root", "", "hafta4");
        $sorgu = mysqli_query($vt, 
        "SELECT * FROM uyeler WHERE adi='$ad' AND parola='$par'");
        if(mysqli_num_rows($sorgu)){
            echo "Başarılı Giriş";
            $_SESSION["ad"] =$ad;  //sayfa yenilenmesi lazım
            header("Refresh:0; url=index.php");
        } else {
            echo "Başarısız oldunuz...";
        }
    }
    }//if (isset( SESSION    
?>