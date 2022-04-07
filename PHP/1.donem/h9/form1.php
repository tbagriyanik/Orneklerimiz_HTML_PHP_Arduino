<form action="" method="GET">
	<label>Adınız <input type="text" name="ad" autofocus></label>
	<input type="submit" value="Gönder">
</form>


<?php
	if(isset($_GET["ad"])) {		
		if(!empty($_GET["ad"]))
		echo "Selamlar... ".$_GET["ad"];
	}		
	
?>