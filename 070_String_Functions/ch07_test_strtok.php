<?php
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
$s = strtok($showStr, " ");   //strtok 函式用來將字串切割成更小的字串
while ($s != "")
{
   echo $s. "*" . "<br>";  //取出的字串後面加*並換行
   $s = strtok(" .|/");
   
   
   // 如果這麼寫，程式會沒完沒了...
   // $s = strtok($showStr, " ");
}

//輸出為：
// Genius*
// is*
// one*
// percent*
// inspiration*
// and*
// ninety-nine*
// percent*
// perspiration*
?>