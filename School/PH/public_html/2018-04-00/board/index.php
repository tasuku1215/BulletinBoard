
<?php

    $dataFile = 'dds.dat';
    define('LIMIT_SEC', 5);                  // 連続投稿を禁止する秒数

    //CSRF対策

    session_start();

    function setToken(){

        $token = sha1(uniqid(mt_rand(),true));//推測されにくい文字列を作る
        $_SESSION['token']=$token;

    }

    function checkToken(){
        //トークンがあっているか調べる。
        if(empty($_SESSION['token']) || ($_SESSION['token'] != $_GET['token'])){
            echo "不正なPOSTが行われました";
            exit;
        }

    }

    function h($s){

        return htmlspecialchars($s, ENT_QUOTES,'UTF-8');
    }
    
    if( !empty($_GET["1"])&& $_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['name']) && isset($_GET['kome'])){

        checkToken();

        $name = trim($_GET['name']);//空白を消す
        $kome = trim($_GET['kome']);

        if($kome !==''){
            
            $name = ($name ==='')? '名無し' : $name;

            $kome = str_replace("\t",' ', $kome);
            $name = str_replace("\t",' ', $name);

            date_default_timezone_set('Asia/Tokyo');
            $postdAt = date('Y/m/d H:i:s');

            $newData = $name . "\t" . $kome . "\t". $postdAt . "\n";            

            $fp = fopen($dataFile,'a');
            fwrite($fp,$newData);
            fclose($fp);
            
            

        }
    }else{
        setToken();
    }
    
    $posts = file($dataFile, FILE_IGNORE_NEW_LINES);

    $posts= array_reverse($posts);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<title>入力＆確認画面</title>
		
	</head>
	<body>
        <div id="zenb">
            <div id="heddo">
                <h1>一行掲示板</h1>
                <div style="display:inline-flex">
                    <form name="form" method="get" action="menu.php">
                        <input id="#submit_button"type="submit" value="メニュー画面へ" >
                    </form>
                    <form name="form" method="get" action="zen.php">
                        <input id="#submit_button"type="submit" value="全件表示">
                    </form>
                    <form name="form" method="get" action="menu.php">
                        <input id="#submit_button"type="submit" name="1"value="全件消去" >
                    </form>
                </div>
            </div>
            <div id="main">
                <div id="text">
                <form name="form" method="get" action="next.php">

                    <p><input type="text" name="name" value="" placeholder="uname" size="20"></p>
                    <p><input type="text" name="kome" value="" placeholder="messege" size="30"></p>
                    
                    <input type="submit" value="投稿">
                    <input type="hidden" name="token" value="<?php echo h($_SESSION['token']);?>">
                    
                    </form>
                </div>
                <div id="toukou">
                    <div id="dai">
                    <h2>投稿一覧（<?php echo count($posts);?>件）</h2>
                    </div>
                    <div id="date">
                        <ul>
                            <?php if (!empty($posts)):?> 
                            <?php foreach($posts as $post) :
                            list($name,$kome,$postedAt) = explode("\t",$post);?>
                                <li><?php echo h($name),h($postedAt)."<br>".h($kome); ?></li>
                            <?php endforeach?>
                            <?php else :?>
                                <li>まだ投稿はありません</li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>