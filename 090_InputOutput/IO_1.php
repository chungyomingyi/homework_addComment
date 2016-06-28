<?php
//__FILE__ 取得伺服器上的路徑與目錄
echo "Path and FileName:" . __FILE__ . "<br />";//目前所在位置
echo "Path: " . dirname ( __FILE__ ). "<br />";//查路徑，字串函式
echo "Filename: " . basename ( __FILE__ ) . "<br />";//查檔名
echo "Filesize: " . filesize ( __FILE__ );   //查詢檔案大小

//輸出結果為：
// Path and FileName:/home/ubuntu/workspace/cyp05/090_InputOutput/IO_1.php
// Path: /home/ubuntu/workspace/cyp05/090_InputOutput
// Filename: IO_1.php
// Filesize: 291
?>
