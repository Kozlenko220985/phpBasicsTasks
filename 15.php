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
<form  action ="15.php" method = "POST">
    <label for="first">Чило №1<br></label>
    <input type="text" id="first" name = "a"><br>
    <label for="second">Чило №2<br></label>
    <input type="text"id="second" name = "b"><br>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select><br><br>
    <input type = "submit" value = "посчитать" name = "button">
</form>
<?php


if(isset($_POST['button'])){
    $operator = $_POST['operator'];
    $a = $_POST ['a'];
    $b = $_POST ['b'];
}
// 1 вариант

if ($b==0 and $operator=='/'){
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
}

//2 вариант

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
