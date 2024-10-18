<?php
echo  "Факториал 3: ".fact(3);
echo "<br>Факториал 5: ".fact(5);
?>

<?php
function fact($n){
  if ($n==0) return 1;
  else return  $n * fact($n-1);
}
?>