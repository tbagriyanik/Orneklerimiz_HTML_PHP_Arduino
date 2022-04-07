<form action="" method="post">
    <label for="isim">Adınızı giriniz </label>
        <input type="text" name="isim" id="isim" required>
<br>
<label>Sınıf giriniz<input type="text" name="sinif" id=""></label>
<br>
<input type="submit" value="Yolla">
<input type="reset" value="Temizle">
    
</form>

<?php
    if (isset($_POST["isim"])) {
       if (!empty(trim($_POST["isim"]))) {
          echo "Merhaba <b>".htmlspecialchars($_POST["isim"]). "</b>";

          if(is_numeric($_POST["sinif"])) {
              echo "Girilen:". $_POST["sinif"];  
              echo "<br>";
              echo "Staj Ücretiniz: ". ($_POST["sinif"]*30/100);
          }
          else {
              echo "<br>Sayı girilmedi!";
          }
       }
       else {
           echo "Boş giriş yapıldı.";
       }
    } else 
    {
        echo "Form Doldurunuz...";
    }
?>