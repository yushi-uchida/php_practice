<?php
//PHP/Laravel 04 課題5
$str = "<h1>strip_tags関数</h1>"
."<p>タグ除去</p>";
echo strip_tags($str)."/n";
?>

<?php
$animal = ["dog","cat","bird"];
array_push($animal,"rabbit","bear");
print_r($animal);

$array1 = [1,2,3];
$array2 = [10,20,30];
$array3 = [100,200,300];
$array = array_merge($array1,$array2,$array3);
print_r($array);

echo "現在のUnixタイムスタンプ:".time();
echo "<br>";
$nweek = time() + (3 * 24 * 60 * 60);
echo "３日後のUnixタイムスタンプ:".$nweek;

$timestamp = mktime(0,0,0,4,4,2020);
echo $timestamp;

echo date("Y/m/d");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y年m月d日 H時i秒s分");
echo "<br>";
