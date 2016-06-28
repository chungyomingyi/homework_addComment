<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);	//strlen取$sData裡的字串長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);		//substr取得文字部分內容($sData內容，索引位置，取的長度)
	$result = $ch . str_replace($ch, "", $result);

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
//執行結果 61785-20943

?>