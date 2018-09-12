<?php
require_once 'func.php';

//csv表示関数
function index($Request){
  //ファイルオープン
  $fp = @fopen('user.csv' , 'r');
  if(!$fp){
    //オープンの失敗
    echo 'ファイルのオープンに失敗しました。';
    exit;
  }
  //格納する変数の初期化
  $member_list = array();

  if(flock($fp, LOCK_EX)){
    //csvから1行ずつ格納して変数に代入
    while($member = fgets($fp)){
      $member_list[] = explode(',',$member);
    }
    flock($fp, LOCK_UN);

  }else{
    fclose($fp);
    return 'ファイルの読み込みに失敗しました。';
    exit;
  }
  //ファイルクローズ
  fclose($fp);
  return $member_list;
}

//データ追加関数
function add($Request){
  //セッションがない場合の処理
  if(empty($_SESSION)) return '';
  //csvの中の行数を取得
  $count = count(file('user.csv'));

  //追加したいデータを配列に格納
  $member=array();
  //option::id付与
  if($count == 0) $member[] = 1;
  if($count > 0) $member[] = $count+1;

  $member[] = $_SESSION['name'];
  $member[] = $_SESSION['tel'];
  $member[] = $_SESSION['mail'];
  $member = implode(',',$member);
  //ファイルオープン
  $fp = @fopen('user.csv','a');
  if(!$fp){
    //オープンの失敗
    return 'ファイルをオープンできませんでした。';
    exit;
  }
  //データの追加処理 fwrite
  if(flock($fp, LOCK_EX)){
    fwrite($fp, $member . "\n");
    flock($fp , LOCK_UN);
  }else{
    //書き込みの失敗
    return '書き込みに失敗しました';
    exit;
  }
  //ファイルクローズ
  fclose($fp);
  return 'データの登録が完了しました。';
}

if(!empty($_POST['input']) && $true_cnt == 3){
  require_once 'views/confilm.php';
}elseif(!empty($_POST['thanks'])){
  //追加関数の呼び出し
  $msg = add($_SESSION);
  //表示関数の呼び出し
  $member_list = index($_SESSION);
  require_once 'views/thanks.php';
  //sessionの破壊
  destroy($_SESSION);
}else{
  require_once 'views/input.php';
}
 ?>
