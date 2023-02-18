<?php
//////////////////////////////////
header("X-My-Header: Value");

setcookie('a', 1);
setcookie('b', 2);

header("X-Powered-By: JSP", false);

// http_response_code(404);

echo 'Hello World!';

echo '<pre>';
var_dump(headers_list());
echo '</pre>';

echo 'HTTP Response Code: ';
echo http_response_code();
echo '<br/>';

//////////////////////////////////
header("HTTP/1.0 404 Not Found");

echo 'HTTP Response Code: ';
echo http_response_code();
echo '<br/>';

//////////////////////////////////

error_reporting(E_ALL ^ E_NOTICE);

$id = $_GET['id'];

switch($id) {
    case 1: $url = 'http://vira.org/'; break;
    case 2: $url = 'http://google.com/'; break;
    case 3: $url = 'http://bing.com/'; break;
}

if(is_null($url)) {
    die('ERROR: Invalid destination!');
}

$headers_sent = headers_sent($file, $line);
if($headers_sent) {
    echo 'Headers are already sent!<br/>';
    echo 'File: '.$file.'<br/>';
    echo 'Line: '.$line.'<br/>';
}

header("Location: $url");
die();

echo 'Success!';
//////////////////////////////////

error_reporting(E_ALL ^ E_NOTICE);

$id = $_GET['id'];

switch($id) {
    case 1: $url = 'http://vira.org/'; break;
    case 2: $url = 'http://google.com/'; break;
    case 3: $url = 'http://bing.com/'; break;
}

if(is_null($url)) {
    die('ERROR: Invalid destination!');
}

$headers_sent = headers_sent($file, $line);
if($headers_sent) {
    echo 'Headers are already sent!<br/>';
    echo 'File: '.$file.'<br/>';
    echo 'Line: '.$line.'<br/>';
}

header("Refresh: 5; url=$url");

echo 'Success!';

//////////////////////////////////

//$url = $_SERVER['PHP_SELF'];
//header("Refresh: 5; url=$url");

header("Refresh: 1");

echo date('H:i:s');

//////////////////////////////////

header("Cache-Control: no-cache, must-revalidate");
// header("Pragma: no-chache");

$exp_date = date('r', time() - 3600);
header("Expires: $exp_date");


//////////////////////////////////
// header("Content-Type: application/octet-stream");
// header("Content-Type: text/plain");
header("Content-Type: text/html");

echo 'How to use PHP headers!<br/>';
echo 'It is so fun.<br/>';

//////////////////////////////////
header("Content-Type: image/png");
header("Content-Disposition: attachment; filename=vira.png");

readfile("files/vira.png");

//////////////////////////////////

error_reporting(E_ALL ^ E_NOTICE);

$id = $_GET['id'];

switch($id) {
    case 1:
        $filename = 'a.txt';
        $type = 'text/plain';
        break;
    
    case 2:
        $filename = 'data.rar';
        $type = 'application/x-compressed';
        break;
    
    case 3:
        $filename = 'vira.png';
        $type = 'image/png';
        break;
}

if(is_null($filename)) {
    http_response_code(404);
    die('File not found!');
}

// header("Content-Type: application/octet-stream");
header("Content-Type: $type");
header("Content-Disposition: attachment; filename=$filename");

readfile("files/$filename");

//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>