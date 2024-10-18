<?php
$names = array("Иван","Петр","Семен");
if ($names[0]=="Иван"):
echo "Привет, Ваня!";
endif;
$a=1;
if($a == 5):
    print "a равно 5";
    print "...";
elseif ($a == 6):
    print "a равно 6";
    print "!!!";
else:
echo "a не равно ни 5, ни 6!!!";
endif
?>