<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season);       //print_r 用來輸出陣列的內容
echo "<hr>";
var_dump($season);      //var_dump 用來輸出變數的相關訊息

//輸出結果：
// Array ( [spring] => 春 [summer] => 夏 [autumn] => 秋 [winter] => 冬 )
// /home/ubuntu/workspace/cyp05/080_Array/php_array7.php:12: array(4) { 'spring' => string(3) "春" 'summer' => string(3) "夏" 'autumn' => string(3) "秋" 'winter' => string(3) "冬" }
?>