<?php
    $name = $_POST['name'];
    $pwd = md5($_POST['pwd']);
    $sex = $_POST['sex'];
    $class = $_POST['class'];
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=task','root','root');
    $sql = "INSERT INTO students VALUES('','$name','$pwd','$sex','$class')";
    $reg = $pdo->query($sql)->execute();
    if ($reg) echo "<script>alert('注册成功！');location.href='/task/day1/login.php'</script>"
?>