<?php

function DrawLine() {
	echo "<hr>";
}

register_tick_function("DrawLine");
//register_tick_function函數定義了每個tick事件發生時的處理函數
//tick是一個事件。事件的定義是在register_tick_function，事件的執行頻率是在(ticks=n)。
//用register_tick_function()來指定tick事件發生時應該執行的操作
//ticks=3，也就是執行3次echo後會呼叫DrawLine()函式再繼續執行本身的程式

// declare (ticks = 3) {
// 	echo "1<br>";
// 	echo "2<br>";
// 	echo "3<br>";
// 	echo "4<br>";
// 	echo "5<br>";
// 	echo "6<br>";
// 	echo "7<br>";
// 	echo "8<br>";
// 	echo "9<br>";
// }


declare (ticks = 3) {
	for ($i = 1; $i <= 9; $i++) {
		echo "$i<br>";
	}
}


?>