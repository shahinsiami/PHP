<?php
//////////////////////////////////
$handle = fopen('a.txt', 'r');
if($handle === false) {
    die('The file cannot be openned.');
}

$data1 = fread($handle, 5);
$data2 = fread($handle, 15);

echo '<pre>';
var_dump($data1);
var_dump($data2);
echo '</pre>';

fclose($handle);
//////////////////////////////////
$handle = fopen('a.txt', 'r');
if($handle === false) {
    die('The file cannot be openned.');
}

echo '<pre>';
while(($line = fgets($handle)) !== false) {
    echo $line;
}
echo '</pre>';

//echo '<pre>';
//while(true) {
//    $line = fgets($handle);
//    if($line === false) {
//        break;
//    }
//    echo $line;
//}
//echo '</pre>';

fclose($handle);
//////////////////////////////////
$handle = fopen('a.txt', 'r');
if(!$handle) {
    die('The file cannot be openned.');
}

echo '<pre>';
while(!feof($handle)) {
    $line = fgets($handle);
    $line = str_replace(array("\r","\n"),"",$line);
    //echo $line;
    var_dump($line);
}
echo '</pre>';

fclose($handle);
//////////////////////////////////

$handle = fopen('a.txt', 'r');
if(!$handle) {
    die('The file cannot be openned.');
}

echo '<pre>';
$contents = stream_get_contents($handle, 12);
echo $contents;
echo '</pre>';

fclose($handle);

//////////////////////////////////
$handle = fopen('b.txt', 'w');
if(!$handle) {
    die('The file cannot be openned.');
}

fwrite($handle, "Hello!\r\n");
fwrite($handle, "Welcome to PHP Course.\r\n");

fclose($handle);

//////////////////////////////////
$data = array(
    array(4, 0),
    array(0, 1),
    array(0, 2),
    array(2, 1),
    array(4, 2),
    array(5, 3),
    array(1, 0),
    array(1, 1),
    array(0, 3),
);

$fp = fopen('scores.data', 'w');

foreach($data as $entry) {
    $x = $entry[0];
    $y = $entry[1];
    // fwrite($fp, "$x\t$y\r\n");
    fprintf($fp, "%d\t%d\r\n", $x, $y);
}

fclose($fp);

//////////////////////////////////
$fp = fopen('scores.data', 'r');

echo "<pre>";
while(!feof($fp)) {
    
    // $x = null;
    // $y = null;
    // fscanf($fp, "%d\t%d\r\n", $x, $y);
    
    list($x, $y) = fscanf($fp, "%d\t%d\r\n");
    
    if(is_null($x) || is_null($y)) {
        break;
    }
    echo "x = $x, y = $y\r\n";
}
echo "</pre>";

fclose($fp);
//////////////////////////////////

$dir = sys_get_temp_dir();
$filename = tempnam($dir, "fd-");
$filename2 = $dir . DIRECTORY_SEPARATOR . uniqid("vira-") . '.tmp';

echo 'Temp Dir: ' . $dir . '<br/>';
echo 'Temp File: ' . $filename . '<br/>';
echo 'Temp File: ' . $filename2 . '<br/>';



//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>