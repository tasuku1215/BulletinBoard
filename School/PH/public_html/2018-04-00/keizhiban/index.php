<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>一行掲示板</title>
</head>
<body>

<?php
	if(!empty($_GET)){
	$onamae = $_GET["name"];
	$honbun = $_GET["comment"];
	}
?>

<FORM method="GET" action="next.php">

名前:<BR>
<INPUT type="text" name="onamae" value="<?php if(!empty($onamae)){echo $onamae;} ?>">

<BR>

コメント：<BR>
<TEXTAREA name="honbun" cols="30" rows="5"><?php if(!empty($honbun)){echo $honbun;}?></TEXTAREA>
<BR>
<INPUT type="submit" value="送信">
</form>
</body>
</html>