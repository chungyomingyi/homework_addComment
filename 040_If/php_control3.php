<?php
	$score = 95;
	if ($score >=60 && $score < 70) {
		echo 'D';
	} elseif ($score>=70 && $score<80) {
		echo 'C';
	} elseif ($score>=80 && $score<90) {
		echo 'B';		
	} elseif ($score>=90 && $score<=100) {
		echo 'A';		
	} else {
		echo 'Fail';
	}
	//將95丟入score，並使用 elseif 做多個判斷，如果判斷條件都不成立，那麼就會執行 else 裡的敘述
	//結果：A
?>