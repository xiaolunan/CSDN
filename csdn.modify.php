<?php
    require_once("connect.php");
    $id=$_GET['id'];
    //读取就信息
    $sqlselect="select * from csdntest where id=$id";
    $query=mysqli_query($connect,$sqlselect);
    $data=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>发布文章</title>
    <meta charset="utf-8">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			padding-top: 85px;
		}
		.position{
			position: absolute;
			left: 30px;
			top: 20px;
		}
		.float_left{
			float: left;
		}
		.side_left{
			height: 500px;
			width: 15%;
			background: lightgrey;
		}
		.side_left a{
			font-size: 20px;
			display: block;
			text-align: center;
			margin-top: 30px;
		}
		.side_right{
			text-align: center;
			width: 80%;
			background: white;
		}
		.side_right .text_input{
			margin-top: 20px;
		}
		.text_input span{
			font-size: 20px;
			display: block;
		}
		.text_input input{
			padding-left: 5px;
			padding-top: 2px;
			height: 25px;
			width: 80%;
		}
		.text_input textarea{
			height: 400px;
			width: 80%;
			padding-left: 5px;
			padding-top: 3px;
		}
		.form_submit{
			margin-top: 30px;
			margin-bottom: 30px;
			width: 300px;
			height: 40px;
		}
	</style>
</head>
<body>
	<h1 class="position">后台管理系统</h1>
	<div class="side_left float_left">
		<a href="csdn.add.php" class="side_nav">发布文章</a>
		<a href="csdn.manage.php" class="side_nav">管理文章</a>
	</div>
	<div class="side_right float_left">
		<h1>修改文章</h1>
		<form id="form1" name="form1" method="post" action="csdn.modify.handle.php">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
			<div class="text_input">
				<span>标题</span>
				<input type="text" name="title" value="<?php echo $data['title']?>">
			</div>
			<div class="text_input">
				<span>作者</span>
				<input type="text" name="author" value="<?php echo $data['author']?>">
			</div>
			<div class="text_input">
				<span>简介</span>
				<input type="text" name="introduction" value="<?php echo $data['introduction']?>">
			</div>
			<div class="text_input">
				<span>内容</span>
				<textarea name="content"><?php echo $data['content']?></textarea>
			</div>
			<input class="form_submit" type="submit" name="submit" value="提交">
		</form>
	</div>
</body>
</html>