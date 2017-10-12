<?php
	require_once("config.php");

	//连库
	if(!($connect=mysqli_connect(HOST,USERNAME,PASSWORLD))){
		echo mysqli_error();
	}

	//选库
	if(!mysqli_select_db($connect,'csdn')){
		echo mysqli_error();
	}

	//字符集
	if(mysqli_query($connect,"set names utf8")){
		echo mysqli_error($connect);
	}

?>