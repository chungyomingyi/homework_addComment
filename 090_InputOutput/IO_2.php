<?php
//找出資料夾目前的位置及檔名
$fileDir = dirname ( __FILE__ );
//開啟資料夾
$fileResource = opendir ( $fileDir );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) ://讀取資料夾 ?>
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource);//關閉資料夾

?>
</body>
</html>
