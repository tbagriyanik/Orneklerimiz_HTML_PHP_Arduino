<form action="" method="get">
    Sayı giriniz <input type="text" name="giris" id="" placeholder="sayı">
    <input type="submit" value="Gönder">
</form>

<?php
    // GET yöntemi adresten gönderir  localhost/dosya.php?a=asdasd
    // POST ise arkaplandan yollar    localhost/dosya.php
    // GET arama için kullanılır
    // POST ise kullanıcı girişi için 
    if (isset($_GET["giris"])) { // ADRESTEN bir bilgi geldi mi?
        if (!empty($_GET["giris"])) { //EĞER içi boş gelmemiş ise
            if (is_numeric($_GET["giris"])) { //EĞER gelen sayı ise
                for ($i=1; $i <= 10; $i++) { 
                    $gelen = $_GET["giris"];
                   //echo  $gelen ."&nbsp;x&nbsp;". $i . " = " . $gelen * $i . "<br>";
                   echo "$gelen x $i = ".$gelen*$i." <br>";
                }
            }
        }        
    }  
?>