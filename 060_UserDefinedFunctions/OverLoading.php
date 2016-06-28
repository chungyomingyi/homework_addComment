<?php

echo MathTool::calcTotal(1, 2, 3, 4, 5);

class MathTool {
	static function calcTotal () {
		// $args = func_get_args();
		var_dump($args);
		$total = 0;
		foreach ($args as $value) {	//用foreach輸出陣列裡面的值
			$total += $value;  //$total = $total + $value，陣列裡的值相加
		}
		return $total;  
	}
}


//var_dump($args); 用var_dump叫出$args參數裡的資料，下面為執行結果
///home/ubuntu/workspace/cyp05/060_UserDefinedFunctions/OverLoading.php:8: NULL Warning: Invalid argument supplied for foreach() in 
///home/ubuntu/workspace/cyp05/060_UserDefinedFunctions/OverLoading.php on line 10 Call Stack: 0.0017 238528 1. {main}() 
///home/ubuntu/workspace/cyp05/060_UserDefinedFunctions/OverLoading.php:0 0.0017 238800 2. MathTool::calcTotal() 
///home/ubuntu/workspace/cyp05/060_UserDefinedFunctions/OverLoading.php:3 0
?>
