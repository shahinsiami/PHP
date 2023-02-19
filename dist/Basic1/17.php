<?php
//////////////////////////////////
$db = new SQLite3('mydata.db');

$db->query("
    CREATE TABLE IF NOT EXISTS options (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        option_name TEXT NOT NULL,
        option_value TEXT NOT NULL
    );
");

$db->query("
    INSERT INTO options (option_name, option_value) VALUES
    ('color', 'red'),
    ('background', 'white');
");

$db->query("
    INSERT INTO options (option_name, option_value) VALUES
    ('font-size', '14');
");

//////////////////////////////////
$db = new SQLite3('mydata.db');

$results = $db->query("
    SELECT *
    FROM options
");

/*
$results = $db->query("
    SELECT option_value
    FROM options
    WHERE option_name = 'color'
");
*/

echo '<pre>';
$c = 0;
while(true) {
    
    $row = $results->fetchArray(SQLITE3_ASSOC);
    if(!$row) {
        break;
    }
    
    $c++;
    echo "Row $c<br/>";
    var_dump($row);
    echo '<br/>';
    
}
//////////////////////////////////
include_once 'functions.php';

update_option('site_url', 'http://vira.org/');
update_option('site_title', 'vira Online Education');
update_option('color', '#0055ff');
update_option('background', '#eee');
update_option('font-size', 20);




//////////////////////////////////
include_once 'functions.php';

$site_url = get_option('site_url');
$site_title = get_option('site_title');
$color = get_option('color');
$background = get_option('background');
$fontsize = get_option('font-size');


//////////////////////////////////

$db = null;

function connect_to_db() {
    global $db;
    if(!$db) {
        $db = new SQLite3('mydata.db');
    }
    create_tables();
}

function create_tables() {
    global $db;
    
    $db->query("
        CREATE TABLE IF NOT EXISTS options (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            option_name TEXT NOT NULL,
            option_value TEXT NOT NULL
        );
    ");
}

function get_option($option_name, $full_row = false) {

    connect_to_db();
    if(!$option_name) {
        die('ERROR: Option name could not be null or empty.');
    }
    
    global $db;
    $result = $db->query("
        SELECT *
        FROM options
        WHERE option_name = '$option_name'
    ");
    
    $row = $result->fetchArray(SQLITE3_ASSOC);
    if($row) {
        if($full_row) {
            return $row;
        } else {
            return $row['option_value'];
        }
    } else {
        return null;
    }
}

function option_exists($option_name) {
    $row = get_option($option_name, true);
    return isset($row['id']);
}

function add_option($option_name, $option_value = null) {
    
    connect_to_db();
    if(!$option_name) {
        die('ERROR: Option name could not be null or empty.');
    }
    
    if(!$option_value) {
        $option_value = '0';
    }
    
    global $db;
    
    if(!option_exists($option_name)) {
        $db->query("
            INSERT INTO options (option_name, option_value) VALUES
            ('$option_name', '$option_value');
        ");
    } else {
        $db->query("
            UPDATE options
            SET option_value = '$option_value'
            WHERE option_name = '$option_name';
        ");
    }
    
}

function update_option($option_name, $option_value = null) {
    add_option($option_name, $option_value);
}

function delete_option($option_name) {
    if(!option_exists($option_name)) {
        return;
    }
    
    global $db;
    $db->query("
        DELETE FROM options
        WHERE option_name = '$option_name';
    ");
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>