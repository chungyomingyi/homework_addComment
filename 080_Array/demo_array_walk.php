<?php
$result = '';
function glue ($val)
{
	global $result;
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');
array_walk ($array, 'glue');
//array_walk() 函式對數組中的每個元素應用回調函數。如果成功則返回 TRUE，否則返回 FALSE
echo $result;
//結果為abcd
?>