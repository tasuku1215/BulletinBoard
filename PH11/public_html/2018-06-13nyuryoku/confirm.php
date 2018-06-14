<?php
require_once './func.php';
$error['name']='';
$error['tel']='';
$error['mail']='';
$error['frag']=0;
$name='';
$tel='';
$mail='';
if(isset($_GET['enter']))
{
  if($_GET['name']=='')
  {
    $error['name']='未入力です';
  }
  else
  {
    $name=h($_GET['name']);
    $error['frag']+=1;
  }
  if($_GET['tel']=='')
  {
    $error['tel']='未入力です';
  }
  else
  {
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
    if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',$_GET['mail']))
    {
      $error['frag']+=1;
    }
    else
    {
      $error['mail']='正しいメールアドレスの形式で入力されていません';
    }
  }
  if($error['frag']==3){
    session_start();
    $_SESSION['name']=$name;
    $_SESSION['tel']=$tel;
    $_SESSION['mail']=$mail;
    header('location:confirm.php');
  }
}
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>php</title>
  <meta name="description" content="ページの内容を記述">
  <meta name="keywords" content="キーワード,カンマで区切り,指定">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/jquery.js" charset="utf-8"></script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <script src="sample.js"></script>
  </head>
  <body>
    <form action="index.php" method="get">
      <table>
        <tr>
          <th>名前</th>
          <td><input type="text" name="name" value="<?php echo $name;?>"></td>
          <td><?php echo $error['name']; ?></td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td><input type="text" name="tel" value="<?php echo $tel;?>"></td>
          <td><?php echo $error['tel']; ?></td>
        </tr>
        <tr>
          <th>メール</th>
          <td><input type="text" name="mail" value="<?php echo $mail;?>"></td>
          <td><?php echo $error['mail']; ?></td>
        </tr>
          <tr>
          <td></td>
          <td><input type="submit" name='enter' value="送信"></td>
        </tr>
      </table>
    </form>
  </body>
</html>