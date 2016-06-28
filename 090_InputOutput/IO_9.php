<?php
header("Content-Type: image/png");  //MIME

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");  //讀取二位元檔
echo fread($fileHandle, filesize($filename));
fclose($filename);
//顯示結果為資料夾中的cc.png
?>