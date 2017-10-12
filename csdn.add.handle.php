<?php
/**
 * Created by PhpStorm.
 * User: renchunlin
 * Date: 2017/9/18
 * Time: 16:50
 */
    require_once("connect.php");
    //把传递过来的信息入库，在入库之前对所有的信息校验
    //print_r($_POST);
    if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
        echo "<script>alert('标题不能为空');window.location.href='csdn.add.php'</script>";
    }elseif (!(isset($_POST['author'])&&(!empty($_POST['author'])))){
        echo "<script>alert('作者不能为空');window.location.href='csdn.add.php'</script>";
    }elseif (!(isset($_POST['introduction'])&&(!empty($_POST['introduction'])))){
        echo "<script>alert('简介不能为空');window.location.href='csdn.add.php'</script>";
    }elseif (!(isset($_POST['content'])&&(!empty($_POST['content'])))){
        echo "<script>alert('内容不能为空');window.location.href='csdn.add.php'</script>";
    }else{
        $title=$_POST['title'];
        $author=$_POST['author'];
        $introduction=$_POST['introduction'];
        $content=$_POST['content'];
        $datetime=date('Y-m-d H:i:s',time());//获取系统时间

        $sqlinser="insert into csdntest(title,author,introduction,content,datetime)
        VALUES ('$title', '$author','$introduction','$content','$datetime')";

        //echo $sqlinser;

        if(mysqli_query($connect,$sqlinser)){
            echo "<script>alert('发布成功');window.location.href='csdn.add.php'</script>";
        }else{
            echo "<script>alert('发布失败');window.location.href='csdn.add.php'</script>";
        }

    }
?>