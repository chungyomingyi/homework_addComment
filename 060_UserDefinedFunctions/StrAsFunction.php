<?php

function test($i) {
	return $i + 1;
}

// $x = 1;
// echo test($x);
//$x=1帶入test()函式，return $x+1之後的結果為2

$x = 2;
$p = "test";//可以使用字串內容呼叫函式，這樣程式具彈性
echo $p($x);
//$x=2帶入test()函式，return $x+1之後的結果為3
?>