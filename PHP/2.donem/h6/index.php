<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futbol Puan Durumu</title>
</head>
<body>
<h1>Futbol Puan Durumu</h1>
<p><a href="index.php">Yenile</a></p>
<form method="get" action="index.php">
    <input type="text" name="ara" id="" placeholder="takım adı giriniz">
    <input type="submit" value="Ara"> 
</form>
<table width="300" border=1 bordercolor="orange" cellspacing="0" cellpadding="1">
    <tr bgcolor="lime">
        <th><a href="index.php?sirala=takimAdi">Takım Adı</a></th>
        <th><a href="index.php?sirala=g">G</a></th>
        <th><a href="index.php?sirala=b">B</a></th>
        <th><a href="index.php?sirala=m">M</a></th>
        <th><a href="index.php?sirala=a">A</a></th>
        <th><a href="index.php?sirala=y">Y</a></th>
        <th><a href="index.php?sirala=av">Av</a></th>
        <th><a href="index.php?sirala=puan">Puan</a></th>    
    </tr>
<?php
   $baglan = mysqli_connect("localhost", "root", "" , "h6puan");
   mysqli_set_charset($baglan, 'utf8'); //dil sorunu şığüçöİ
   mysqli_query($baglan, "SET CHARACTER SET utf8");
   
   if(isset($_GET["sirala"])) {  
        $gelen = $_GET["sirala"];
        switch ($gelen) {
            case 'takimAdi':
                $sirala = " takimAdi";
                break;
            case 'g':
                $sirala = " galibiyet";
                break;
            case 'b':
                $sirala = " beraberlik";
                break;
            case 'm':
                $sirala = " maglubiyet";
                break;                
            case 'a':
                $sirala = " atilanGol";
                break;                
            case 'y':
                $sirala = " yenilenGol";
                break;                
            case 'av':
                $sirala = " atilanGol-yenilenGol";
                break;  
            case 'puan':
                $sirala = " galibiyet*3+beraberlik";
                break;                
                            
            default:
                $sirala = " galibiyet*3+beraberlik DESC";
                break;
        }
   }
    else
        $sirala = " (galibiyet)*3+beraberlik DESC";    

    

    if(isset($_GET["ara"]))       
        $sorgu = mysqli_query($baglan, "SELECT * FROM takimlar WHERE takimAdi LIKE '%".
                                $_GET["ara"]."%' ORDER BY $sirala ");
    else
        $sorgu = mysqli_query($baglan, "SELECT * FROM takimlar ORDER BY $sirala");

   while($kayit = mysqli_fetch_assoc($sorgu)){
        echo "<tr><td align='left'>";
        echo $kayit["takimAdi"]."</td><td align='center'>";
        echo $kayit["galibiyet"]."</td><td align='center'>";
        echo $kayit["beraberlik"]."</td><td align='center'>";
        echo $kayit["maglubiyet"]."</td><td align='center'>";
        echo $kayit["atilanGol"]."</td><td align='center'>";
        echo $kayit["yenilenGol"]."</td><td align='center'>";
        echo $kayit["atilanGol"]-$kayit["yenilenGol"]."</td><td align='center'>";
        echo $kayit["galibiyet"]*3+$kayit["beraberlik"];
        echo "</td></tr>";
   }
?>
</table>
</body>
</html>