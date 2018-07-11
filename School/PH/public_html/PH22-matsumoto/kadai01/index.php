<?php
require 'func38.php';

$user_list = array();
$user_list[] = array('1','真田光義','48');
$user_list[] = array('2','相原太郎','26');
$user_list[] = array('3','土田憲司','31');
$user_list[] = array('4','小出明夫','48');
$user_list[] = array('5','大崎悦夫','52');

if(!empty($_GET)){

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

$array = array(
$num1,
$num2,
$num3 = $_GET["num3"],
$num4 = $_GET["num4"],
);
//四則演算
if(kadai38_1($num1,$num2) == false){
  echo 'false';
}else{
  echo print_r(kadai38_1($num1,$num2));
}

echo '<br>';

//MAX値
if(kadai38_2($array) == false){
  echo 'false';
}else{
  echo kadai38_2($array);
}
echo '<br>';

//ソート
echo print_r(kadai38_3($array)).'<br>';

$users = kadai38_4($user_list,$sort = 2);
}
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php if(empty($_GET)){ ?>
    <form action="index.php" method="get">

        <ul>
          <li><label for="num1">num1:</label>
            <input type="text" name="num1"></li>
          <li><label for="num2">Num2:</label>
            <input type="text" name="num2"></li>
          <li><label for="num3">Num3:</label>
            <input type="text" name="num3"></li>
          <li><label for="num4">Num4:</label>
            <input type="text" name="num4"></li>
          <li><input type="submit" value="送信"></li>
        </ul>

    </form>
<?php }else{ ?>
<pre>
<?php echo print_r($users);}?>
</pre>
  </body>
</html>
