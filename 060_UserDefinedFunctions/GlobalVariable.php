<?php
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;
	//因為global的關係所以$a=20(取用全域變數)
	//echo "a = $a<br>";
	return $c = ($b + $a);	//$c = (40+20)
}
// 
echo myFunction(40) + $c; //myFunction(40)是60，$c是60，答案為120，
?>