<?php
if (isset ( $_POST ["btnOK"] )) {	//判斷是否有資料 key="btnOK",vaule="2"
	processFile ( $_FILES ["file1"] ); 
}
function processFile($objFile) {	
	if ($objFile ["error"] != 0) {
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	
	$test = move_uploaded_file ( 
		$objFile ["tmp_name"], 
		"./" . $objFile ["name"] );
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";
	echo "File type: " . $objFile ["type"] . "<br />";
	echo "File size: " . $objFile ["size"] . "<br />";
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<!--enctype編碼方式一定要加上去-->
	<form method="post" enctype="multipart/form-data" action="">
		<!--按鈕格式會依type內容而變，type="file"才能選取檔案-->
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>