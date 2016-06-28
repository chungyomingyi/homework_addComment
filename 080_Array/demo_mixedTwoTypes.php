<?php
//header("content-type: text/html; charset=utf-8");
$a = array('xxx', 'book' => '書籍', 'yyy', 'desk' => '書桌', 'pen' => '筆');

foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}
//顯示為
// 0 = xxx
// book = �㮾蝐�
// 1 = yyy
// desk = �㮾獢�
// pen = 蝑�

//但是加了header("content-type: text/html; charset=utf-8");之後
//則顯示為
// 0 = xxx
// book = 書籍
// 1 = yyy
// desk = 書桌
// pen = 筆
?>