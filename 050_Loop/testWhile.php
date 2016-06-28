<?php
$iSum = 0;  
$i = 1;  //設定初值

while ($i <= 10)	//條件判斷，i從1開始+1一直累積到10，共跑了10次迴圈
{
	$iSum += $i;  //同等於 $iSum = $iSum + $i
	$i += 1;	  //同等於 $i = $i + 1
}
echo $iSum;			//$iSum = 55

echo "<hr>";

$iSum = 0;	
$i = 0;
while ($i < 10)	//條件判斷，i從0開始+1一直累積到9，共跑了10次迴圈
{
	$i++;			//i先往下執行再做一次+1的動作
	$iSum += $i;	//同等於 $iSum = $iSum + $i
}
echo $iSum		//$iSum = 55
?>