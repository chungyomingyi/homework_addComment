<?php
//與ShowStarVer3雷同，有加入if判斷式，將$iCount數字範圍設定為0<$iCount<=20之間
//如果不在範圍裡則跳出條件訊息
function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount > 0)	//條件需大於0
	{
		if ($iCount <= 20)		//條件需小於等於20
		{
			$result = "";
			for ($i = 1; $i <= $iCount; $i++)
			{
				$result .= $sWhat;
			}
			echo $result;
		}
		else 
			echo "iCount <= 20 please.";  //條件訊息
	}
	else
	{
		echo "iCount > 0 please.";//條件訊息
	}
}

$iHowMany = 21;		//設定$iHowMany變數大小
ShowStar($iHowMany);//呼叫ShowStar函式
?>