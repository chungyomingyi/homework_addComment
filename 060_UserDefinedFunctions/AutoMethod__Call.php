<?php

$obj = new CTest();
$obj->Foo(1, 2, 3, 4);


class CTest {
	
	function __call($MethodName, $Parameters) {
		echo "Name: ", $MethodName, "<br>";
		echo "<pre>" . var_dump($Parameters) ."</pre>";
		echo "<hr>";
	}
	
}
//顯示結果
// Name: Foo
// /home/ubuntu/workspace/cyp05/060_UserDefinedFunctions/AutoMethod__Call.php:11: array(4) { [0] => int(1) [1] => int(2) [2] => int(3) [3] => int(4) }
//var_dump是將變數資料印出來，顯示資料存在位置及陣列元素值的種類也被輸出，裡面顯示陣列有4個元素，索引值0裡面的資料型態是int，內容是1 

?>
