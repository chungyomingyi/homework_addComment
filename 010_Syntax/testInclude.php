<?php
  include("testDefine.php");    //include 引用檔案
  // require("testDefine.php"); //require 也是引用檔案，但是使用於引用重要檔案上 
  
                                //但是使用require如果出現錯誤程式則停止，
                                //使用include而程式錯誤時會繼續執行

  echo test;
?>