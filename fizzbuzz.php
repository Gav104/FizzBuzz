<?php

$numbers = range(1, 100);

foreach ($numbers as $key) {
	if ($key % 3 == 0 && $key % 5 == 0) {
		echo "FizzBuzz" . "<br>"; 
	} elseif ($key % 3 == 0) {
		echo "Fizz". "<br>";
	} elseif ($key % 5 == 0) {
		echo "Buzz". "<br>";
	} else {
		echo "$key". "<br>";
	}

}

foreach ($variable as $key => $value) {
	# code...
}
?>

