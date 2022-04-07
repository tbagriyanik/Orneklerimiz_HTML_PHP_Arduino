<?php
    $baglan = mysqli_connect("localhost", "root", "", "hafta5urun");
    $sorgu = mysqli_query($baglan , "SELECT * FROM urunler");
    while ($kayit = mysqli_fetch_assoc($sorgu)) {
        echo $kayit["kimlik"];  echo "&nbsp;";
        echo $kayit["ad"];      echo "&nbsp;";
        echo $kayit["fiyat"];   echo "&nbsp;";
        echo $kayit["tur"];     echo "&nbsp;";
        echo "<a href='guncelle.php?id=".$kayit["kimlik"]."'>🧺 düzenle</a> ";
        echo "<a href='sil.php?id=".$kayit["kimlik"]."'>❌ sil</a>";
        echo "<hr>";
    }
    echo "<a href='ekle.php'>🛵 Yeni Ürün Ekle</a>";
?>