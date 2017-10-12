<?php
    require_once ("connect.php");
    $sqlselect="select * from csdntest order by datetime desc";
    $query=mysqli_query($connect,$sqlselect);
    if($query&&mysqli_num_rows($query)){
        while ($row=mysqli_fetch_assoc($query)){
            $data[]=$row;
            //print_r($data);
        }
    }else{
        $data=array();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>管理文章</title>
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
		<h1>管理文章</h1>
        <td width="837" valign="top" bgcolor="#FFFFFF">
            <table width="743" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000" STYLE="align-content: center">
                <tr>
                    <td colspan="3" align="center" bgcolor="#FFFFFF">文章管理列表</td>
                </tr>
                <tr>
                    <td width="37" bgcolor="#FFFFFF">编号</td>
                    <td width="572" bgcolor="#FFFFFF">标题</td>
                    <td width="82" bgcolor="#FFFFFF">操作</td>
                </tr>
                <?php
                if(!empty($data)){
                    foreach($data as $value){
                        ?>
                        <tr>
                            <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
                            <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['title']?></td>
                            <td bgcolor="#FFFFFF"><a href="csdn.delete.handle.php?id=<?php echo $value['id']?>">删除</a> <a href="csdn.modify.php?id=<?php echo $value['id']?>">修改</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </td>
	</div>
</body>
</html>