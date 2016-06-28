<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array('myName'=>'Jeremy', 
                     'myHeight'=>191, 
                     'myWeight'=>91);
                    //  => 指向符號，左邊是key值，右邊是value
                    //key值可以自行設定
    echo "大家好，我的名字叫".$myArray['myName']
    
    //輸出結果為：
    //大家好，我的名字叫Jeremy
?>