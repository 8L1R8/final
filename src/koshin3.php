<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>楽曲更新</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>楽曲更新</h2>
<a href="menu.php">メニューに戻る</a>
<hr>

更新しました。<br>



</body>
</html>


<!--
$sql=$pdo->prepare('INSERT INTO music(song_name,singer) VALUES(?,?)');
$sql->execute([$_POST['song'],$_POST['singer']]);
$pdo = null;
echo '登録してDB切断しました。'


$sql=$pdo->prepare('INSERT INTO music(song_name,singer) VALUES(?,?)');
$sql->bindValue(1,$_POST['song'],PDO::PARAM_STR);
$sql->bindValue(2,$_POST['singer'],PDO::PARAM_STR);
$sql->execute();


$sql=$pdo->prepare('UPDATE music SET singer=? WHERE song_id=?');
$sql->bindValue(1,$_POST['singer'],PDO::PARAM_STR);
$sql->bindValue(2,5,PDO::PARAM_STR);
$sql->execute();

$sql=$pdo->prepare('UPDATE music SET singer=? WHERE song_id=?');
$sql->execute([$_POST['singer'],5]);



$sql=$pdo->prepare('DELETE FROM music WHERE song_id=?');
$sql->execute([6]);
$pdo = null;


$sql=$pdo->prepare('DELETE FROM music WHERE song_id=?');
$sql->bindValue(1,7,PDO::PARAM_STR);
$sql->execute();
-->