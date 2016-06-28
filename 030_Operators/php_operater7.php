<?php
  $x = 3;
  if ($x >= 10 && foo()) //&& ← 而且的意思，需前後條件符合才會回傳yes，若前面的
    echo "yes";          //條件不符合則跳出if判斷式並顯示 no
  else
    echo "no";
    
  echo "<hr>";
  //顯示為no

  $x = 3;
  if ($x >= 10 & foo()) //& ← 符合其中一個條件即執行，所以會先執行if條件裡的foo()函式，
                        //再回傳x>=10的判斷結果
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}
//function內容為輸出顯示 foo() is running.

?>