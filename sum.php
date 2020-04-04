<?php
//バリゲード
function br(){
    echo nl2br('; ');
}
//PHP/Laravel 04 課題1
function pro($value) {
    $result = $value* 2;
    return $result;
}

echo pro(100);
br();

//PHP/Laravel 04 課題2
function sum($a, $b) {
    $result2 = $a + $b;
    return $result2;
}
echo sum(10,10);

