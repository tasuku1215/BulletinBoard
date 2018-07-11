<?php
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];

 ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<style type="text/css">
<!--
.table{
  width:200px;
  height:200px;
}
.table_color{
  background-color:red;
}
-->
</style>
</head>
<body>

<table class="table" border="1">
<?php for($i = 1;$i <= $num1;$i++){ ?>
  <tr>
  <?php for($j = 1;$j <= $num2;$j++){?>
    <td class="<?php
      if(($i % 2 == 0 && $j % 2 == 0)||($i % 2 == 1 && $j % 2 == 1)){
        echo "table_color";
      }
    ?>"></td>
  <?php } ?>
  </tr>
<?php } ?>
</table>

<form action="a.php">
 <input type="submit" value="戻る">
</form>

</body>
</html>
