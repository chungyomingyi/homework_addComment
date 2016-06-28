<?php
//與ShowStarVer4雷同, 但是if條件式不是包2層而且類似ifelse的控制流程，
//會一直往下走，不符合if條件判斷則return

function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount <= 0)	//如果$iCount <= 0 ，則跳出iCount > 0 please，若大於0則往下執行程式
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)	//如果$iCount > 20 ，則跳出iCount <= 20 please，若小於20則往下執行程式
	{
		echo "iCount <= 20 please";
		return;
	}
	//顯示符合以上2個if判斷式的$iHowMany數量for廻圈
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);//將$iHowMany帶入ShowStar函式並輸出結果
?>