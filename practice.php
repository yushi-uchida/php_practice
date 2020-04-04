<?php
//バリゲード
function br(){
    echo nl2br('; ');
}
//PHP/Laravel 02 課題1

echo 'hello php';
$a = 3;
$b = 7;
echo $a;
echo $b;
$new_a = $a + $b;
echo $new_a;
br();

//PHP/Laravel 02 課題2
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月",];
echo $array_month[7];
br();

//PHP/Laravel 02 課題3
$hello = "Hello, ";
$name = "yushi";
$world = "'s World!";
echo $hello.$name.$world;
br();

//PHP/Laravel 02 課題4
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
br();

//PHP/Laravel 02 課題5
$_calendar = [
    "January" => "1月",
    "Febryary" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "Nobember" => "11月",
    "December" => "12月",
];
echo $_calendar["December"];
br();

//PHP/Laravel 03 課題1
$name = "yushi";
if ($name !== "yushi") {
echo "私はyushiではありません";
} else {
  echo "私はyushiです";
}
br();

//PHP/Laravel 03 課題2
$total = 0;
for ($i = 1; $i <= 1000; $i++) {
    $total += $i;
}
echo $total;
br();

//PHP/Laravel 03 課題3
$fruits = array("apple", "orange", "banana", "grape", "peach",);
echo count($fruits)."個: ";
for ($i = 0; $i < count($fruits); $i++) {
    echo "". $fruits[$i];
    echo "/";
}
br();

//PHP/Laravel 03 課題4
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}