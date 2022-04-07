<?php
    $baglan = mysqli_connect("localhost", "root", "" , "h7urun");

    $sorgu = mysqli_query($baglan, "SELECT * FROM urun");

    echo "<table border='1' cellspacing='0'>";
    while ($kayit=mysqli_fetch_assoc($sorgu)){
        echo "<tr>";
        echo "<td>".$kayit["urunAdi"]."</td>";
        echo "<td><img src='".$kayit["urunResmi"]."' width='200'/></td>";
        echo "<td>".$kayit["fiyat"]." ₺</td>";
        echo "</tr>";
    }
    echo "</table>";
?>

<a href="resimYolla.php">Resim İşlemleri</a>