<?php

for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 4; $j++) {
		echo "$i , $j <br>";
		if (($i + $j) % 4 == 0)
		    break 2;      //跳出2層迴圈
		    //continue 2; //內外2個迴圈不執行
	}
	echo "-----<br>";
}


?>