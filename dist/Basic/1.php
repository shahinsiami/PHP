<?php
define('PI', 3.14);

$r = 5;
$P = 2*PI*$r;
$A = PI*$r*$r;

var_dump(PI);
//////////////////////////////////
$a = 3;
$b = 4;
$c = $a + $b;
echo 'The value of $a is '.$a.'.';
echo '<br/>';
echo 'The value of $b is '.$b.'.';
echo '<br/>';
echo 'The sum of $a and $b is '.$c.'.';
//////////////////////////////////
$a = 10;
$b = $a--;
echo '$a = '.$a.'<br/>';
echo '$b = '.$b.'<br/>';
//////////////////////////////////
echo '$var = '.$var.'<br/>';
echo 'isset($var) = '.isset($var).'<br/>';
echo 'empty($var) = '.empty($var).'<br/>';
echo 'is_int($var) = '.is_int($var).'<br/>';
echo 'is_float($var) = '.is_float($var).'<br/>';
echo 'is_numeric($var) = '.is_numeric($var).'<br/>';
echo 'is_string($var) = '.is_string($var).'<br/>';
echo 'is_array($var) = '.is_array($var).'<br/>';
echo 'is_bool($var) = '.is_bool($var).'<br/>';
echo 'is_object($var) = '.is_object($var).'<br/>';
echo 'is_null($var) = '.is_null($var).'<br/>';
//////////////////////////////////
echo '<pre>';
print_r($var);
echo '</pre>';
//////////////////////////////////
$n = 10;
$pi = 3.14;
$str = 'hii';
$b = true;
$a = [1, 2, 5];
$e = null;

echo '$n = '.$n;
echo ' and its type is '.gettype($n).'.<br/>';

echo '$pi = '.$pi;
echo ' and its type is '.gettype($pi).'.<br/>';

echo '$str = '.$str;
echo ' and its type is '.gettype($str).'.<br/>';

echo '$b = '.$b;
echo ' and its type is '.gettype($b).'.<br/>';

echo '$a = '.$a;
echo ' and its type is '.gettype($a).'.<br/>';

echo '$e = '.$e;
echo ' and its type is '.gettype($e).'.<br/>';
//////////////////////////////////
$var = [1, 2, 3.14, 8, 'ABC'];

// $var = (string) 10;

echo '<pre>';
var_dump($var);
echo '</pre>'
//////////////////////////////////

$var = [(float)1,(string)2,(double)3,4,5,'abc'];
var_dump($var);
echo empty($var);
$a = ' hi';
$b = ' there';
$c = $a.$b;
echo $c;
$c .= $a.$b;
echo $c;
$d = ($a == $a)?  $b :  $c;
echo $d;
echo date('H:i:s');

$e = array(
    'a1'=>'a',
    'a2'=>'b',
    'a3'=>rand(1,6),
    'a4'=>'d',
    'a5'=>'e',
    'a6'=>array(1,2,3,4,5)
);
$f = [
    'a1'=>'a',
    'a2'=>'b',
    'a3'=>rand(1,6),
    'a4'=>'d',
    'a5'=>'e',
    'a6'=>array(1,2,3,4,5)
];

$a = $e + $f ; //remove key exsit from f
$a = array_merge($e,$f);
echo '<br>';
var_dump($f['a3']);
unset($a);

//////////////////////////////////
$h = date('H');

if ($h>5) {
    echo '$h > 5';
} elseif ($h>3) {
    echo '$h>3 and $h<=5';
}
//////////////////////////////////
$h = date('H');

if ($h > 4 && $h <= 10) {
    echo 'Good morning!';
}

if ($h > 10 && $h <= 14) {
    echo 'Have a nice day!';
}

if ($h > 14 && $h <= 17) {
    echo 'Good afternoon!';
}

if ($h > 17 && $h <= 19) {
    echo 'Good evening!';
}

if ($h > 19 || $h < 3) {
    echo 'Good night!';
}
//////////////////////////////////
$d = 3;
$weekday = '';

if ($d == 1) {
    $weekday = 'Saturday';
} elseif ($d == 2) {
    $weekday = 'Sunday';
} elseif ($d == 3) {
    $weekday = 'Monday';
} elseif ($d == 4) {
    $weekday = 'Tuesday';
} elseif ($d == 5) {
    $weekday = 'Wednesday';
} elseif ($d == 6) {
    $weekday = 'Thursday';
} elseif ($d == 7) {
    $weekday = 'Friday';
}

if (!empty($weekday)) {
    echo 'Weekday is '.$weekday.'.';
} else {
    echo 'Invalid day number!<br/>';
}
//////////////////////////////////

$d = 7;

switch($d) {
    case 1: 
        $weekday = 'Saturday';
        break;
    
    case 2:
        $weekday = 'Sunday';
        break;
    
    case 3:
        $weekday = 'Monday';
        break;
        
    case 4:
        $weekday = 'Tuesday';
        break;
    
    case 5:
        $weekday = 'Wednesday';
        break;
    
    case 6:
        $weekday = 'Thursday';
        break;
    
    case 7:
        $weekday = 'Friday';
        break;
    
    default:
        $weekday = '';
}

if (!empty($weekday)) {
    echo 'Weekday is '.$weekday.'.';
} else {
    echo 'Invalid day number!<br/>';
}


//////////////////////////////////
$n = 219;

while($n >= 1) {
    echo $n.'<br/>';
    $n /= 2;
}
//////////////////////////////////
$n = 3;
$K = 5;

$counter = 0;
while ($counter < $K) {
    $counter++;
    $n *= 2;
    echo $n.'<br>';
}
//////////////////////////////////
$n = 3;
$K = 5;

$counter = 0;
while (true) {
    $counter++;
    if($counter > $K) {
        break;
    }
    
    $n *= 2;
    echo $n.'<br>';
}
//////////////////////////////////
$b = 2;

$pmin = 0;
$pmax = 10;
$p = $pmin;

echo '<table>';
echo '<tr><th style="width: 50px;">p</th><th style="width: 100px;">b^p</th></tr>';

while($p <= $pmax){
    echo '<tr>';
    echo '<td style="text-align: center;">'.$p.'</td>';
    echo '<td style="text-align: center;">'.$b**$p.'</td>';
    echo '</tr>';
    $p++;
}

echo '</table>';
//////////////////////////////////
$n = 0.12;

do {
    echo $n.'<br/>';
    $n /= 2;
} while ($n >= 1);
//////////////////////////////////
$n = 3;
$K = 5;

for ($i = 0; $i < $K; $i++) {
    $n *= 2;
    echo $n.'<br>';
}
//////////////////////////////////

?>
