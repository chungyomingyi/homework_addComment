<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;//判斷是1時則交換位置
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");   //usort函式使用用戶自定義的函式對$a陣列內容排序
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}
//$key為0到4的排序，$value為陣列內的排序
//輸出結果：
// 0: 1 
// 1: 2 
// 2: 3 
// 3: 5 
// 4: 6 

?>