<?php
/**
 * Created by PhpStorm.
 * User: renchunlin
 * Date: 2017/9/19
 * Time: 10:52
 */
require_once ("connect.php");
    $id=$_GET['id'];
    $sqldelete="delete from csdntest WHERE id=$id";
    if(mysqli_query($connect,$sqldelete)){
        echo "<script>alert('删除成功');window.location.href='csdn.manage.php'</script>";
    }else{
        echo "<script>alert('删除失败');window.location.href='csdn.manage.php'</script>";
    }

?>