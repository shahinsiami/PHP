<?php
//////////////////////////////////
<?php

// $image = imagecreatetruecolor(400, 200);

$image = imagecreate(400, 200);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

// $red = imagecolorallocate($image, 255, 0, 0);
// imagefill($image, 0, 0, $red);

$width = imagesx($image);
$height = imagesy($image);

$blue = imagecolorallocate($image, 0, 0, 255);
for($i = 0; $i < 10000; $i++) {
    $x = rand(0, $width);
    $y = rand(0, $height);
    imagesetpixel($image, $x, $y, $blue);
}

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);

//////////////////////////////////
<?php

$image = imagecreate(500, 500);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

$width = imagesx($image);
$height = imagesy($image);

$blue = imagecolorallocate($image, 0, 0, 255);

$x = 0;
$y = 0;

$base_points = array(
    array(200, 50),
    array(50, 450),
    array(450, 450),
);

for($i = 0; $i < 20000; $i++) {
    $k = rand(0, count($base_points) - 1);
    $base_x = $base_points[$k][0];
    $base_y = $base_points[$k][1];
    
    $x = ($x + $base_x) / 2;
    $y = ($y + $base_y) / 2;
    imagesetpixel($image, $x, $y, $blue);
}

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);
//////////////////////////////////
<?php

$image = imagecreate(500, 500);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

$width = imagesx($image);
$height = imagesy($image);

$blue = imagecolorallocate($image, 0, 0, 255);
$red = imagecolorallocate($image, 255, 0, 0);

// imageline($image, 0, 0, $width, $height, $blue);
// imageline($image, 0, $height, $width, 0, $blue);

$n = 25;
for($i = 0; $i <= $n; $i++) {
    $x = $i*$width/$n;
    $y = $height - $i*$height/$n;
    imageline($image, $x, 0, 0, $y, $blue);
    imageline($image, $x, $height, $width, $y, $red);
}

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);
//////////////////////////////////
<?php

$image = imagecreate(200, 50);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

$width = imagesx($image);
$height = imagesy($image);

$blue = imagecolorallocate($image, 0, 0, 255);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 10, 5, "vira PHP", $blue);

$fw = imagefontwidth(5);
$fh = imagefontheight(5);

imagestring($image, 5, 10, 25, "$fw x $fh", $red);

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);
//////////////////////////////////
<?php

if(isset($_GET['text'])) {
    $text = $_GET['text'];
}
if(empty($text)) {
    die();
}

$length = strlen($text);
$fw = 9;
$fh = 15;
$gap = 5;
$width = $fw*$length + 2*$gap;
$height = $fh + 2*$gap;

$image = imagecreate($width, $height);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

$blue = imagecolorallocate($image, 0, 0, 255);

imagestring($image, 5, $gap, $gap, $text, $blue);

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);
//////////////////////////////////
<?php

$image = imagecreate(500, 500);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

$width = imagesx($image);
$height = imagesy($image);

$blue = imagecolorallocate($image, 0, 0, 255);
$red = imagecolorallocate($image, 255, 0, 0);

imagerectangle($image, 50, 100, 400, 300, $blue);
imagerectangle($image, 100, 50, 300, 400, $red);
imagefilledrectangle($image, 150, 150, 250, 250, $blue);

imageellipse($image, 400, 400, 100, 180, $red);
imagefilledellipse($image, 400, 400, 80, 160, $red);

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);
//////////////////////////////////
<?php

if(isset($_GET['text'])) {
    $text = $_GET['text'];
}
if(empty($text)) {
    die();
}

$length = strlen($text);
$fw = 9;
$fh = 15;
$gap = 5;
$width = $fw*$length + 2*$gap;
$height = $fh + 2*$gap;

$image = imagecreate($width, $height);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

$blue = imagecolorallocate($image, 0, 0, 255);

imagestring($image, 5, $gap, $gap, $text, $blue);

// imageflip($image, IMG_FLIP_HORIZONTAL);
// imageflip($image, IMG_FLIP_VERTICAL);
// imageflip($image, IMG_FLIP_BOTH);

$image = imagerotate($image, -30, $bkg_color);

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);
//////////////////////////////////
<?php

function GenerateCaptchaCode($length = 5) {
    $alphabet = '123456789abcdefghijklmnopqrstuvwxyz';
    return SelectRandomChar($alphabet, $length);
}

function SelectRandomChar($str, $count = 1) {
    $n = strlen($str);
    
    $out = '';
    for($k = 0; $k < $count; $k++) {
        $i = rand(0, $n - 1);
        $out .= substr($str, $i, 1);
    }
    
    return $out;
}

$image = imagecreate(150, 45);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

$blue = imagecolorallocate($image, 50, 160, 255);
$red = imagecolorallocate($image, 255, 80, 150);
$green = imagecolorallocate($image, 200, 255, 200);

imagefilledellipse($image, rand(10, 140), rand(10, 35), 30, 30, $blue);
imagefilledellipse($image, rand(10, 140), rand(10, 35), 30, 30, $red);
imagefilledellipse($image, rand(10, 140), rand(10, 35), 30, 30, $green);

$black = imagecolorallocate($image, 0, 0, 0);
$text = GenerateCaptchaCode();
$x = 20;
$y = 10;
for($i = 0; $i < strlen($text); $i++) {
    $char = substr($text, $i, 1);
    imagestring($image, 5, $x, $y, $char, $black);
    $x += rand(15, 30);
    $y = rand(10, 20);
}

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);


//////////////////////////////////
<!doctype html>
<html>
    <head>
        <title>My Page</title>
    </head>
    <body>
        <p>My e-Mail Address is:</p>
        <img src="http://localhost/vira/php-s27/project27/app5.php?text=info@vira.org">
    </body>
</html>

//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>