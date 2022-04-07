<p>
   ❌ Silinmesi için <a href="sil.php?cevap=evet&id=<?php echo $_GET["id"]?>">emin misiniz?</a>
</p>
<?php
   if(isset($_GET["cevap"])) {
        $baglan = mysqli_connect("localhost", "root", "", "hafta5urun");
        $sorgu = mysqli_query($baglan , "DELETE FROM urunler WHERE kimlik=".$_GET["id"]);

        if($sorgu) {
            echo $_GET["id"]. " ürün silindi! ✅";
        }else
            echo $_GET["id"]. " ürün silinemedi... 🛑";
    } 
?>
<hr>
<a href="index.php">🏡 Ana Sayfa</a>