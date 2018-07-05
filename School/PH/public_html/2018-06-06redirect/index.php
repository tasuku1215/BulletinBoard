<?php
$bai='';
if(isset($_GET['nam']))
{
  $bai=$_GET['nam']*10;
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
  <input type="text" name="nam" value="<?php echo $bai;?>">
  <input type="submit" value="10倍プッシュだ！">
  </form>
 </body>
</html>
