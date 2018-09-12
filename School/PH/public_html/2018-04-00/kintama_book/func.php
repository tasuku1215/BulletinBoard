<?php
session_start();
//session破壊関数 destroy
function destroy(){
  $_SESSION = array();
  if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
  }
  session_destroy();
}
//htmlspecialchars関数　h
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, "utf-8");
}

//変数の初期化
$name = $tel = $mail = "";

$errors = array(
  'name'=>'',
  'tel'=>'',
  'mail'=>'',
);

$true_cnt = 0;

//POSTデータ
if(!empty($_POST['input']) || !empty($_POST['back'])){

  //POSTデータを格納
  $name = h($_POST['name']);
  $tel = h($_POST['tel']);
  $mail = h($_POST['mail']);

  // name_validate
  if(strlen($_POST['name']) == 0){
    $errors['name'] = '・氏名を入力してください。';
  }else{
    $true_cnt += 1;
  }

  //tel_validate
  if(strlen($_POST['tel']) == 0){
    $errors['tel'] = '・電話番号を入力してください。';
  }elseif(!preg_match("/^[0-9]+$/", $_POST['tel'])){
    $errors['tel'] = '・電話番号は半角数字で入力してください。';
  }elseif(!preg_match('/^([0-9]{9,12})$/', $_POST['tel'])){
    $errors['tel'] = '・電話番号は9~12桁で入力してください。';
  }else{
    $true_cnt += 1;
  }

  //mail_validate
  if(strlen($_POST['mail']) == 0){
    $errors['mail'] = '・メールアドレスを入力してください。';
  }elseif(strpos($_POST['mail'],'@') === false){
    $errors['mail'] = '・メールアドレスは正しい形式で入力してください。';
  }else{
    $true_cnt += 1;
  }

  //session保存
  if(!empty($_POST['input']) && $true_cnt == 3){
    $_SESSION['name'] = $name;
    $_SESSION['tel'] = $tel;
    $_SESSION['mail'] = $mail;
  }

}
 ?>
