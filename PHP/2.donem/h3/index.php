<h1>Hoş Geldiniz</h1>
<form action="" method="post">
    Adınız <br>
    <input type="text" name="ad"> <br>
    Parolanız <br>
    <input type="password" name="sifre"><br>
    <input type="submit" value="Giriş">
</form>
<?php
    //eğer formdan veri geldi ise
    if(isset($_POST["ad"])){
        $baglan = mysqli_connect("localhost", "root", "", "hafta3");

        //2. aşama : SQL sorgusu (Limit ile kısıtlama lazım)
        $ad = $_POST["ad"]; //SQL injection koruması YOOOK!!
        $prl = $_POST["sifre"];
        $sorgu = mysqli_query($baglan, 
                "SELECT * FROM kullanici WHERE ad='$ad' AND parola='$prl' ") ;

        //3. aşama veritabanından gelen bilgiyi okuma
        if(mysqli_num_rows($sorgu))  {
            echo "<h2>Başarılı 💗</h2>";
        } else {
            echo "<h2>Başarısız 💔</h2>";
        }    
    }
?>