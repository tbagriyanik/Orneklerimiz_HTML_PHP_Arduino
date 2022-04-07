<?php
   if(isset($_POST["adi"])) {
    $baglan = mysqli_connect("localhost", "root", "", "hafta5urun");
    $sorgu = mysqli_query($baglan , 
       "UPDATE urunler SET 
        ad='".$_POST["adi"]."', 
        fiyat='".$_POST["fiyati"]."',
        tur='".$_POST["turu"]."'
        WHERE kimlik='".$_POST["id"]."'");
       
       if($sorgu) {
           echo "✅ Ürün güncellendi!";
       }else
           echo "🛑 Ürün güncellenemedi...";   
} 
?>

<?php
    if(isset($_GET["id"])){
        $baglan1 = mysqli_connect("localhost", "root", "", "hafta5urun");
        $sorgu1 = mysqli_query($baglan1 , "SELECT * FROM urunler WHERE kimlik='".$_GET["id"]."'");
        $kayit = mysqli_fetch_assoc($sorgu1);

        $adi = $kayit["ad"];
        $fiyati = $kayit["fiyat"];
        $turu = $kayit["tur"];
    }
?>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
    Ürün Adı <input type="text" name="adi" value="<?php echo $adi?>"> <br>
    Ürün fiyat <input type="text" name="fiyati" value="<?php echo $fiyati?>"> <br>
    Ürün Tür <input type="text" name="turu" value="<?php echo $turu?>"> <br>
    <input type="submit" value="Ürün Güncelle">
</form>

<a href="index.php">🏡 Ana Sayfa</a>