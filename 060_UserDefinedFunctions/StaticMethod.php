<?php

echo MathTool::calcTotal(1, 2, 3, 4, 5);

class MathTool {
	static function calcTotal () {
		$args = func_get_args();//func_get_args傳回包含函式的參數列表的陣列
		// var_dump($args);
		$total = 0;
		foreach ($args as $value) {	//用foreach輸出陣列裡面的值
			$total += $value;		//$total = $total + $value，陣列裡的值相加
		}
		return $total;		
	}
}

//$args = func_get_args(); 執行結果為15


?>
