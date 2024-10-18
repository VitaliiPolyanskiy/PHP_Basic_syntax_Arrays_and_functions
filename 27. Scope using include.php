<?php
function PrintDate(){
    include ("Date.php");
/* включаем файл Date.txt.
   Теперь его переменными можно пользоваться,
   но только внутри функции */
    $str = "Сегодня: $today <br>";
    echo "$str";
}
PrintDate();
echo "Сегодня: $today"; // переменная $today не видна за пределами функции

?>