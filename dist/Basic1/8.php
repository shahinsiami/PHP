<?php
//////////////////////////////////
setcookie('A', 10, time() + 60);
setcookie('B', 20, time() + 120);
setcookie('C', 'Hello World!', time() + 20);

setcookie('W[a]', 1, time()+30);
setcookie('W[b]', 1, time()+30);
setcookie('W[c][1]', 10, time()+30);
setcookie('W[c][2]', 20, time()+30);
//////////////////////////////////
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

//////////////////////////////////
setcookie('Sample', 10, time() + 60);

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

//////////////////////////////////

setcookie('SampleCookie', 1, time() + 60);

header('Location: app5.php');

//////////////////////////////////
if (isset($_COOKIE['SampleCookie'])) {
    echo 'Cookies are enabled.';
} else {
    echo 'Cookies are disabled.';
}


//////////////////////////////////
setcookie('SampleCookie', 1, time() + 60);

if(!isset($_GET['checkcookie'])) {
    header('Location: app6.php?checkcookie');
}

if (isset($_COOKIE['SampleCookie'])) {
    echo 'Cookies are enabled.';
} else {
    echo 'Cookies are disabled.';
}

//////////////////////////////////
unsetcookie('SampleCookie');
unsetcookie('username');

function unsetcookie($name) {
    unset($_COOKIE[$name]);
    setcookie($name, 0, time()-1);
}

//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>