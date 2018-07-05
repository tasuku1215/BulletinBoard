<?php
$error='';
if(isset($_GET['name']))
{
  $name=$_GET['name'];
}
else
{
  if(isset($_GET['enter'])){
    
  }else{
    $name='';
  }
}
if(isset($_GET['tel']))
{
  $tel=$_GET['tel'];
}
else
{
  $tel='';
}
if(isset($_GET['mail']))
{
  $mail=$_GET['mail'];
}
else
{
  $mail='';
}
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>php</title>
 </head>
 <body>
  <form action="index.php" method="get">
  <table>
  <tr>
      <th>名前</th>
      <td><input type="text" name="name" value="<?php echo $name;?>"></td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td><input type="text" name="tel" value="<?php echo $tel;?>"></td>
    </tr>
    <tr>
      <th>メール</th>
      <td><input type="text" name="mail" value="<?php echo $mail;?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name='enter' value="送信"></td>
    </tr>
  </table>
  </form>
 </body>
</html>
