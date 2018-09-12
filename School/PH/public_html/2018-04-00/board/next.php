
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>kadai04</title>
		
	</head>
	<body>
        <h1>確認画面</h1>
        <p>名前：<?php echo $_GET["name"];?></p>
        <p>コメント：<?php echo $_GET["kome"];?></p>
        <p>上記の書き込みでよろしいですか？</p>
        <form method="get" action="index.php">
        

        <input type="submit" name="1"value="OK">
        <input type="submit" name="2"value="NO">
        <input type="hidden" name="name" value="<?php echo $_GET["name"];?>">
        <input type="hidden" name="kome" value="<?php echo $_GET["kome"];?>">
        <input type="hidden" name="token" value="<?php echo $_GET["token"];?>">
        
        
        </form>
	</body>
</html>