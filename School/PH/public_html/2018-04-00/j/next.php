<?php
/*
クラス記号 ：PH11S723
出席番号   ：35
作成者     ：細見　祐
作成日     ：2017/11/07
仕様       ：ランダムな４つの配列を制御する
*/
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>welcome</title>
</head>
<body>
<?php
  echo "  四個の乱数0～9を表示する<br>\n",'  ';
  for($i=0;$i<4;$i++)
  {
    $rand[$i]=rand(0,9);
    print("$rand[$i],");
  }
  echo "<br>\n  四個の乱数0～9の最大値を表示する<br>\n",'  ';
  echo max($rand);
  echo "<br>\n  四個の乱数0～9の最小値を表示する<br>\n",'  ';
  echo min($rand);
  echo "<br>\n  四個の乱数0～9の平均値を表示する<br>\n",'  ';
  echo array_sum($rand)/$i;
  echo "<br>\n  四個の乱数0～9の要素数を表示する<br>\n",'  ';
  echo sizeof($rand);
  echo "<br>\n  四個の乱数0～9の重複した数を表示する<br>\n",'  ';
  $one = array_count_values($rand);
  echo max($one);
  echo "<br>\n  四個の乱数0～9のかぶらないように表示する<br>\n",'  ';
  $shuffle=range(0,9);
  shuffle($shuffle);
  for($i=0;$i<4;$i++)
  {
    print("$shuffle[$i],");
  }
  echo "<br>";
  $val = $_GET["firstname"];
  echo "$val";

?>
<form
method="get"
action="next.php">

<input
type="text"
name="firstname">

<input
type="submit"
name="send"
value="send">
</form>

</body>
</html>
