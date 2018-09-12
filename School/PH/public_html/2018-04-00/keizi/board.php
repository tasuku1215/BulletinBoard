<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <title>welcome</title>
</head>
<body>
<div id="wrapper">
<pre>
<?php
  $if=0;
  if(!empty($_GET["name"])){$name=$_GET["name"];$if++;}
  if(!empty($_GET["comment"])){$comment=$_GET["comment"];$if++;}
  if(is_readable('data/board.csv'))
  {
    $file=fopen('data/board.csv','r');
    $array=file('data/board.csv');
    fclose($file);
    if($if==2)
    {
    $file=fopen('data/board.csv','a');
    fwrite($file,$name."\t".$comment."\n");
    fclose($file);
  }
  $file=fopen('data/board.csv','r');
  $dataArr= array();
  while($res = fgets($file)){
    $tmp = explode("\t",$res);
    $arr = array(
    "name"=>$tmp[0],
    "comment"=>$tmp[1]
    );
    $dataArr[]= $arr;
  }
  foreach( $dataArr as $data )
  {
    date_default_timezone_set('Asia/Tokyo');
    echo "投稿者:".$data["name"]."さん　"."<br>コメント:".$data["comment"]."<hr>";
  }
  fclose($file);
  }
   ?>
 </pre>
  </form>
    <form method="get" action="index.php">
    <input type="hidden" name="name" value="<?PHP if(!empty($_GET["name"])){echo $_GET["name"];}?>">
    <input type="hidden" name="comment" value="<?PHP if(!empty($_GET["comment"])){echo $_GET["comment"];}?>">
    <input type="submit" name="send" value="取り消す">
  </form>
  <div>
  </body>
  </html>
