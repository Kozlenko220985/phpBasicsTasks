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
<?php if (!isset($_POST['button'])) { ?>
    <form action=" <?= $_SERVER['SCRIPT_NAME'] ?>" method="post" ">
    <label for="first">Чило №1<br></label>
    <input type="text" id="first" name="a"><br>
    <label for="second">Чило №2<br></label>
    <input type="text" id="second" name="b"><br>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select><br><br>
    <input type="submit" value="посчитать" name="button">
    </form>
    <?php
} else {
    if ($_POST['b'] == 0 && $_POST['operator'] == '/') {
        echo "на 0 делить нельзя";
    } elseif ($_POST['operator'] == '+') {
        $result = $_POST['a'] + $_POST['b'];
        echo $_POST['a'] . $_POST['operator'] . $_POST['b'] . '=' . $result;
    } elseif ($_POST['operator'] == '-') {
        $result = $_POST['a'] - $_POST['b'];
        echo $_POST['a'] . $_POST['operator'] . $_POST['b'] . '=' . $result;
    } elseif ($_POST['operator'] == '/') {
        $result = $_POST['a'] / $_POST['b'];
        echo $_POST['a'] . $_POST['operator'] . $_POST['b'] . '=' . $result;
    } elseif ($_POST['operator'] == '*') {
        $result = $_POST['a'] * $_POST['b'];
        echo $_POST['a'] . $_POST['operator'] . $_POST['b'] . '=' . $result;
    } elseif ($_POST['operator'] == '%') {
        $result = $_POST['a'] % $_POST['b'];
        echo $_POST['a'] . $_POST['operator'] . $_POST['b'] . '=' . $result;
    }
}
/*if(isset($_REQUEST['button'])){
    $operator = $_POST['operator'];
    $a = $_POST ['a'];
    $b = $_POST ['b'];*/

// 2 вариант

/*if ($b==0 and $operator=='/'){
    echo "на 0 делить нельзя";
}elseif ($operator == '+') {
    $result=$a + $b;
    echo $a.$operator.$b.'='.$result;
}elseif ($operator == '-'){
    $result=$a - $b;
    echo $a.$operator.$b.'='.$result;
}elseif ($operator =='/'){
    $result=$a / $b;
    echo $a.$operator.$b.'='.$result;
}elseif ($operator == '*'){
    $result=$a * $b;
    echo $a.$operator.$b.'='.$result;
}elseif ($operator == '%'){
    $result=$a % $b;
    echo $a.$operator.$b.'='.$result;
}*/

//3 вариант

/*switch ($operator):
    case('+'):
        $result = $a + $b;
        echo $a.$operator.$b.'='.$result;
        break;
    case ('-'):
        $result=$a - $b;
        echo $a.$operator.$b.'='.$result;
        break;
    case ('/'):
        $result=$a / $b;
        echo $a.$operator.$b.'='.$result;
        break;
    case ('*'):
        $result=$a * $b;
        echo $a.$operator.$b.'='.$result;
        break;
    case ('%'):
        $result=$a % $b;
        echo $a.$operator.$b.'='.$result;
        break;
endswitch;*/


?>
</body>
</html>
