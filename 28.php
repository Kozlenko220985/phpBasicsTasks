<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if(!isset($_REQUEST['add'])) { ?>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
        <input type="text" name="login"><br>
        <input type="password" name="pass"><br>
        <input type="submit" name="add" value="Send">
    </form>
    <?php
}else{
    if(($_REQUEST['login']) == 'Konstantin' && ($_REQUEST['pass']) == ''){
        echo "Доступ открыт для пользователя {$_REQUEST['login']}";
    }else{
        echo "Доступ закрыт";
    }
}

?>

</body>
</html>
