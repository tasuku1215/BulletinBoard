<?php
// 変数宣言初期化
$error['name']='';
$error['tel']='';
$error['mail']='';
$error['frag']=0;
$name='';
$tel='';
$mail='';
// もし確認ページから戻ってきたらセッションを初期化する
if(isset($_GET['enter'])&&$_GET['enter']=='戻る')
{
  $name=$_SESSION['name'];
  $tel=$_SESSION['tel'];
  $mail=$_SESSION['mail'];
  $_SESSION = array();
  session_delete();
}
// GET中身があり中身が「確認」なら動かす
if(isset($_GET['enter'])&&$_GET['enter']=='確認')
{
  // 入力された値が存在しなければエラーを出す
  if($_GET['name']=='')
  {
    $error['name']='未入力です';
  }
  else
  {
    // 入っていればフラグを立てる
    $name=h($_GET['name']);
    $error['frag']+=1;
  }
  if($_GET['tel']=='')
  {
    $error['tel']='未入力です';
  }
  else
  {
    // 数値が入っているかチェックをする
    $tel=h($_GET['tel']);
    if(is_numeric($_GET['tel']))
    {
      $len=strlen($_GET['tel']);
      if(9<=$len && $len<=12)
      {
        $error['frag']+=1;
      }
      else
      {
        $error['tel']='正常な桁数を入力してください';
      }
    }
    else
    {
      $error['tel']='電話番号を入力してください';
    }
  }
  if($_GET['mail']=='')
  {
    $error['mail']='未入力です';
  }
  else
  {
    $mail=h($_GET['mail']);
    // メールアドレスが入っているかチェックする
    if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',$_GET['mail']))
    {
      $error['frag']+=1;
    }
    else
    {
      $error['mail']='正しいメールアドレスの形式で入力されていません';
    }
  }
  // エラーが一つも無ければセッションに値を保存して次のページ（entry.php）に飛ばす
  if($error['frag']==3){
    $_SESSION['name']=$name;
    $_SESSION['tel']=$tel;
    $_SESSION['mail']=$mail;
    header('location:index.php?enter=確認');
  }
}
?>