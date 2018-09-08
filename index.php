<?php
$title = "Первый урок";
$myH = "Первый заголовок";
?>


<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    
    
  </head>

  <body>
   <h1><?php print $myH; ?></h1>
    <p> <?php print(date('d F, Y')); ?></p>

  <?php
    $a = 5;
    $b = '05';
  
  print  var_dump($a == $b);     // Почему true? - в преобразовалось в число
  print  var_dump((int)'012345');     // Почему 12345? - int - преобразовывает в целое число
  print  var_dump((float)123.0 === (int)123.0); // Почему false? - сравнение типов инт не флоат
  print  var_dump((int)0 === (int)'hello, world'); // Почему true? - при преобразовании строки получаем 0
?>


  </body>

</html>


