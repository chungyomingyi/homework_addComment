<?php
$a = 20;
function myfunction($b) {
	// print "a=$a<br>";
	$a = 30;
	//print "a=$a<br>";
	global $a, $c;
	//print "a=$a<br>";
	return $c = ($b + $a);
	//function只看的到自己的變數，如果要顯示全域變數要用global
	//global可建立全域變數，但僅限於本身能看的到
	//別的函數要用global才看的到
}
print myfunction(40) + $c;
?>