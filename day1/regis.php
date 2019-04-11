<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=task','root','root');
$sql = 'SELECT * FROM class';
$data = $pdo->query($sql)->fetchAll();
//print_r($data);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生注册</title>
</head>
<body>
<form action="add.php" method="post">
    <p>姓名：<input type="text" name="name"></p>
    <p>密码：<input type="password" name="pwd" id="pwd"></p>
<!--    <p>确认密码：<input type="password" name="pwd1" id="pwd1"></p>-->
    <p>性别：
        <input type="radio" name="sex" value="1" checked>男<input type="radio" name="sex" value="2">女
    </p>
    <p>
        班级：
        <select name="class" id="class">
            <?php foreach($data as $v):?>
            <option value="<?=$v['class_id']?>"><?=$v['class_name'];?></option>
            <?php endforeach;?>
        </select>
    </p>
    <p><input type="submit" id="sub" value="提交"></p>
</form>
</body>
</html>
<!--<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>-->
<!--<script>-->
<!--    $("#sub"){-->
<!--        alert(111)-->
<!--    }-->
<!--</script>-->


