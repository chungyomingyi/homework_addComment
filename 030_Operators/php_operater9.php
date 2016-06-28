<?php

$x = 100;
$y = &$x;  //& ← 找出x的位置(記憶體位址)

$y = 200;   //參用x的位址
echo "x = $x </br>";

unset($x);  //記憶體位址歸零
echo "y = $y </br>";

//執行結果：x = 200 
//          y = 200 

?>