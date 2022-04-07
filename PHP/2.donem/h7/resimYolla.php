<h1>Dosya İşlemleri</h1>
<a href="urunler.php">Ürün Listesi</a>
Siteye istenmeyen dosyalar atılabilir. <br>
Siteye istenmeyen boyutta dosyalar atılabilir. <br>
Bu sayfa admin tarafından görülebilmeli.<br>
<form method="post" enctype="multipart/form-data">
    Resim Seç:<br>
    <input type="file" name="resim" accept="image/*" multiple>
    <br>
    <input type="submit" value="Yolla" name="yolla">
</form>
<?php
    if(isset($_POST["yolla"]))  {        
        $target_dir = "resimler/";
        $target_file = $target_dir . basename($_FILES["resim"]["name"]);

        if (move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
            echo "Dosya yollandı";
        } else {
            echo "Dosya yollanamadı...";
        }
    }
?>
<hr>
<?php
    if(isset($_GET["sil"])) {
        unlink($_GET["sil"]);
        echo "<strong>Dosya silindi!</strong>";
        header("refresh:2; url=resimyolla.php");
    }
?>
<table border="1" cellpadding="3" cellspacing="0">
    <tr><th>Dosya adı</th><th>Önizleme</th><th>Sil</th> </tr>
<?php
$fileList = glob('resimler/*');
foreach($fileList as $filename){
    if(is_file($filename)){
        echo "<tr>";
        echo "<td>$filename</td>"; 
        echo "<td><img src='$filename' width='500'></td>"; 
        echo "<td><a href='resimYolla.php?sil=$filename' style='text-decoration:none'>❌</a></td>";
        echo "</tr>";
    }   
}
?>
</table>