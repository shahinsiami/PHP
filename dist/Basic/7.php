<?php
//////////////////////////////////
$text = '<a href="#">Link</a>';

$a = urlencode($text);

$b = urldecode($a);

echo '<p>Original text: '.$text.'</p>';
echo '<p>After urlencode: '.$a.'</p>';
//////////////////////////////////
$text = '<a href="#">Link</a>';

$a = htmlentities($text);

$b = html_entity_decode($a);

echo '<p>Original text: '.$text.'</p>';
echo '<p>After htmlentities: '.$a.'</p>';
echo '<p>After html_entity_decode: '.$b.'</p>';
//////////////////////////////////
$text = '<a href="#">Link</a>';

$a = htmlspecialchars($text);

$b = htmlspecialchars_decode($a);

echo '<p>Original text: '.$text.'</p>';
echo '<p>After htmlspecialchars: '.$a.'</p>';
echo '<p>After htmlspecialchars_decode: '.$b.'</p>';
//////////////////////////////////

function get_value($param, $default = null) {
    if(isset($_GET[$param])) {
        $value = $_GET[$param];
    } else {
        $value = $default;
    }
    return $value;
}

/*
function get_value($param, $default = null) {
    if(isset($_REQUEST[$param])) {
        $value = $_REQUEST[$param];
    } else {
        $value = $default;
    }
    return $value;
}
*/

$math = get_value('math', 0);
$prog = get_value('prog', 0);
//////////////////////////////////
function get_value($param, $default = null) {
    if(isset($_POST[$param])) {
        $value = $_POST[$param];
    } else {
        $value = $default;
    }
    return $value;
}

$math = get_value('math', 0);
$prog = get_value('prog', 0);

if($math) {
    if($prog) {
        $title = 'Math and Programming Courses';
    } else {
        $title = 'Math Courses';
    }
} else {
    if($prog) {
        $title = 'Programming Courses';
    } else {
        $title = 'Courses';
    }
}

?>
//////////////////////////////////

if(isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'Friend';
}

if(isset($_GET['color'])) {
    $color = $_GET['color'];
} else {
    $color = 'red';
}

echo '<span style="color: '.$color.';">';
echo 'Hello '.$name.'!';
echo '</span>';
echo '<br/>';
//////////////////////////////////

$name = get_value('name', 'Friend');
$color = get_value('color', 'red');

echo '<span style="color: '.$color.';">';
echo 'Hello '.$name.'!';
echo '</span>';
echo '<br/>';

function get_value($param, $default = null) {
    if(isset($_GET[$param])) {
        $value = $_GET[$param];
    } else {
        $value = $default;
    }
    return $value;
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
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