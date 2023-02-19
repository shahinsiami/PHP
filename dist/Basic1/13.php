<?php
//////////////////////////////////

$dir = dirname(dirname(__DIR__));

$files = array_diff(scandir($dir), array('.','..'));

echo '<pre>';
var_dump($files);
echo '</pre>';

//////////////////////////////////

$dir = dirname(dirname(__DIR__));

$handle = opendir($dir);

echo '<h3>Directory Contents: </h3>';
echo '<ul>';
while(true) {
    
    $item = readdir($handle);
    if($item === false) {
        break;
    }
    
    if(in_array($item, array('.','..'))) {
        continue;
    }
    
    $fullpath = $dir . '/' . $item;
    if(is_dir($fullpath)) {
        $type = 'directory';
    } else {
        $type = 'file';
    }
    
    echo "<li><b>$item</b> ($type)</li>";
}

echo '</ul>';
//////////////////////////////////

$dir = dirname(dirname(__DIR__));

$handle = opendir($dir);

echo '<h3>Directory Contents: </h3>';
echo '<ul>';
while(($item = readdir($handle)) !== false) {
    
    if(in_array($item, array('.','..'))) {
        continue;
    }
    
    $fullpath = $dir . DIRECTORY_SEPARATOR . $item;
    if(is_dir($fullpath)) {
        $type = 'directory';
    } else {
        $type = 'file';
    }
    
    echo "<li><b>$item</b> ($type)</li>";
}

echo '</ul>';

closedir($handle);
//////////////////////////////////

$plugin_dir = __DIR__ . '/plugins/';
$plugin_files = glob($plugin_dir . '*.php');
foreach($plugin_files as $plugin_file) {
    include_once($plugin_file);
}

say_hello();


//////////////////////////////////
copy('a.txt', 'a.txt.bkp');
copy('a.txt', 'b.txt');
copy('a.txt', 'c.txt');
copy('a.txt', 'd.txt');

// Rename file
rename('b.txt', 'b.new.txt');

// Move file
rename('c.txt', dirname(__DIR__).'/c.txt');

// Delete file
unlink('d.txt');

// Change Mode
chmod('b.new.txt', 0755); // 0400 for making file READ-ONLY


//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>