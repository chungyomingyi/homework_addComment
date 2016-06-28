<?php
  header("content-type: text/html; charset=utf-8");
  // header("content-type: text/html; charset=big5");
  $s = "許功蓋";
  echo strlen($s), ", ";  // 取得$s裡的字串長度：9
  echo strlen(iconv("UTF-8", "big5", $s));  //取得轉碼之後的長度：6
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s);//將$s的編碼UTF-8 轉 BIG5 (UTF-8轉繁體中文)，會顯示亂碼�\�\�\
?>
