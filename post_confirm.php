// POSTを受け取る
// POSTの場合はパスワードも送ってみる。
<?php
// var_dump($_GET);
$name = $_POST['name'];
$mail = $_POST['mail'];

//ファイル書き込み
file_put_contents('data/data.txt',$name.$mail,FILE_APPEND)

?>



<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?= $name ?>
    EMAIL：<?= $mail ?>
    パスワード：
</body>

</html>
