﻿<?php
# десятичное число
$a = 1234;
# отрицательное число
$a = -123;
# восьмеричное число (эквивалентно
# 83 в десятичной системе)
$a = 0123;
# шестнадцатеричное число (эквивалентно
# 26 в десятичной системе)
$a = 0x1A;
echo $a."<br>";
$a = (integer)15.4;
echo $a."<br>";
$res = 100/7;
echo $res."<br>";
$res = round($res,2);
echo $res."<br>";
?>