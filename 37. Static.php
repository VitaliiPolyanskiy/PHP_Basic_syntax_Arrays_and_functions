﻿<?php

function Test_s(){
static $a = 1;
  $a = $a*2;
  echo $a."<br />";
}
Test_s(); // выведет 2
echo $a;  // ничего не выведет, так как
          // $a доступна только
        // внутри функции
Test_s(); // внутри функции $a=2, поэтому
          // результатом работы функции
        // будет число 4
Test_s(); // внутри функции $a=4, поэтому
          // результатом работы функции
        // будет число 8
?>
