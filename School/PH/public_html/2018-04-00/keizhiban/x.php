<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>一行掲示板</title>
</head>
<body>
<h1>投稿一覧</h1>
<hr>

<?php
if(!empty($_GET)){
$name = $_GET['name'];
$comment =$_GET['comment'];
$time = date("Y/m/d H:i:s");
$fp = fopen('data.csv', 'a');
fwrite($fp,$name."\t".$time."\t".$comment."\n");
fclose($fp);
}

$fp = fopen("data.csv","r");

$dataArr= array();

while($res = fgets($fp)){
	$tmp = explode("\t",$res);
	$arr = array(
	"name"=>$tmp[0],
	"time"=>$tmp[1]
	"comment"=>$tmp[2]
	);
	$dataArr[]= $arr;
}

foreach( $dataArr as $data ):
?>
<p>
<?php 
	date_default_timezone_set('Asia/Tokyo');
	echo "投稿者:".$data["name"]."さん　".$data["time"]."<br>コメント:".$data["comment"]."<hr>"; 
	
?>
</p>
<?php
	endforeach;
?>

</body>
</html>