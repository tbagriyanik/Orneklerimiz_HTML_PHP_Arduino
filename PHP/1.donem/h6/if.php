<?php
    /*//if.php?user=aaa&pass=333
    $kullanici = isset($_GET["user"])?$_GET["user"]:""; 
    //adresten veri alma
    $parola = isset($_GET["pass"])?$_GET["pass"]:"";

    if($kullanici == "admin" && $parola == "qwe_123")
     {
        echo "✅ Hoş geldiniz yöneticisiniz.";
     } else {
        echo "❌ Giriş yapamazsınız... Parola veya ad yanlış";
     } 
    
     echo "<p>Sitedeki diğer şeyler...</p>";*/
$say1=95;
$say2=65;
$say3=90;
$eb=0;
if ($say1>$say2)
{
    $eb=$say1;
}
else if($say2>$say1)
{
    $eb=$say2;
}
else
$eb=$say3;
echo "en büyük sayı".$eb;

?>