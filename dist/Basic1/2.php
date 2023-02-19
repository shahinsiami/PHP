<?php


//////////////////////////////////

$N = 10000;

$f1 = 0;
$f2 = 0;
$f3 = 0;
$f4 = 0;
$f5 = 0;
$f6 = 0;

for ($i = 0; $i < $N; $i++) {
    $r = rand(1, 6);
    switch ($r) {
        case 1: $f1++; break;
        case 2: $f2++; break;
        case 3: $f3++; break;
        case 4: $f4++; break;
        case 5: $f5++; break;
        case 6: $f6++; break;
    }
}

$p1 = $f1/$N;
$p2 = $f2/$N;
$p3 = $f3/$N;
$p4 = $f4/$N;
$p5 = $f5/$N;
$p6 = $f6/$N;

echo 'p1 = '.$p1.'<br/>';
echo 'p2 = '.$p2.'<br/>';
echo 'p3 = '.$p3.'<br/>';
echo 'p4 = '.$p4.'<br/>';
echo 'p5 = '.$p5.'<br/>';
echo 'p6 = '.$p6.'<br/>';


//////////////////////////////////
$N = 100000;
$K = 6;

$f = array();
for ($k = 1; $k <= $K; $k++) {
    $f[$k] = 0;
}

for ($i = 0; $i < $N; $i++) {
    $r = rand(1, $K);
    $f[$r]++;
}

$p = array();
for ($k = 1; $k <= $K; $k++) {
    $p[$k] = $f[$k]/$N;
    echo 'p'.$k.' = '.$p[$k].'<br/>';
}

//////////////////////////////////
$a = [1, 2, 3, 5, 8];
$b = array(1, 2, 3, 5, 8);

echo '<pre>';
print_r($a);
echo '</pre>';

echo '<pre>';
print_r($b);
echo '</pre>';



//////////////////////////////////
$a = array(
    4 => 0,
    5 => 'vira',
    1 => 12,
    2 => 20,
    'URL' => 'http://www.vira.org/',
    10 => array (1,10,100,1000)
);

$a['A'] = 65;
$a[9] = 120;

$a[] = 1234;
$a[] = 78;
$a[] = array(1,2,3,4,5,6);

unset($a[2]);

echo '<pre>';
print_r($a);
echo '</pre>';

echo $a['URL'];
echo '<br/>';
echo $a[10][2];

//////////////////////////////////
$a = array(1,3,5,7,9);
$b = array(2,4,6,8,10,12,14);

$c = $a + $b;
$d = $b + $a;
$e = array_merge($a, $b);
$f = array_merge($b, $a);

echo '<pre>';
echo '$a = ';
print_r($a);
echo '$b = ';
print_r($b);
echo '$c = ';
print_r($c);
echo '$d = ';
print_r($d);
echo '$e = ';
print_r($e);
echo '$f = ';
print_r($f);
echo '</pre>';

//////////////////////////////////
$a = array(
    'URL' => 'http://vira.org/',
    'Name' => 'vira',
    'email' => 'info@vira.org',
    );

$b = array(
    'Username' => 'u',
    'URL' => 'http://www.vira.org',
    );

$c = array_merge($a, $b);

echo '<pre>';
echo '$c = ';
print_r($c);
echo '</pre>';

//////////////////////////////////
$a = array(1,2,3);

$b[] = 1;
$b[] = 2;
$b[] = 3;

var_dump($a == $b);
echo '<br/>';
var_dump($a != $b);
echo '<br/>';
var_dump($a === $b);
echo '<br/>';
var_dump($a !== $b);
echo '<br/>';


//////////////////////////////////
$a = array(10,20,30);

$b = array(
    1 => 20,
    2 => 30,
    0 => 10,
    );

echo '$a == $b ';
var_dump($a == $b);
echo '<br/>';
echo '$a === $b ';
var_dump($a === $b);
echo '<br/>';


