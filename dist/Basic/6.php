<?php
//////////////////////////////////
echo '__FILE__ = '.__FILE__;
echo '<br/>';

echo '__DIR__ = '.__DIR__;
echo '<br/>';

echo 'dirname(__FILE__) = '.dirname(__FILE__);
echo '<br/>';

echo '__LINE__ = '.__LINE__;
echo '<br/>';

MyFunc1();
MyFunc2();

function MyFunc1() {
    echo '__FUNCTION__ = '.__FUNCTION__;
    echo '<br/>';
}

function MyFunc2() {
    echo '__FUNCTION__ = '.__FUNCTION__;
    echo '<br/>';
}

//////////////////////////////////
//////////////////////////////////


?>