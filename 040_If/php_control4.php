<?php
	header("content-type: text/html; charset=utf-8");
	$num = 3;
	switch ($num){
		case 0:
			echo "零";
			break;
		case 1:
			echo "壹";
			break;
		case 2:
			echo "貳";
			break;
		case 3:
			echo "參";
			break;
		case 4:
			echo "肆";
			break;
		case 5:
			echo "伍";
			break;
		case 6:
			echo "陸";
			break;
		case 7:
			echo "柒";
			break;
		case 8:
			echo "捌";
			break;
		case 9:
			echo "玖";
			break;
		default:
			echo "unknown";
	}  // end of switch
	//將3丟入num，並進入switch多條件判斷敘述，如果沒有符合case裡的條件則會進入default條件裡
	
	//結果：參
?>