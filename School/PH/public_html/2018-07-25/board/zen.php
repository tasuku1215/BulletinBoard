
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title>全部表示</title>
        
    </head>
    <body>
        <?php
            if(!empty($_GET["psh"])){
                if(isset($_GET["psh"])){
                    $min = $_GET["psh"];
                    if($min <= 0){
                        $min=1;
                    }
                }else{
                    $min=1;
                }
            }else{
                $min=1;
            }
            //$min=5;
            $max = $min + 10;
            $dataFile="dds.dat";

            $fp = fopen($dataFile,'r');
            $fval = file($dataFile, FILE_IGNORE_NEW_LINES);
           // $fval = array_reverse($fp);//ファイルを配列に格納
            fclose($fp);
                ?>
                <div id="zenb">
                    <div id="heddo">
                        <h1>全件表示画面</h1>
                        <div style="display:inline-flex">
                            <form name="form" method="get" action="menu.php">
                                <input id="#submit_button"type="submit" value="メニュー画面へ" >
                            </form>
                            <form name="form" method="get" action="index.php">
                                <input id="#submit_button"type="submit" value="新規投稿" >
                            </form>
                            <form name="form" method="get" action="menu.php">
                                <input id="#submit_button"type="submit" name="1"value="全件消去" >
                            </form>
                        </div>
                    </div>
                    <div id="toukou">
                        <div id="date">
                            <h2>全<?php echo count($fval);?>件</h2>
                            <ul>
                            <?php if (!empty($fval)):?> 
                            <?php $cnt=1;?>
                            <?php foreach($fval as $post):?>
                            <?php if($cnt<=$max&&$cnt>=$min):
                                list($name,$kome,$postedAt) = explode("\t",$post);?>
                                <li><?php echo $name ,$postedAt. "<br>".$kome;?></li>
                            <?php endif;
                                $cnt++;
                                endforeach;
                            ?>
                            <?php else :?>
                                <li>まだ投稿はありません</li>
                            <?php endif;?>
                            </ul>
                        </div>
                        <div style="display:inline-flex">
                        <?php if($min > 1):?>
                        <form method="get" action="">
                            <input type="submit" value="戻る">
                            <input type="hidden" name="psh"value="<?php echo $min-10 ?>">
                        </form>
                        <?php endif;?>
                        <?php if($max < count($fval)):?>
                        <form method="get" action="">
                            <input type="submit" value="次へ">
                            <input type="hidden" name="psh"value="<?php echo $min+10 ?>">
                        </form>
                        <?php endif;?>
                    </div>
            </div>
        </div>
    </body>
</html>