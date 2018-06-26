ファイル受信側
<?php
echo $_FILES['up_file']['name'];

move.uplcaded_file($_FILES['up_file']['tmp_name'],'./img/'.$_FILES['up_file']['name']);
?>
ファイル送信側
<form method="post" action="  " enctype="multipart/form_data">
<input type="file" name="up_file">
<input type="submit" value="アップロード">
</form>

$_FILES['~']['name']→ファイル名
['type']→mimeタイプ
['size']→ファイルサイズ
['tmp_name']→一時保存先のパス
['error']→エラーコード
(正常時は0)
