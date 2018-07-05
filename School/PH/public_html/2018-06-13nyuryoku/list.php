<?php
// ファンクション呼び出し
require_once './func.php';
// セッションスタート
session_start();
$csv='./csv/data.csv';
// CSVの中身を読み出して2次元配列に入れる
$fp=fopen($csv,'r');
if (!$fp)
{
  $error[]= 'ユーザーデータファイルは読み込み可能状態ではありません';
}
if(flock($fp,LOCK_EX))
{
  $usr_list=array();
  while($usr=fgets($fp))
  {
    $usr_list[]=explode(',',$usr);
  }
  flock($fp,LOCK_UN);
}
else
{
  $error[]= 'ユーザーデータファイルは読み込み可能状態ではありません';
}
fclose($fp);
// もし入力情報が入ったセッションがあればCSVに書き込む
if(!empty($_SESSION))
{
  $fp=fopen($csv,'a');
  if (!$fp)
  {
    $error[]= 'ユーザーデータファイルは読み込み可能状態ではありません';
  }
  if(flock($fp,LOCK_EX))
  {
    // ユーザーデータファイルにIDをつけるアルゴリズムはMAX＋１
    if(isset($usr_list[0]))
    {
      $max=0;
      for($i=0;$i<count($usr_list);$i++)
      {
        if($max<$usr_list[$i][0])
        {
          $max=$usr_list[$i][0];
        }
      }
      $max+=1;
      $str=$max.','.$_SESSION['name'].','.$_SESSION['tel'].','.$_SESSION['mail']."\n";
      fwrite($fp,$str);
      $str=explode(',',$str);
    }
    else
    {
      $str='1,'.$_SESSION['name'].','.$_SESSION['tel'].','.$_SESSION['mail']."\n";
      fwrite($fp,$str);
      $str=explode(',',$str);
    }
    flock($fp,LOCK_UN);
    // 書き込みが終わったあとセッションを消す
    $_SESSION = array();
    if(isset($_COOKIE[SESSION_name()])){
      setcookie(session_name(),'',time()-42000);
    }
    session_destroy();
  }
  else
  {
    $error[]= 'ユーザーデータファイルは使用されています';
  }
  fclose($fp);
}
// HTMLテンプレート呼び出し
require_once './html.html';
?>
  <?php
  if(isset($error))
  {
    foreach($error as $error)
    {
      ?>
      <p>
      <?php echo $error;?>
      </p>
      <?php
    }
  }
  ?>
  <table>
  <tr>
    <th>ユーザーID</th>
    <th>ユーザーネーム</th>
    <th>電話番号</th>
    <th>メールアドレス</th>
  </tr>
  <?php
  foreach($usr_list as $usr)
  {
    ?>
    <tr>
      <td>
        <?php echo $usr[0];?>
      </td>
      <td>
        <?php echo $usr[1];?>
      </td>
      <td>
        <?php echo $usr[2];?>
      </td>
      <td>
        <?php echo $usr[3];?>
      </td>
    </tr>
    <?php
  }
?>
<?php
if(isset($str))
{
  ?>
    <tr>
      <td>
        <?php echo $str[0];?>
      </td>
      <td>
        <?php echo $str[1];?>
      </td>
      <td>
        <?php echo $str[2];?>
      </td>
      <td>
        <?php echo $str[3];?>
      </td>
    </tr>
<?php }?>
      <tr>
        <td></td>
        <td><a href="./entry.php">登録する</a></td>
      </tr>
    </table>
  </body>
</html>