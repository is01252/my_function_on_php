<?php 

function word_limiter($string, $limit = 10)
{
	if (stripos($string, " ")) {
		$explode_string = explode(" ", $string);
		if (count($explode_string) > $limit) {
			$split_string = "";
			for ($i=0; $i < $limit; $i++) { 
				$split_string .= $explode_string[$i] . " ";
			}
			return $split_string . "&hellip;";
		}else{
			return $string;
		}
	}else{
		return $string;	
	}
}

// How to use?

$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo word_limiter($string); // Use Default Settings
echo "<br>";
echo word_limiter($string, 20); // Define limit words with 20

?>
