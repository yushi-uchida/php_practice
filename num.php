
<?php
//PHP/Laravel 04 課題3
function num($arr) {
    $total = 1;
    foreach($arr as $x) {
        $total *= $x;
    }
    return $total;
}
echo num(array(1,3,5,7,9));

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a;
    }
    }
    return $max_number;
}
echo max_array(array(1,2,3,4,5));