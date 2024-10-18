<?php
$names = array("Иван","Петр","Семен");
switch ($names[0]){
case "Иван":
    echo "Привет, Ваня!";
break;
case "Петр":
    echo "Привет, Петя!";
break;
case "Семен":
    echo "Привет, Сеня!";
break;
default:
    echo "Привет, $names[0]. 	А как Вас зовут?";
}
?>

<?php
$names = array("Иван","Петр","Семен");
switch ($names[5]):
case "Иван":
    echo "Привет, Ваня!";
break;
case "Петр":
    echo "Привет, Петя!";
break;
case "Семен":
    echo "Привет, Сеня!";
break;
default:
    echo "Привет, $names[0].
	А как Вас зовут?";
endswitch;
?>