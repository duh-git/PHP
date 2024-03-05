<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    echo '<h1 style="
      font-size:56px;
      ">
      Hello, PHP!</h1>';
    $a = 10;
    $b = '10';
    echo '<h2>Сумма a и b = '.($a + $b).'</h2>';
    define('pi', 3.1415);
    echo '<h2>Pi = '.(pi).'</h2>';
    $a = 'Hello, My name is Giovanni Giorgio';
    echo '<h2>'.$a.'<br>Lenght = '.strlen($a).'</h2>';
  ?>
</body>
</html>