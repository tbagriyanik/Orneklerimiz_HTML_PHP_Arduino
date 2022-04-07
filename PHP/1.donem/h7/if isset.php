<?php
	//empty boş mu demek
	//isset o değişken bellekte var mı?
	
	$a = "abc";
	$b = '';
	
	if(isset($a)) 
		echo "a değişkeni var<br>";
	else
		echo "a değişkeni yok<br>";
	
	if(isset($c)) 
		echo "c değişkeni var<br>";
	else
		echo "c değişkeni yok<br>";
?>
