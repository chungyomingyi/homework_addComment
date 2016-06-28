<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");	//開啟檔案並設定成讀取模式
while ($line = !feof($f))  //feof：end of file
{
	$line = fgets($f); //讀取檔案一行並處理一行
	$sData .= Trim($line) . "<br>"; //trim函式用來刪除字串前後的空白區域，並用<br>換行
}
fclose($f);
echo $sData;
//執行結果：
// PHP基本語法重點整理、
// 自訂函式寫作注意事項、
// 陣列與相關函式、
// 字串與相關函式、
// 物件導向程式設計、
// 狀態資訊管理、
// XML/JSON資料處理、
// PHP資料庫程式設計、
// 檔案系統與資料讀寫、
// 串流與網路程式設計、
// 程式安全與攻防實例、
// Web Services、
// PHP與jQuery、
// jQuery Mobile整合運用
?>
