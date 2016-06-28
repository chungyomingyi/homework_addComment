<?php
  //用gettype()取得下列各程式 $x 的資料型態
  $x = 123;                   
  echo gettype($x), "<br>";   //123為integer
  
  $x = 123.0;                   
  echo gettype($x), "<br>";     //123.0為double

  $x = "123.0"; 
  echo gettype($x), "<br>";     //"123.0" 為string
  
  $x = TRUE;
  echo gettype($x), "<br>";     //TRUE 為boolean
  
?>
