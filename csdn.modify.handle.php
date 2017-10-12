<?php
/**
 * Created by PhpStorm.
 * User: renchunlin
 * Date: 2017/9/19
 * Time: 9:59
 */
    require_once ("connect.php");
    $id=$_POST['id'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $introduction=$_POST['introduction'];
    $content=$_POST['content'];
    $datetime=date('Y-m-d H:i:s',time());//获取系统时间

    $sqlupdate="update csdntest set title='$title',author='$author',introduction='$introduction',content='$content',datetime='$datetime'
    WHERE id=$id";

    if(mysqli_query($connect,$sqlupdate)){
        echo "<script>alert('修改成功');window.location.href='csdn.manage.php'</script>";
    }else{
        echo "<script>alert('修改失败');window.location.href='csdn.manage.php'</script>";
        //echo "修改失败";
    }
?>