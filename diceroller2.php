<!DOCTYPE html>
<html>
<body>

<?php


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


$freqs = []; // array in which you save the frequency of each face

for ( $i = 0; $i < 5; ++$i ) {
    ++ $freqs[ rand( 1,6 ) ] ;
}


$key = range( 1,6 );

unset( $freqs[0] );

foreach ( $freqs as $key => $value ) {
  echo "<br>  $key was landed on $value times <br>";
}


?>



</body>
</html>
