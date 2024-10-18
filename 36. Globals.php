<?php
$a=20;
function Test_g(){
	$a =10;
	echo "Локальная переменная a= ".$a."<br>";
	//global $a;
	//$a = $a*2;
	$GLOBALS["a"] = $GLOBALS["a"]*2;
	echo "Глобальная переменная a= ".$GLOBALS["a"]."<br>";
}
echo 'вне функции $a=',$a,', ';
Test_g();
echo "<br>";
echo 'вне функции $a=',$a,', ';
Test_g();
?>