<?php
$str = <<<EOD1
Пример строки, охватывающей несколько
строчек, с использованием
heredoc-синтаксиса
EOD1;
echo $str."<br>";
$name = 'PHP';
echo <<<EOD
Я изучаю "$name".
EOD;
?>