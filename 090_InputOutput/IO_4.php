<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );//傳入檔名，秀出陣列內容
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";
}
//結果為：
#0 : PHP基本語法重點整理、 
#1 : 自訂函式寫作注意事項、 
#2 : 陣列與相關函式、 
#3 : 字串與相關函式、 
#4 : 物件導向程式設計、 
#5 : 狀態資訊管理、 
#6 : XML/JSON資料處理、 
#7 : PHP資料庫程式設計、 
#8 : 檔案系統與資料讀寫、 
#9 : 串流與網路程式設計、 
#10 : 程式安全與攻防實例、 
#11 : Web Services、 
#12 : PHP與jQuery、 
#13 : jQuery Mobile整合運用
?> 