<?php
//////////////////////////////////
session_start();
setcookie(session_name(), session_id(), time() + 3600);

$_SESSION['a'] = 10;
$_SESSION['b'] = array (1, 2, 3);

//////////////////////////////////
session_start();
setcookie(session_name(), session_id(), time() + 3600);

echo '<pre>';
print_r($_SESSION);
print_r($_COOKIE);
echo '</pre>';

if(isset($_SESSION['a'])) {
    echo 'Session variable "a" is defined and equals to: ';
    echo $_SESSION['a'];
    echo '.';
} else {
    echo 'Session variable "a" is not defined.';
}
//////////////////////////////////

session_start();
setcookie(session_name(), session_id(), time() + 7*24*60*60);

if(isset($_POST['username']) && !empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $returning = true;
} else {
    $username = '';
    $returning = false;
}
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