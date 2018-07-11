<?php
//値の受け取り
  $number1 = $_GET["num1"];
  $number2 = $_GET["num2"];
  $number3 = $_GET["num3"];
/*
  if($number1 > $number2){
    echo "<h1>{$_GET["num1"]}</h1>";
  }else{
    echo "<h1>{$_GET["num2"]}</h1>";
  }
*/

  echo max($_GET["num1"],$_GET["num2"]);

$i = 0;
  while($i < $number3):
    echo "*";
    $i++;
  endwhile;
 ?>
<br>
<form action="a.php">
 <input type="submit" value="戻る">
</form>
