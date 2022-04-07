<?php
session_start();

    $kullaniciParolasi = "123";
    $_SESSION["parola"] = $kullaniciParolasi;
    setcookie("parola", $kullaniciParolasi, time()+60*60) ;

    echo "Buraya kadar güvenlik yok... Açık var, düz metin halinde...";

?>
<br>
<?php
    $guvenli = md5($kullaniciParolasi);
    $_SESSION["parolaKripto"] = $guvenli;
    setcookie("parolaKripto", $guvenli, time()+60*60) ;

    echo "Biraz daha güvenli... https://md5.gromweb.com/?md5=202cb962ac59075b964b07152d234b70";
?>
<br>
<?php
    $guvenli2 = md5($kullaniciParolasi."biZim._?*123<Tuz"); //salt-tuz ekleme
    $_SESSION["parolaKripto2"] = $guvenli2;
    setcookie("parolaKripto2", $guvenli2, time()+60*60) ;

    echo "Daha güvenli... Tuzlama yöntemi";
?>