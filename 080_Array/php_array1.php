<?php
//給血型的陣列並用for迴圈輸出
$bloodType[] = 'A';
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}

//輸出結果為：
// A
// B
// AB
// O
?>