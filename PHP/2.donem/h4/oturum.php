<?php
    session_start(); //her sayfaya ekleyiniz
    if(isset($_GET["oturum"])){
        //oturum kapama
        session_destroy();
        header("Refresh:0;url=index.php");
    } else {
        echo "Oturumu kapamak için ";
        echo "<a href=oturum.php?oturum=kapa>Çıkış</a> <br>";
        echo "<a href=index.php>Ana Sayfa</a>";
    }
?>