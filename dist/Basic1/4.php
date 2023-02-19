<?php
//////////////////////////////////
function print_var($var_name) {
    global $$var_name;
    echo '<p>$'.$var_name.' = '.$$var_name.'</p>';
}

//////////////////////////////////
$func = 'increment';
if (function_exists($func)) {
    echo '<p>The function '.$func.' exists.</p>';
} else {
    echo '<p>The function '.$func.' does not exist.</p>';
}

$k = 12;

$a = 10;
$b = increment($a);
$c = duplicate($a);
$d = func1($a);
$e = func2($a);

$vars = array('a','b','c','d','e');
foreach ($vars as $var) {
    print_var($var);
}

function print_var($var_name) {
    global $$var_name;
    echo '<p>$'.$var_name.' = '.$$var_name.'</p>';
}

function increment($n) {
    return $n + 1;
}
    
function duplicate($n) {
    return 2 * $n;
}

function func1($n) {
    global $k;
    return $k * $n;
}

function func2($n) {
    $q = $GLOBALS['k'];
    return $q * $n;
}

//////////////////////////////////
$counter = 0;

product(10, 5);
product(11, 6);
product(12, 7);
product(13, 8);
product(14, 9);
product(15, 10);
product(16, 11);

function product($a, $b) {
    global $counter;
    $counter++;
    echo '<p>counter = '.$counter.'</p>';
    
    if($counter>5) {
        echo '<p style="color: red;">The function call limit exceeded.</p>';
        return;
    }
    }
    
    
    $p = $a * $b;
    echo '<p>'.$a.' x '.$b.' = '.$p.'</p>';
//////////////////////////////////
product(10, 5);
product(11, 6);
product(12, 7);
product(13, 8);
product(14, 9);
product(15, 10);
product(16, 11);

function product($a, $b) {
    static $counter = 0;
    $counter++;
    echo '<p>counter = '.$counter.'</p>';
    
    if($counter>5) {
        echo '<p style="color: red;">The function call limit exceeded.</p>';
        return;
    }
    
    $p = $a * $b;
    echo '<p>'.$a.' x '.$b.' = '.$p.'</p>';
}

//////////////////////////////////
include_once('functions.php');

$a = 10;
$b = 20;

print_var('a');
print_var('b');

include_once('functions.php');

//////////////////////////////////

function outer($message) {
    echo '<p>Outer function says: '.$message.'.</p>';
    
    if(!function_exists('inner')) {
        function inner($message2) {
            echo '<p>Inner function says: '.$message2.'.</p>';
        }
    }
    
    require_once('functions.php');
}

outer('A');
inner('B');
outer('C');

$a = 10;
print_var('a');

//////////////////////////////////
include_once('functions.php');

$a = 10;
$b = $a;
$c =& $a;

echo '<p>Before:</p>';
print_var('a');
print_var('b');
print_var('c');

$b++;
$c+=3;
$a--;

echo '<p>After:</p>';
print_var('a');
print_var('b');
print_var('c');




//////////////////////////////////
require_once('functions.php');

$a = 10;

print_var('a');
increment($a);
print_var('a');

duplicate($a);
print_var('a');


function increment(&$a) {
    $a++;
    echo '<p>Value after increment: '.$a.'</p>';
}

function duplicate(&$a) {
    $a *= 2;
    echo '<p>Value after duplication: '.$a.'</p>';
}
//////////////////////////////////

$a = array(10,11,12,13,14,15);

$i = 3;
$e =& get_element($a, $i);

echo 'Before:';
echo '<br/>';
echo '$a['.$i.'] = '.$a[$i];
echo '<br/>';
echo '$e = '.$e;
echo '<br/>';
echo '<br/>';

//$e++;
$a[$i]++;

echo 'After:';
echo '<br/>';
echo '$a['.$i.'] = '.$a[$i];
echo '<br/>';
echo '$e = '.$e;
echo '<br/>';

function &get_element(&$array, $index) {
    return $array[$index];
}

function &find_element(&$array, $value) {
    $index = array_search($value, $array);
    return $array[$index];
}

//////////////////////////////////

$a = array(10,11,12,13,14,15);

$v = 13;
$i = array_search($v, $a);
$e =& find_element($a, $v);

echo 'Before:';
echo '<br/>';
echo '$a['.$i.'] = '.$a[$i];
echo '<br/>';
echo '$e = '.$e;
echo '<br/>';
echo '<br/>';

//$e--;
$e = 0;

echo 'After:';
echo '<br/>';
echo '$a['.$i.'] = '.$a[$i];
echo '<br/>';
echo '$e = '.$e;
echo '<br/>';

function &get_element(&$array, $index) {
    return $array[$index];
}

function &find_element(&$array, $value) {
    $index = array_search($value, $array);
    return $array[$index];
}

//////////////////////////////////
include_once('functions.php');

$a = 10;
$b =& $a;

echo '<p>Step 1:</p>';
print_var('a');
print_var('b');

echo '<p>Step 2:</p>';
$b++;
print_var('a');
print_var('b');

echo '<p>Step 3:</p>';
unset($b);
$b = 0;
print_var('a');
print_var('b');



//////////////////////////////////

include_once('functions.php');

$func = function($n) {
    return $n + 1;
};

$a = 10;
$b = $func($a);

print_var('a');
print_var('b');
echo '<pre>';
var_dump($func);
echo '</pre>';

//////////////////////////////////
include_once('functions.php');

$k = 2;

$func = function($n) use ($k) {
    return $n * $k;
};

$a = 10;
$b = $func($a);

print_var('a');
print_var('b');
echo '<pre>';
var_dump($func);
echo '</pre>';

//////////////////////////////////
//////////////////////////////////


?>