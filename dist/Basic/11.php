<?php
//////////////////////////////////
echo __FILE__ . '<br/>';
echo __DIR__ . '<br/>';
echo dirname(__FILE__) . '<br/>';
echo dirname(__DIR__) . '<br/>';
echo basename(__FILE__) . '<br/>';
echo basename(__DIR__) . '<br/>';

$info = pathinfo(__FILE__);
echo '<pre>';
var_dump($info);
echo '</pre>';

//////////////////////////////////

function check_file_existance($file) {
    
    $type = 'File';
    if(is_dir($file)) {
        $type = 'Directory';
    }
    
    if(file_exists($file)) {
        echo "$type '$file' <span style='color: #080;'>exists</span>.<br/>";
        if(is_file($file)) {
            $size = filesize($file);
            echo "File Size: $size byte(s)<br/>";
        }
        $type = strtolower($type);
        if(is_readable($file)) {
            echo "The $type is readable.<br/>";
        } else {
            echo "The $type is not readable.<br/>";
        }
        if(is_writable($file)) {
            echo "The $type is writable.<br/>";
        } else {
            echo "The $type is not writable.<br/>";
        }
    } else {
        echo "$type '$file' <span style='color: #e00;'>does not exist</span>.<br/>";
    }

    echo '<br/>';
}

$dir = 'D:/xampp/htdocs/vira/php-s14/project14/';
$file1 = $dir . 'myfile.txt';
$file2 = $dir . 'myfile2.txt';

check_file_existance($dir);
check_file_existance($file1);
check_file_existance($file2);
check_file_existance(dirname($dir));
check_file_existance(dirname($file2));
//////////////////////////////////


function mkdir_if_not_exist($dir) {
    if(!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}

$path = __DIR__ . DIRECTORY_SEPARATOR;

$newdir = $path . 'mydir/1/abc/next';
mkdir_if_not_exist($newdir);

//////////////////////////////////
function rmdir_if_exist($dir) {
    if(file_exists($dir)) {
        rmdir($dir);
    }
}

$path = __DIR__ . DIRECTORY_SEPARATOR;

$dir = $path . 'mydir';
rmdir_if_exist($dir);

//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>