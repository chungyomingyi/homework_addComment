<?php
function ShowStar($iCount)		//ShowStar函式並丟一個$iCount的參數進去
{
	$result = "";		//宣告$result為空值
	for ($i = 1; $i <= $iCount; $i++)	//用for迴圈輸出星星，$iCount為變數也是星數
	{
		$result .= "*";
	}
	echo $result;
}

$iHowMany = 3;
ShowStar($iHowMany);	//呼叫ShowStar函式，並顯示$iHowMany裡的數字來換成星數 
?>