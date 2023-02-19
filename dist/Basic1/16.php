<?php
//////////////////////////////////

include_once 'flintstone/load.php';

use Flintstone\Flintstone;

$options = array(
    'dir' => __DIR__,
    'ext' => '.db',
    'gzip' => false,
    'cache' => true,
    'formatter' => null,
);

$users = new Flintstone('users', $options);

echo '<pre>';

// var_dump($users->get(1));
var_dump($users->getAll());
//var_dump($users->getKeys());

echo '</pre>';


//////////////////////////////////
include_once 'flintstone/load.php';

use Flintstone\Flintstone;

$options = array(
    'dir' => __DIR__,
    'ext' => '.db',
    'gzip' => false,
    'cache' => true,
    'formatter' => null,
);

$users = new Flintstone('users', $options);

$number_of_users = count($users->getKeys());

//////////////////////////////////
include_once 'flintstone/load.php';

use Flintstone\Flintstone;

$options = array(
    'dir' => __DIR__,
    'ext' => '.db',
    'gzip' => false,
    'cache' => true,
    'formatter' => null,
);

$users = new Flintstone('users', $options);

$users->set(1, 
        array(
            'username' => 'admin',
            'password' => '1234',
        ));

$users->set(2, 
        array(
            'username' => 'vira',
            'password' => '5678',
            'website' => 'http://vira.org/',
        ));

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