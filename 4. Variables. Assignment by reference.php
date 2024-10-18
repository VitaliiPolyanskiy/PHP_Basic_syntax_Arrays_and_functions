<?php
$first = ' Text '; // Присваиваем $first
                   // значение ' Text '
$second = &$first;
/* Делаем ссылку на $first через $second.
   Теперь значения этих переменных
   будут всегда совпадать */
// Изменим значение $first
// на ' New text '
$first = ' New text ';
echo "Переменная с именем first " .
     "равна $first <br>";
// выведем значения обеих переменных
echo "Переменная с именем second " .
     "равна $second";
 $a="Hello";
 $$a=",world!";
 echo $a.$Hello;
?>