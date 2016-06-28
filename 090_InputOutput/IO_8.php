<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);//explode 函式用來切割字串，並將切割出來的每個元素放入PHP陣列之中
$f = fopen("data2.txt", "w");   //w為寫入模式開啟
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);
}
fclose($f);     //關閉文件
echo "-- Done --"
//切割$sData的內容，以\n為切割點，執行完再將內容寫入data2.txt
//程式結束只顯示 -- Done --
//所以data2.txt裡面的內容為
// line1
// line2
// Line3
?>
