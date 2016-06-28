<?php

$a = array('1', '2');
foreach ($a as $k => $x)
{
	$x = '3';
}
//結果為 0 => 1 
foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}
//結果為 1 => 2
?>