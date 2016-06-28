<?php
header("content-type: text/html; charset=utf-8");
//設定陣列並給key值的內容
$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
//用foreach呼叫$season陣列內容
echo "每年的四季分別為：<br>";
foreach ($season as $key => $value){
	echo $key, "=>", $value, "<br>";
}

//輸出結果為：
// 每年的四季分別為：
// spring=>春
// summer=>夏
// autumn=>秋
// winter=>冬
?>