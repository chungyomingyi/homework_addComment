<?php
  //用gettype()指令取得變數資料型態
  // $x = getdate();
  // echo gettype($x), "<br>";  // $x 為 array 型態 
  
  // $x = date('Y-m-d H:i:s');  
  // echo $x, "<br>";                //執行結果：2016-06-23 09:47:07
  // echo gettype($x), "<br>";       //執行結果：string
  
  // $x = gmdate('Y-m-d H:i:s');         //執行結果：2016-06-23 09:46:37
  // echo $x, "<br>";                     //gmdate為顯示格林威治時間
                                          //mktime為顯示當地時間 
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));   //時間戳記，會從1970-01-01 00:00:00開始計算
  echo $x, "<br>";                      //執行結果：1466675252
  echo gettype($x), "<br>";             //執行結果：integer
  
?>