<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php"); //@←不會秀出錯誤訊息，之後的程式則不會執行
    echo "flag 2<br>";

?>