<?php
$sData = "";
$f = fopen("pick3.txt", "r");//開啟名叫 pick3.txt 的檔案且設為讀取模式 ，並回傳檔案指標給 $f
while (!feof($f))	//feof()函數檢測是否已到達文件末尾 (eof)
{
	$line = fgets($f);	//讀取 pick3.txt 檔案元並傳給$line。
	$sData .= Trim($line);	//trim()用來刪除字串前後的空白區域
}
fclose($f);	//關閉之前開啟的 pick3.txt 檔案
// echo $sData; //輸出pick3.txt的內容
//顯示為908872526535442041985072568716

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);  //strlen取$sData裡的字串長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);	
	//substr() 函數的用途是用來取得部分字串內容，可以設定要開始擷取的字元位置與總共要擷取的字元數量
	//substr($sData(原始的字串)，$iPos(開始擷取的位置)，1(截取的字串長度))
	$result = $ch . str_replace($ch, "", $result);
	//str_replace 功能是將一個字串中的某一些指定字符更換為新的字符
}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);

//顯示為61785-20943
?>