<?php
function validate($data){
  $errors=array(
    'name' => '',
    'tel' => '',
    'email' => ''
  );
  $error_cnt=0;
  if(empty($data['name'])){
    $errors['name'] = 'ERROR!!氏名が未入力です。';
    $error_cnt+=1;
  }

  if(empty($data['tel'])){
    $errors['tel'] = 'ERROR!!TELが未入力です。';
    $error_cnt+=1;
  }elseif(mb_strlen($data['tel']) < 9){
    $errors['tel'] = 'ERROR!!電話番号は9~12で入力してください。';
    $error_cnt+=1;
  }

  if(empty($data['email'])){
    $errors['email'] = 'ERROR!!メールアドレスが未入力です。';
    $error_cnt+=1;
  }elseif(strpos($data['email'],'@') === false){
    $errors['email'] = 'ERROR!!正しい形式で入力してください。';
    $error_cnt+=1;
  }

  if($error_cnt != 0){
    return $errors;
  }else{
    session_start();
    $_SESSION['name'] = $data['name'];
    $_SESSION['tel'] = $data['tel'];
    $_SESSION['email'] = $data['email'];

    header('location:confilm.php');
  }

}
 ?>
