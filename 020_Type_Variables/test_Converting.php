<?php

$a = 12;
$b = "34";

// $result = $a + $b; // 顯示為46，在php語法裡有雙引號也視為數字
// $result = $a . $b; // 顯示為1234，句點為字串相連
$result = $a + intval($b);  //顯示為 46
                            // intval為取得變數的整數值
                            //所以會將 $b 轉為整數再與 $a 相加再將結果丟入 $result

echo $result;

?>