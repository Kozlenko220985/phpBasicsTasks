<?php
$age = 'ewr1';
if ($age >= 18 && $age <= 59) {
    echo 'Вам еще работать и работать';
} elseif ($age > 59) {
    echo 'Вам пора на пенсию';
} elseif($age > 0 && $age <=18) {
    echo 'Вам еще рано работать';
}elseif($age <= 0 || (is_string($age)) ) {
    echo 'Неизвестный возраст';
}


?>