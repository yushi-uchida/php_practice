<?php
echo 'hello php';
$a = 3;
$b = 7;
echo $a;
echo $b;
$new_a = $a + $b;
echo $new_a;
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月",];
echo $array_month[7];
$hello = "Hello";
$name = "yushi";
$world = "'s World!";
echo $hello.$name.$world;
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;

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
$name = yushi;
if ($name < yushi) {
echo "私はyushiではありません";
} else {
  echo "私はyushiです";
}
$total = 0;
for ($i = 0; $i <= 1000; $i++) {
    $total += $i;
}
echo $total;
$fruits = array("apple", "orange", "banana", "grape", "peach",);
echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
    echo "". $fruits[$i];
    echo "/";
}

$start = 1;
$end = 105;
for($i = $start; $i < $end; $i++){
    if($i % 5 == 0){
        echo $i;
    }
}