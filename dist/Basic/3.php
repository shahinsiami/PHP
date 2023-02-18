<?php

//////////////////////////////////
$str = 'Welcome to PHP Programming Course!';

$first = strpos($str, ' ');
$second = strpos($str, ' ', $first + 1);

$start = $first + 1;
$length = $second - $first - 1;
$word = substr($str, $start, $length);

echo '<p>'.$str.'</p>';
echo 'First: '.$first;
echo '<br/>';
echo 'Second: '.$second;
echo '<br/>';
echo 'Word: '.$word;
echo '<br/>';

//////////////////////////////////
$str1 = "The quoted string \"ABC\"\\ and going to next line \nABC \x41!";

$a = 10;
$str2 = "My number is $a.";

echo '<pre>';
echo $str1;
echo '</pre>';
echo '<br/>';

echo $str2;
//////////////////////////////////
$a = 10;

$str = <<<MYSTR
        My Heredoc String goes here
        Having Single Quotation '
        As well as a Double Quotation "
        Also expanding variables
        For Exmaple \$a = $a
MYSTR;

echo '<pre>';
echo $str;
echo '</pre>';

//////////////////////////////////
$a = 10;

$str = <<<'MYSTR'
        My Nowdoc String goes here
        Having Single Quotation '
        As well as a Double Quotation "
        Note that variables are not expanding
        For Exmaple \$a = $a
MYSTR;

echo '<pre>';
echo $str;
echo '</pre>';

//////////////////////////////////
$n = 10;

printf('The number is %d.', $n);
echo '<br/>';

$str = sprintf('The number is %d.', $n);

var_dump($str);
//////////////////////////////////
$str = 'The Bob\'s Hat! \\ ';

echo $str;

//////////////////////////////////

$result = sscanf($str, '%d %s %d');
list($day, $month, $year) = sscanf($str, '%d %s %d');

echo '<pre>';
print_r($result);
echo 'Day: '.$day.'<br/>';
echo 'Month: '.$month.'<br/>';
echo 'Year: '.$year.'<br/>';
echo '</pre>';

//////////////////////////////////
$str1 = 'Welcome to PHP!';

$str2 = strtolower($str1);
$str3 = strtoupper($str1);
$str4 = strrev($str1);

echo '<p>Original: '.$str1.'</p>';
echo '<p>Lower Case: '.$str2.'</p>';
echo '<p>Upper Case: '.$str3.'</p>';
echo '<p>Reversed: '.$str4.'</p>';

$pos1 = strpos($str1, 'to');
if ($pos1 === false) {
    $pos1 = 'Not Found!';
}
echo '<p>Position of word "to": '.$pos1.'</p>';

$pos2 = strpos($str1, 'for');
if ($pos2 === false) {
    $pos2 = 'Not Found!';
}
echo '<p>Position of word "for": '.$pos2.'</p>';


//////////////////////////////////
$str = "Welcome to PHP!";
$a = str_split($str);

echo '<pre>';
print_r($a);
echo '</pre>';




//////////////////////////////////
$str = 'Welcome to PHP!';

for ($i = 0; $i < strlen($str); $i++) {
    echo $i.' => '.$str[$i].'<br/>';
}

//////////////////////////////////
$str1 = 'Welcome to PHP Programming Course!';

$str2 = substr($str1, 5, 4);
echo '<p>'.$str2.'</p>';

$str3 = substr($str1, 5);
echo '<p>'.$str3.'</p>';

$str4 = substr($str1, 5, -5);
echo '<p>'.$str4.'</p>';

$str5 = substr($str1, 5, 0);
echo '<p>'.$str5.'</p>';

//////////////////////////////////

$a = 10;
$b = 12;
$c = 15;

$name = 'c';
echo $$name;
echo '<br/>';

$variables = array('a', 'b', 'c');
foreach ($variables as $variable) {
    echo $$variable.' -> '.$$variable**2;
    echo '<br/>';
}

$vars = get_defined_vars();
echo '<pre>';
print_r($vars);
echo '</pre>';
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>
