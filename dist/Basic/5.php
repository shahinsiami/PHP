<?php
//////////////////////////////////
error_reporting(0);
// error_reporting(E_ALL & ~E_WARNING);

include('functions.php');

echo 'Hello World!';


//////////////////////////////////
$x = 4;
try {
    $y = Inverse($x);
} catch (Exception $e) {
    $y = 'undefined';
} finally {
    echo "Inverse of $x is $y.";
}

function Inverse($x) {
    if ($x == 0) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}


?>