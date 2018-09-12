<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>確認画面</title>
</head>
<body>
	<p>内容を確認してください</p>
<?php

	$name = $_GET["onamae"];
	if(empty($name)){
		print "名前を入力してください。<BR>\n";
	}else{
		echo "名前：","$name","さん\n";
	}

	print "<BR>\n";

	$comment = $_GET["honbun"];
	if(!empty($comment))
	{
		print "コメント:<br>\n";
		print $comment;
	}else{
		print "コメントを入力してください。";
	}

	print "<BR>\n";

	if(!empty($_GET["onamae"]) and !empty($_GET["honbun"])){
?>

	<p>これでよろしいですか？</p>
	<FORM method="GET" action="x.php">
	<INPUT type="submit" value="はい">
	<INPUT type="hidden" name="name" value="<?php echo $name; ?>">
	<INPUT type="hidden" name="comment" value="<?PHP echo $comment;?>">
	</FORM>

	<FORM method="GET" action="index.php">
	<INPUT type="submit" value="いいえ">

	<INPUT type="hidden" name="name" value="<?php echo $name; ?>">
	<INPUT type="hidden" name="comment" value="<?PHP echo $comment;?>">
	</FORM>
<?php
}
else
{
?>
	<FORM method="GET" action="index.php">
	<INPUT type="submit" value="戻る">

	<INPUT type="hidden" name="name" value="<?php echo $name; ?>">
	<INPUT type="hidden" name="comment" value="<?PHP echo $comment;?>">
<?php
}
?>
</body>
</html>