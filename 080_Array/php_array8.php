<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);	//natsort 函式用自然排序法對陣列中的元素排序
	var_dump($testArray);	//var_dump 用來輸出變數的相關訊息
	
	//輸出結果：
// 	/home/ubuntu/workspace/cyp05/080_Array/php_array8.php:4: array(3) { [0] => string(2) "A1" [1] => string(3) "A18" [2] => string(2) "A2" } 
//  /home/ubuntu/workspace/cyp05/080_Array/php_array8.php:9: array(3) { [0] => string(2) "A1" [2] => string(2) "A2" [1] => string(3) "A18" }
?>
