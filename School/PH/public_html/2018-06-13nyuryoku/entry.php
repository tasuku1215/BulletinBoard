<?php
// ファンクション呼び出し
require_once './func.php';
// セッションスタート
session_start();
// 変数宣言初期化
$error['name']='';
$error['tel']='';
$error['mail']='';
$error['frag']=0;
$name='';
$tel='';
$mail='';
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
    header('location:confirm.php');
  }
}
// もし確認ページから戻ってきたらセッションを初期化する
if(isset($_GET['re']))
{
  $name=$_SESSION['name'];
  $tel=$_SESSION['tel'];
  $mail=$_SESSION['mail'];
  $_SESSION = array();
  if(isset($_COOKIE[SESSION_name()])){
    setcookie(session_name(),'',time()-42000);
  }
  session_destroy();
}
// HTMLテンプレート呼び出し
require_once './html.html';
?>
<!-- 登録フォーム -->
    <form action="entry.php" method="get">
      <table>
        <tr>
          <th>名前</th>
          <!-- ユーザーが入力した値があれば初期値として表示 -->
          <td><input type="text" name="name" value="<?php echo $name;?>"></td>
          <?php echo $error['name']; ?>
        </tr>
        <tr>
          <th>電話番号</th>
          <td><input type="text" name="tel" value="<?php echo $tel;?>"></td>
          <?php echo $error['tel']; ?>
        </tr>
        <tr>
          <th>メール</th>
          <td><input type="text" name="mail" value="<?php echo $mail;?>"></td>
          <?php echo $error['mail']; ?>
        </tr>
          <tr>
          <td></td>
          <td><input type="submit" name='enter' value="確認"></td>
        </tr>
      </table>
    </form>
  </body>
</html>