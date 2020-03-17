<!DOCTYPE html>
<html>
<body>

<?php

$dice_array = array(
	1 => 0,
	2 => 0,
	3 => 0,
	4 => 0,
	5 => 0,	
	6 => 0, 

);	

/*
for ($i=0; $i < 10 ; $i++) { 
	(int)$dice_result = (array_rand($dice_array));
		if ($dice_result = 1) {
			$dice_array[1] = +1;
			if ($dice_result = 2) {
				$dice_array[2] = +1;
				}
			if ($dice_result = 3) {
				$dice_array[3] = +1;
				}
			if ($dice_result = 4) {
				$dice_array[4] = +1;
				}
			if ($dice_result = 5) {
				$dice_array[5] = +1;
				}
			if ($dice_result = 6) {
				$dice_array[6] = +1;
				}	
			print_r($dice_array); 
	}
}
*/




function die_render() {

	$new_array = [];

	$die = array(
	'1' => 0,
	'2' => 0,
	'3' => 0,
	'4' => 0,
	'5' => 0,	
	'6' => 0, );

  for ( $i=0; $i < 20; $i++ ) { 

  	$result = array_rand( $die );

  	$single_array = array_push( $new_array, $result );

  	$new_array2 = array_count_values( $new_array );


  	echo '<pre>'; print_r( $new_array2 ); echo '</pre>';

  	}
 }

die_render();

?>



</body>
</html>
