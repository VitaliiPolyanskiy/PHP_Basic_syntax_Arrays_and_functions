<?php
$make = true;
/* здесь нельзя вызвать Make_event();
потому что она еще не существует, но можно
вызвать Save_info() */

Save_info("Вася","Иванов",
   "Я выбрал курс по PHP");

if ($make){
// определение функции Make_event()
  function Make_event(){
    echo "<p>Хочу изучать Python<br>";
  }
}
// теперь можно вызывать Make_event()
Make_event();
// определение функции Save_info
function Save_info($first, $last, $message){
  echo "<br>$message<br>";
  echo "Имя: ". $first . " ". $last . "<br>";
}
Save_info("Федя","Федоров",
          "А я выбрал Lisp");
// Save_info можно вызывать и здесь
?>