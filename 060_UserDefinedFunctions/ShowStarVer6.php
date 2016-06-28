<?php

function ShowStar() {
	$args = func_get_args();  //func_get_args傳回包含函式的參數列表的陣列
	
	if (!isset($args[0]))
		$args[0] = 5;
	if (!isset($args[1]))
		$args[1] = "*";
	ShowStar_all($args[0], $args[1]);
}

function ShowStar_all($iCount, $sWhat = "*") //
{
	if ($iCount <= 0)
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

// ShowStar(2, "^"); 
//將2及^傳入ShowStar函式裡，因為有數字2及符號^傳入，
//所以$args[0] 會等於2、$args[1]是^，而不是用條件式裡的5及*來輸出
//執行結果為 ^^

//ShowStar(null, "$");  
//函式參數設定為null，所以$args[0] = 5，$args[1]=$
//執行結果為 $$$$$

// ShowStar();
//為參數傳入則使用預設的參數$args[0] = 5，$args[1] = "*"
//執行結果為 *****
?>