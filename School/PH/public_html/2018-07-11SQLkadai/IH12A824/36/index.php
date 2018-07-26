<?php
  // コンフィグファイル呼び出し
  require_once './../../config.php';
  // SQL接続
  $link=mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($link,'utf8');
  // 全件取得SQL実行
  $sql="select * from sample";
  $result=mysqli_query($link,$sql);
  // 初期化
  $msg='';
  $sql_data=array(['id'=>'','name'=>'','age'=>'']);
  // DBから取得したデーターを二次元連想配列に入れる
  for($i=0;$row=mysqli_fetch_assoc($result);$i++){
    $sql_data[$i]['id']=$row['id'];
    $sql_data[$i]['name']=$row['name'];
    $sql_data[$i]['age']=$row['age'];
  }
  mysqli_close($link);
  // テンプレート呼び出し
  require_once './tpl/index.php';
?>