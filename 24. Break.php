﻿<?php
$i=1;
while ($i) {
    $n = rand(1,10);
    // генерируем произвольное число
    // от 1 до 10
    echo "$i:$n ";
    // выводим номер итерации и
    // сгенерированное число
    if ($n==5) break;
/* Если было сгенерировано число 5,
то прекращаем работу цикла. В этом случае
все, что находится после этой строчки
внутри цикла, не будет выполнено */
    echo "Цикл работает <br>";
    $i++;
}
echo "<br>Число итераций цикла $i <br><br><br>";
?>

<?php
$i=1;
while ($i) {
  $n = rand(1,10);
  // генерируем произвольное число
  // от 1 до 10
  switch ($n){
    case 5:
      echo "<font color=blue>
        Выход из switch (n=$n)</font>";
    break 1;
	// прекращаем работу switch
    // (первого содержащего break цикла)
    case 10:
      echo "<font color=red>
	    Выход из switch и
		while (n=$n)</font>";
    break 2;
	// прекращаем работу switch и while
    // (двух содержащих break циклов)
    default:
      echo "switch работает (n=$n), ";
}
echo " while работает – шаг $i <br>";
$i++;
}
echo "<br>Число итераций цикла $i <br>";


for($i=0;$i<10;$i++)
{
	for($j=0;$j<10;$j++)
	{
	 	print '*';
	 	if($j==5)
	 		break 2;
	}
	print "<br>";
}
?>