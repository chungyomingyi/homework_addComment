<?php
//與ShowStarVer2相同，只是將星號改成星數，這樣的程式彈性比較大
function ShowStar($iCount, $sWhat = "*")	//預設為 *
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)	
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);	//可再丟其他符號參數在$iHowMany後面
?>