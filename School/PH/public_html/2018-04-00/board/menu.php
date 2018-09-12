<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/menu.css" rel="stylesheet" type="text/css">
        <title>メニュー画面</title>
        
    </head>
    <body>
        <div id="zenb">
            <div id="heddo">
                <h1>メニュー画面</h1>
            </div>
            <div id="main">
                <form name="form" method="get" action="index.php">
                    <input id="#submit_button"type="submit" value="新規投稿" >
                </form>
                <form name="form" method="get" action="zen.php">
                    <input id="#submit_button"type="submit" value="全件表示">
                </form>
                <form name="form" method="get" action="menu.php">
                    <input id="#submit_button"type="submit" name="1"value="全件消去" >
                </form>
            </div>
        
        <div id="messe">
        <?php
        if(!empty($_GET["1"])){
            $file = 'dds.dat';
            
            echo "<p>";
            //ファイルの内容を消去する
            $fp = fopen($file,'w');
            fwrite($fp,"");
            fclose($fp);
            if (isset($fp)){
            echo $file.'の削除に成功しました。';
            }else{
            echo $file.'の削除に失敗しました。';

            echo "</p>";
            }
        }
        ?>
        </div>
        </div>
    </body>
</html>