//////////////////////////////////
$a = array(1, 5, 10, 4, 12, 7, 3);

$s = 0;
for ($i = 0; $i < count($a); $i++) {
    $s += $a[$i];
}

$m = $s / count($a);

echo 'Number of Elements = '.count($a);
echo '<br/>';
echo 'Sum of Array = '.$s;
echo '<br/>';
echo 'Mean of Array = '.$m;

//////////////////////////////////
$a = array(
    'A' => 65,
    'B' => 66,
    'e' => 2.71,
    'pi' => 3.14,
    'sqrt(-1)' => 'i',
    1 => 'One',
);

$keys = array_keys($a);
$values = array_values($a);

echo '<pre>';

echo 'isset($a[A]) = ';
var_dump(isset($a['A']));
echo 'array_key_exists(A, $a) = ';
var_dump(array_key_exists('A', $a));

echo 'isset($a[a]) = ';
var_dump(isset($a['a']));
echo 'array_key_exists(a, $a) = ';
var_dump(array_key_exists('a', $a));


echo '$a = ';
print_r($a);
echo '$keys = ';
print_r($keys);
echo '$values = ';
print_r($values);
echo '</pre>';



//////////////////////////////////

$a = array('apple', 'orange', 'banana');

$k = array_search('apple', $a);

$found = ($k !== false);

echo '<pre>';
echo '$k = ';
var_dump($k);
echo '$found = ';
var_dump($found);
echo '</pre>';

//////////////////////////////////
echo '<pre>';

$a = array(
    1 => 7,
    12 => 8,
    6 => 3,
    9 => 2,
    2 => 9,
    3 => 10,
    0 => 4
    );

echo 'Before Sort:<br/>';
echo '$a = ';
print_r($a);

//sort($a);
//aosrt($a);
//ksort($a);
shuffle($a);

echo 'After Sort:<br/>';
echo '$a = ';
print_r($a);

echo '</pre>';
//////////////////////////////////
$alphabet = '0123456789abcdefghijklmnopqrstuABCDEFGHIJKLMNOPQRSTU';

$a = str_split($alphabet);
shuffle($a);

$L = 12;
$password = '';
for ($i = 0; $i < $L; $i++) {
    $password .= $a[$i];
}

echo 'The Random Password: '.$password;

//////////////////////////////////
$a = array(1, 5, 10, 4, 12, 7, 3);
$s = array_sum($a);
$m = $s / count($a);

echo 'Number of Elements = '.count($a);
echo '<br/>';
echo 'Sum of Array = '.$s;
echo '<br/>';
echo 'Mean of Array = '.$m;

//////////////////////////////////
$a = array(2, 5, 7, 13, 17, 20, 23, 50);

while (current($a) !== false) {
    echo current($a);
    echo '<br/>';
    next($a);
}
echo '<br/>';

reset($a);
while (current($a) !== false) {
    echo key($a).' => '.current($a);
    echo '<br/>';
    next($a);
}
echo '<br/>';

end($a);
while (current($a) !== false) {
    echo key($a).' => '.current($a);
    echo '<br/>';
    prev($a);
}
echo '<br/>';



//////////////////////////////////
$a = array(2, 5, 7, 13, 17, 20, 23, 50);

list($key, $value) = each($a);

echo '<pre>';
var_dump($key);
var_dump($value);
echo '</pre>';

//////////////////////////////////
$a = array(2, 5, 7, 13, 17, 20, 23, 50);

while(list($key, $value) = each($a)) {
    echo $key.' => '.$value;
    echo '<br/>';
}
echo '<br/>';

//////////////////////////////////
$a = array(2, 5, 7, 13, 17, 20, 23, 50);

foreach($a as $value) {
    echo $value;
    echo '<br/>';
}
echo '<br/>';

foreach($a as $key => $value) {
    echo $key.' => '.$value;
    echo '<br/>';
}

//////////////////////////////////

?>
