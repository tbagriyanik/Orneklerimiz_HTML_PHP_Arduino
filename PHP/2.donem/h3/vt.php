<?php
    //1. aşama : vt bağlantısı
    $baglan = mysqli_connect("localhost", "root", "", "hafta3");

    //2. aşama : SQL sorgusu (Limit ile kısıtlama lazım)
    $sorgu = mysqli_query($baglan, "SELECT * FROM birtablo") ;

    //3. aşama : Tablodan veri çekme
    while($kayit = mysqli_fetch_assoc($sorgu)){
        echo $kayit["kimlik"];  
        echo $kayit["ad"]; 
        echo "<br>";
    }
?>
