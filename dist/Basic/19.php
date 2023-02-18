<?php
//////////////////////////////////
<?php

function prepare_input($data) {
    return trim(htmlspecialchars(stripcslashes($data)));
}

function get_input($input_name) {
    if(isset($_GET[$input_name])) {
        return prepare_input($_GET[$input_name]);
    }
    return null;
}

$name = get_input('name');

echo 'Hi '.$name;

//////////////////////////////////
function prepare_input($data) {
    return trim(htmlspecialchars(stripcslashes($data)));
}

function get_input($input_name) {
    if(isset($_GET[$input_name])) {
        return prepare_input($_GET[$input_name]);
    }
    return null;
}

$email = get_input('email');

if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    die('The provided email address is not vaid.');
}

echo "<p>Entered e-mail address: $email</p>";

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