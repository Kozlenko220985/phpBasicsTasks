<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31.07.2017
 * Time: 19:00
 */

$count = 0;

if(isset($_COOKIE['count'])) $count= $_COOKIE['count'];
$count++;
setcookie("count", $count, 0x7FFFFFFF, "/");
echo $count;

?>