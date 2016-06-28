<?php
  //顯示時間mktime裡的參數格式為(時，分，秒，月，日，西元年)
  $d = mktime(13, 30, 0, 9, 10, 2012);
  echo $d;  //1347283800，回傳自1970/01/01 00:00:00到設定時間的相差秒數
  echo "<br>";
  //顯示時間，格式為("年-月-日 時:分:秒")
  echo date("Y-m-d H:i:s", $d);  //2012-09-10 13:30:00
  
  
?>