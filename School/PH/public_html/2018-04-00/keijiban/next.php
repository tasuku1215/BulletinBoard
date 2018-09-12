<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
</head>

<body>

    <?php
    $val6="";

    $val=$_GET["firstname"];
    if(empty($_GET['firstname'])){
      echo 'ユーザー名を入力してください。';
    }
    else{
      echo "ユーザー名：";
      echo "$val";
    }
    echo "<br>\n";



    $val6=$_GET["honbun"];
    if(empty($_GET["honbun"])){
      echo '何か入力してください。';
    }
    else{
      echo "コメント：";
      echo "$val6";
    }
    echo "<br>\n";
    ?>

    <?php
    	if(isset ($_GET["firstname"]) && ($_GET["honbun"])){
    	echo"<form action='hyouji.php' method='get'>\n";
    	echo"<input type='hidden' name='firstname' value='"."$val"."'>\n";
    	echo"<input type='hidden' name='honbun' value='"."$val6"."'>\n";
    	echo"<input type='submit' value = '送 信'>\n";
    	}
    ?>

    <form action="" method="get">
      <input type="hidden" name="firstname" value="<?php echo "$val"; ?>">
      <input type="hidden" name="honbun" value="<?php echo "$val6"; ?>">
      <input type="submit" value="戻る" name="back">
    </form>
  </body>
</HTML>
