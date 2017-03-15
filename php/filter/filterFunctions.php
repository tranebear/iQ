<?php
	//header('Content-Type: *mimetype*; charset=utf-8');

	function removeNonLettersFromInput($input) {
		$alfabetet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','æ','ø','å','ñ',' ',);
		$input = strtolower($input);
		$result = '';
		for ($i = 0; $i < strlen($input); $i++) {
			for ($j = 0; $j < sizeof($alfabetet); $j++) {
				if (strpos($input[$i], $alfabetet[$j]) !== false) {
					$result = $result.$input[$i];		
				}
			}
		}
		return $result;
	}

	function returnInputAsArray($input) {
		$arraysentence = explode(" ", $input);
		$mellom = "";
		
		$arraysize = sizeof($arraysentence);
		$i = 0;
		while($i < $arraysize) {
			if (strcasecmp($arraysentence[$i], $mellom) == 0) {
				unset($arraysentence[$i]);
			} 
			$i++;
		}
		return array_values($arraysentence);
	}

	// $tekst = "FJ3e,rn     a;lle tegn   i;.    de!nne setningen";
	// Eksempelbruk: 
	// print_r(returnInputAsArray(removeNonLettersFromInput($tekst)));

	function isBadWord($inputword) {
		$blackList = array('jævla','fitte','kuk','faen','fittekuk');
		for ($i=0; $i < sizeof($blackList); $i++) { 
			if (strcasecmp($blackList[$i], $inputword) == 0) {
				return true;
			}
		}
		return false;
	}

	function isBadInput($input) {
		$arrayOfInput = returnInputAsArray(removeNonLettersFromInput($input));
		for ($i=0; $i < sizeof($arrayOfInput); $i++) { 
			echo "Ord isBadWord() sjekker: ".$arrayOfInput[$i];
			echo "          Verdi: ".isBadWord($arrayOfInput[$i])."<br>";
			if (isBadWord($arrayOfInput[$i])) {
				return true;
			}
		}
		return false;
	}

	function submitQuestion() {
		
	}
/*
	echo isBadInput("Faens jævla fittekuk, det er det du er!!        Satan");
	echo "<br>";
	echo isBadInput("Hva er Scrum?")

*/
?>