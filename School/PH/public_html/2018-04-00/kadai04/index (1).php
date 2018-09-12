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
  <form method="get" action="menu.php">
    <input type="submit" name="send" value="メニュー">
  </form>
<?php
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
      fwrite($file,$time."\t".$name."\t".$comment."\n");
      fclose($file);
    }
    // CSV読み込み処理
    $file=fopen('data/board.csv','r');
    $dataArr= array();
    while($res = fgets($file)){
      // 書き込み時に区切り文字に指定したタブを基準に配列に分解
      $tmp = explode("\t",$res);
      // 分解した配列に名前をつけて配列化
      $arr = array("time"=>$tmp[0],"name"=>$tmp[1],"comment"=>$tmp[2]);
      // 配列を配列に格納
      $dataArr[]= $arr;
    }
    echo "<hr>";
    // 格納した配列を一つづつ取り出し表示する
    foreach( array_reverse($dataArr) as $data )
    {
      echo "<pre>".$data["time"]."\n投稿者:".$data["name"]."さん　"."\nコメント:".$data["comment"]."</pre><hr>";
    }
  }
  // ページのURLを取得
  $url=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  // URLとGET部分に分ける
  $url = parse_url($url);
  // 今のURLとGET付きのURLの比較をして一緒なら実行しない
  if(strcmp($url["path"],$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]))
  {
    // GETがついていないURLに飛ぶ
    http_response_code( 301 ) ;
  	header( "Location:http://".$url["path"]);
    exit ;
  }
?>
  </div>
</body>
</html>
