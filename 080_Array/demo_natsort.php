<?php

$a = array('a1', 'a3', 'a20', 'a15');

natsort($a);

var_dump(natsort($a));
echo "<br>";

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

// /home/ubuntu/workspace/cyp05/080_Array/demo_natsort.php:7: bool(true) 
// 0 => a1 
// 1 => a3 
// 3 => a15 
// 2 => a20 



?>
