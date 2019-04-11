<?php
        $name = $_POST['name'];
        $pwd = md5($_POST['pwd']);
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=task','root','root');
        $sql = "SELECT * FROM students WHERE name='$name' AND pwd ='$pwd'";
//        echo $sql;die;
        $reg = $pdo->query($sql)->fetch();
        if (!$reg){
            echo "<script>alert('用户名或密码错误！');location.href='/task/day1/login.php'</script>";
        }else{
            echo "<script>alert('登录成功！');location.href='/task/day1/login.php'</script>";
        }
?>