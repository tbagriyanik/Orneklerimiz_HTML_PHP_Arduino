<!-- BURASI DA GÖRÜNEN -->
<form action="" method="post">
    Kullanıcı Adı <input type="text" name="ad" id="" value="<?php 
     if (isset($_POST["ad"])) {
        if (!empty ($_POST["ad"])) {
            echo $_POST["ad"];
        }
    }
    ?>" required> <br>
    Parola <input type="password" name="parola" id="" value="<?php 
     if (isset($_POST["parola"])) {
        if (!empty ($_POST["parola"])) {
            echo $_POST["parola"];
        }
    }
    ?>"  required> <br>
    <input type="submit" value="Oturum Aç">
</form>

<?php
//SUNUCU TARAFI
    if (isset($_POST["ad"])) {
        if (!empty ($_POST["ad"])) {
            //gelen bilgiyi temizlemeden VT veya ekrana ATMAYIIN
           echo "Merhaba ".$_POST["ad"];
           echo "<br>";
           echo "İçerik ". htmlspecialchars($_POST["ad"]);
           echo "<br>";
           if ($_POST["ad"]=="admin" && $_POST["parola"]=="admin") {
               echo "<p style='color:green;'>Siteye giriş yapıldı</p>";               
           }
           else {
                echo "<p style='color:red;'>Hatalı Giriş (3)</p>"; 
           }
        } else {
            echo "<p style='color:red;'>Ad boş bırakılamaz (1)...</p>";
        }
    }
    else {
        echo "<p style='color:red;'>Form doldurunuz (2)...</p>";
    }
?>