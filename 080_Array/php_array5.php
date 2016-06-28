<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";
foreach ($season as $value){
    //用foreach迴圈將$season裡的內容依序輸出
	echo $value;
}

//輸出結果：
//每年的四季分別為：春夏秋冬
?>