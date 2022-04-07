<?php
 if(isset($_POST["adi"])) {
     $baglan = mysqli_connect("localhost", "root", "", "hafta5urun");
     $sorgu = mysqli_query($baglan , 
        "INSERT INTO urunler VALUES 
         ('', '".$_POST["adi"]."','".$_POST["fiyati"]."','".$_POST["turu"]."')");
        
        if($sorgu) {
            echo "✅ Ürün eklendi!";
        }else
            echo "🛑 Ürün eklenemedi...";   
 }     
?>
<form method="post">
    Ürün Adı <input type="text" name="adi" id=""> <br>
    Ürün fiyat <input type="text" name="fiyati" id=""> <br>
    Ürün Tür <input type="text" name="turu" id=""> <br>
    <input type="submit" value="Ürün Ekle">
</form>

<a href="index.php">🏡 Ana Sayfa</a>