<?php
//////////////////////////////////
<?php

include_once 'functions.php';

$users = array(
    array(
        'username' => 'user1',
        'password' => '1234',
    ),
    array(
        'username' => 'user2',
        'password' => '1111',
    ),
);

function CheckUser() {
    $username = get_input('username', $_POST);
    if(!$username) {
        return false;
    }
    
    $password = get_input('password', $_POST);
    if(!$password) {
        return false;
    }
    
    global $users;
    foreach($users as $user) {
        if($user['username'] == $username && $user['password'] == $password) {
            return true;
        }
    }
    return false;
}

function GenerateCode() {
    
    $alphabet = '0123456789';
    
    $code = SelectRandomChar($alphabet, 4) . '-' . 
            SelectRandomChar($alphabet, 4) . '-' .
            SelectRandomChar($alphabet, 2);
    
    return $code;
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


if(!CheckUser()) {
    die('Invalid User!');
}

echo GenerateCode();


//////////////////////////////////
<?php

function GetSerailNumber() {
    
    $ch = curl_init();

    $postdata = array(
        'username' => 'user2',
        'password' => '1111',
    );
    
    /*
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/vira/php-s26/project26/app1.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));
    */
    
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'http://localhost/vira/php-s26/project26/app1.php',
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POSTFIELDS => http_build_query($postdata),
    ));
    
    $out = curl_exec($ch);
    
    curl_close($ch);
    
    return $out;
}

echo GetSerailNumber();

//////////////////////////////////
<?php

function prepare_input($data) {
    return trim(htmlspecialchars(stripcslashes($data)));
}

function get_input($input_name, $array) {
    if(isset($array[$input_name])) {
        return prepare_input($array[$input_name]);
    }
    return null;
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