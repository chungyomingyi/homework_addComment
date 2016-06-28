<?php
$f = fopen("pick3.txt", "r");//開啟名叫 pick3.txt 的檔案且設為讀取模式 ，並回傳檔案指標給 $f
while (!feof($f))//feof()函數檢測是否已到達文件末尾 (eof)
{
	$line = fgets($f); //讀取 pick3.txt 檔案元並傳給$line。
	echo "$line<br>";	//輸出$line的內容
}
fclose($f);	//關閉之前開啟的 pick3.txt 檔案
echo "--End--";
?>