<?php

require_once('dbc.php');

ini_set('display_errors', "On");

$todos = $_POST;

if(empty($todos['new_todo'])) {
    exit('入力してください');
}

$sql = 'INSERT INTO Todo(content) VALUES (:content)';

$dbh = dbConnect();

try{
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':content', $todos['new_todo'], PDO::PARAM_STR);
    $stmt->execute();
    echo '追加しました';
} catch(PDOException $e){
    exit($e);
}

?>

<a href="/php_practice/Todo/todo.php">一覧へ戻る</a>