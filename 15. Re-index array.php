﻿<?php
$arr =
 array ("a","b","c"); /* Создаем массив
                         со значениями
                         "a", "b" и "c".
                         Поскольку ключи
                         не указаны, они
                         будут 0,1,2
                         соответственно */
print_r($arr); // выводим массив (и ключи,
               // и значения)
print "<br>";
// удаляем из него все значения
unset($arr[0]);
unset($arr[1]);
unset($arr[2]);

print_r($arr);  // выводим массив (и ключи,
                // и значения)
print "<br>";

$arr[] = "aa";  // добавляем новый элемент
                // в массив.
                // Его индексом (ключом)
                // будет 3, а не 0
print_r($arr);
print "<br>";

$arr =
 array_values($arr); // переиндексируем
                     // массив
$arr[] = "bb"; // ключом этого элемента
               // будет 1
print_r($arr);
print "<br>";
?>