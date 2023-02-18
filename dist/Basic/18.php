<?php
//////////////////////////////////
ob_start();

echo 'Apple<br/>';
echo 'Banana<br/>';
echo 'Cyan<br/>';
echo 'Diamond<br/>';
echo 'Egg<br/>';

// $contents = ob_get_contents();
// ob_end_clean();

// $contents = ob_get_clean();

$contents = ob_get_flush();

echo '<br/>';
echo strtolower($contents);

echo '<br/>';
echo strtoupper($contents);

//////////////////////////////////
$a = array(
    'Apple',
    'Banana',
    'Orange',
    'Pineapple',
);

ob_start();
var_dump($a);
$output = ob_get_clean();

$output = str_replace('Apple', 'Google', $output);

file_put_contents('my-text-file.txt', $output);

//////////////////////////////////
array(4) {
    [0]=>
    string(5) "Google"
    [1]=>
    string(6) "Banana"
    [2]=>
    string(6) "Orange"
    [3]=>
    string(9) "Pineapple"
  }
  
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>