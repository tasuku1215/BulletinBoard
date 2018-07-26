<?php
  // コンフィグファイル呼び出し
  require_once './../../config.php';
  // 送られてきたデータがあればDBに入れて一覧ページに飛ぶ
if(!empty($_GET['name'])&&!empty($_GET['age'])){
  $link=mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($link,'utf8');
  $sql="insert into sample(name,age) values('".$_GET['name']."',".$_GET['age'].");";
  mysqli_query($link,$sql);
  mysqli_close($link);
  header('location:index.php');
}
require_once './tpl/entry.php';
?>