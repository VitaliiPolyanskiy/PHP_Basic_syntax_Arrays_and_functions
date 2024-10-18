<?php
// определяем константу
// PASSWORD
define("PASSWORD","qwerty");
// выведем значение константы PASSWORD,
// т.е. qwerty
echo PASSWORD."<br>";
// тоже выведет qwerty
echo constant("PASSWORD");
echo password;
/* выдается ошибка и завершается скрипт,
   поскольку мы ввели регистрозависимую
   константу PASSWORD */
?>