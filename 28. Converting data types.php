﻿<?php
	$str = "23SomeText";
	$res = @($str+5);
	echo $res."<br>"; //выведет 28
	echo $str."<br>"; //выведет 23SomeText, т.к. значение самой переменной не изменится
                      //при выполнении данной операции
    $str = "2.3";
	$res = 5 + $str;
	echo $res."<br>"; //выведет 7.3

	$a = 99.2;
	$a = (int)$a;        //=99
	$b = (double)$a; //=99.0
	$c = (string)$a;  //="99"
?>
