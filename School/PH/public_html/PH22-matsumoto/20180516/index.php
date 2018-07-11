<?php
require 'func.php';
$check = $_GET["check"];
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];


echo 'sample02 :'.sample02($num1,$num2);

echo '<br>sample03 :'.sample03($num1,$num2);

echo '<br>sample04 :'.sample04($check,$num1,$num2);

echo '<br>sample05 :'.sample05($check,$num1,$num2);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form action="index.php" method="get">
    <label for="check">Check:</label>
    <input type="text" name="check">
    <label for="num1">Num1:</label>
    <input type="number" name="num1">
    <label for="num2">Num2:</label>
    <input type="number" name="num2">
    <input type="submit" value="送信">
  </form>
  </body>
</html>
