<?php
/* 

Add_sign – добавляет подпись к строке
Show_text – выводит строку текста 

*/

function Add_sign($string, $sign="С уважением, Петр")
{
   echo $string ." ".$sign;
}
function Show_text()
{
  echo "Отправить сообщение по почте<br>";
}
$func = "Show_text";
   // создаем переменную со значением,
   // равным имени функции Show_text
$func();
   // это вызовет функцию Show_text
$func = "Add_sign";
   // создаем переменную со значением,
   // равным имени функции Add_sign
$func("Привет всем <br>");
   // это вызовет функцию
   // Add_sign с параметром "Привет всем"
?>