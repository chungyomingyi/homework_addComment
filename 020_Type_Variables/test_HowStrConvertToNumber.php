<?php
  // 顯示下面 $x 結果為何
  // $x = 1 + "10";  // 結果為11，在php裡雙引號裡為數字時不會轉換成字串
  // $x = "11" + 1;  // 結果為12，在php裡雙引號裡為數字時不會轉換成字串
  //PHP 的變數是在執行時才決定型態，因為字串也可以用來做計算
  //PHP 將字串拿來做運算時，會依據底下二個原則設法將字串轉成可以計算的型態：
  //字串中包括 "."、"e" 或 "E" 時轉換成 double 型別，否則轉換為 integer
  //無法轉換時則省略
  // $x = 1 + "x10"; // 1 ，x無法轉換且後面的10則不再繼續運算
  // $x = 1 + "10x"; // 11，x無法轉換，所以省略
  // $x = 1 + "11.5x";  // 12.5，x無法轉換，所以省略
  // $x = 99 + "2x1.5";  // 101，x無法轉換且後面的1.5則不再繼續運算
  
  echo $x;
?>