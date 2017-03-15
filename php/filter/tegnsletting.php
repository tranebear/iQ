<?php
	
	$alfabetet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','æ','ø','å','ñ',' ',);
	//$alfabetet = strtolower($alfabetet);
	//echo $alfabetet;

	$sentence = 'fjern. all3e teg,n i,                denne!; setningen';

	$newsentence = '';

	for ($i = 0; $i < strlen($sentence); $i++) {
		for ($j = 0; $j < sizeof($alfabetet); $j++) {
			if (strpos($sentence[$i], $alfabetet[$j]) !== false) {
				$newsentence = $newsentence.$sentence[$i];		
			}
		}
	}

	$arraysentence = explode(" ", $newsentence);
	$mellom = "";
	print_r($arraysentence);
	echo "<br>";
	$i = 0;

	$arraysize = sizeof($arraysentence);
	
	while($i < $arraysize) {
		if (strcasecmp($arraysentence[$i], $mellom) == 0) {
			unset($arraysentence[$i]);
		} $i++;
	}
	$foo2 = array_values($arraysentence);
	
	print_r($arraysentence);
	echo "<br>";
	print_r($foo2);
	
?>