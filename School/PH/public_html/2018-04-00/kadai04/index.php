<?php
/*
クラス記号 ：PH11S723
出席番号   ：34
作成者     ：細見 祐
作成日     ：2017/01/09
仕様       ：一文字掲示板を作る
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <title>welcome</title>
</head>
<body>
  <div id="wrapper">
  <form method="get" action="add.php">
    <input type="submit" name="send" value="投稿する">
  </form>
  <br>
<?php
if(is_readable('data/set.csv'))
{
  $file=fopen('data/set.csv','r');
  $array=file('data/set.csv');
  fclose($file);
  if(!empty($_GET["num"]))
  {
    $file=fopen('data/set.csv','w');
    fwrite($file,$array);
    fclose($file);
  }
}
// IFフラグによって未入力の項目を検知し検知できなかったら書き込み開始
  $if=0;
  if(!empty($_GET["name"])){$name=$_GET["name"];$if++;}
  if(!empty($_GET["comment"])){$comment=$_GET["comment"];$if++;}
  // CSV書き込み処理
  if(is_readable('data/board.csv'))
  {
    $file=fopen('data/board.csv','r');
    $array=file('data/board.csv');
    fclose($file);
    if($if==2)
    {
      $file=fopen('data/board.csv','a');
      // 時間軸指定
      date_default_timezone_set('Asia/Tokyo');
      $time=date("Y/m/d H:i:s");
      fwrite($file,$time."\t".$name."\t".$_GET["number"]."\t".$comment."\n");
      fclose($file);
    }
  }
?>
  </div>
</body>
</html>
