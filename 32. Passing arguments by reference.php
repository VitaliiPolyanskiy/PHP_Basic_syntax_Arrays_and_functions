<html>

<head>
  <title></title>
</head>

<body>
 <?php

function add_label(&$data_str){
  $data_str .= "checked";
}
$str = "<input type=radio name=article ";
echo $str ."><br>";// выведет неотмеченную радио-кнопку

add_label($str);
echo $str ."><br>"; // выведет отмеченную  радио-кнопку

?>
</body>

</html>