<?php
include("functions.php");



//2. DB接続します(エラー処理追加)
$pdo = db_con();

$pw = password_hash("test99", PASSWORD_DEFAULT);

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table(name, lid, lpw,kanri_flg, life_flg )VALUES(:a1, :a2, :a3, :a4, :a5)");
$stmt->bindValue(':a1', "yamazaki",  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', "test99",  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $pw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', 1, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', 0, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();


?>
