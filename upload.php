<?php

	$uptext=$_POST['uptext'];

	foreach($_POST as $key => $value) {
		echo "get post value: $key => $value<br>";
	}

	echo "<br><br>";

	$upfile = $_FILES['uploadfile'];

	for($i=0;$i<count($upfile['name']);$i++){
		echo "get upload file. name: ".$upfile['name'][$i]." size: ".$upfile['size'][$i]."<br>";	
	}
	
	die("<br>finish<br>");

?>

