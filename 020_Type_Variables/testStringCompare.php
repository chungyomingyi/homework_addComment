
<?php

$x = "ABC";
$y = "AB";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

//結果：ABC >= AB

echo "<hr>";


$x = "ABC";
$y = "BA";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";
	
//	結果：ABC < BA
//php會以字母順序來決定大小，類似windows依字母排序

echo "<hr>";


$x = "123";
$y = "12";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

//結果123 >= 12
//php特性之一，雖然雙引號裡為字串，但是如果都是數字則會視為數字型態

echo "<hr>";

$x = "123";
$y = "21";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";
	
//結果：123 >= 21
//php特性之一，雖然雙引號裡為字串，但是如果都是數字則會視為數字型態

echo "<hr>";
		
		
?>