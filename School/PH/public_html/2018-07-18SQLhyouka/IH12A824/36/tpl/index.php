<?php
// ヘッダーHTML呼び出し
  require_once './tpl/header.html';
?>
<form action="./index.php" method="post"
enctype='multipart/form-data'>
ニックネーム<input type="text" name="name">
ジャンル
<select name="category">
<option value="映画">映画</option>
<option value="本">本</option>
<option value="音楽">音楽</option>
</select>
<br>
メッセージ<textarea name="msg" cols="50" rows="10"></textarea>
<br>
画像 <input type='file' name='up_file'>
<input type="submit" name="enter" value="投稿">
<hr>
ジャンル選択
<select name="category_search">
<option value="">検索ジャンル</option>
<option value="映画">映画</option>
<option value="本">本</option>
<option value="音楽">音楽</option>
</select>
<input type="submit" name="enter" value="検索">
</form>
<?php
  foreach($t_post as $val){
    echo $val['id'];
    ?> ニックネーム: <?php
    echo $val['name'];
    ?> <?php
    echo $val['post_date'];
    ?> <a href="./index.php?del=<?php echo $val['id'];?>">削除</a><br><br><img src="<?php echo UPLOAD_PATH.$val['id']; ?>.jpg" width="400"><?php
    ?><br><br><?php
    echo $val['msg'];
    ?><br><br><?php
  }
  // フッターHTML呼び出し
  require_once './tpl/footer.html';
?>