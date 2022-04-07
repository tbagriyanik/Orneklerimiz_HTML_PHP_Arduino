<?php
   $ad = "ahmet" ; //tek değişken
   echo $ad;echo "<br>";
   
   $notlar = array(1,"ali", "mehmet", false,5); 
   //dizi içine değer atama, 0 ile başlar 
   //0-1-2-3-4
   echo $notlar[0]; echo "<br>";
   echo $notlar[1]; echo "<br>";
   echo $notlar[2]; echo "<br>";
   //döngü ile yazdıralım:
   for($i=0; $i<5 ; $i++) {
       echo $notlar[$i];  echo "<br>";
   }
?>