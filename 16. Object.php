<?php
//создаем класс людей
class Person
{
// метод, который обучает человека PHP
    function know_php()
        {
            echo "Теперь я знаю PHP";
        }
}
$bob = new Person; // создаем объект
                   // класса человек
$bob -> know_php(); // обучаем его PHP
?>