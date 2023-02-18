<?php
//////////////////////////////////

$lines = file('a.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );

echo '<pre>';
var_dump($lines);
//////////////////////////////////
$contents = file_get_contents('a.txt', false, null, 0, 12);

echo '<pre>';
//var_dump($contents);
echo $contents;
echo '</pre>';

//////////////////////////////////

file_put_contents('a.txt', "\r\n\r\nAnd so on ...", FILE_APPEND);

//////////////////////////////////
$data = array(
    'PI' => 3.14,
    'e' => 2.71,
    'g' => 9.8,
    'Hello' => 'Hi',
    'Course Name' => 'PHP',
    'domain' => 'vira.org',
);

// file_put_contents('b.my', serialize($data));
file_put_contents('b.my', json_encode($data));

//////////////////////////////////
$data = json_decode(file_get_contents('b.my'));

echo '<pre>';
var_dump($data);
echo '</pre>';

//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>