<?php
$s="ABC1234ABC";
$iPos=strpos($s,"1234"); // strpos 函式用來找出關鍵字符在原始字串中所在的數字位置
                            //關鍵字符為 1234 所以顯示 found
if($iPos !== false){
    echo "found";
}else{
    echo "not found";
}
?>