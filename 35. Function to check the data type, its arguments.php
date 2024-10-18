<?php

function DataCheck(){
  $check =true;
  $n = func_num_args();
     // число аргументов,
     // переданных в функцию
  /* проверяем, является ли первый
  переданный аргумент целым числом */
  if ($n>=1)
  	if (!is_int(func_get_arg(0)))
      $check = false;
  /* проверяем, является ли второй
  переданный аргумент строкой */
  if ($n>=2)
     if (!is_string(func_get_arg(1)))
        $check = false;
return $check;
}

if (DataCheck(123,"text"))
   echo "Проверка прошла успешно<br>";
else echo "Данные не удовлетворяют
   условиям<br>";
if (DataCheck(324))
   echo "Проверка прошла успешно<br>";
else echo "Данные не удовлетворяют условиям<br>";
if (DataCheck(32.4))
   echo "Проверка прошла успешно<br>";
else echo "Данные не удовлетворяют условиям<br>";

?>