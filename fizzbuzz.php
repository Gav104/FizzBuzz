<?php

$numbers = range(1, 100);

foreach ($numbers as $key) {
	if ($key % 3 == 0 && $key % 5 == 0) {
		echo "<br>" . "FizzBuzz" . "<br>"; 
	} elseif ($key % 3 == 0) {
		echo "<br>" . "Fizz". "<br>";
	} elseif ($key % 5 == 0) {
		echo "<br>" . "Buzz". "<br>";
	} else {
		echo "<br>" . "$key". "<br>";
	}

}

foreach ($variable as $key => $value) {
	# code...
}
?>

