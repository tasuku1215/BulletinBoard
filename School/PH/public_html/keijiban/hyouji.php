<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
</head>

<body>

    <?php
    	date_default_timezone_set('Asia/Tokyo');
    	$firstname = $_GET["firstname"];	//名前


    	$date = date("Y/m/d H:i:s"); //日付
    	$honbun = $_GET["honbun"]; //コメント

    	$fp = fopen('data/data.csv','a');
    	fwrite($fp,$firstname."さん");
    	fwrite($fp,$date."\n");
    	fwrite($fp,$honbun."\n");
    	fclose($fp);
    ?>

    <?php
    	$data = file("data/data.csv");
    	for($i = 0; $i < sizeof($data); $i++){
    	print "${data[$i]}<br>\n";
    }
    ?>

    <form action="index.php" method="get">
      <input type="submit" value="戻る" name="back">
    </form>

  </body>
</HTML>
