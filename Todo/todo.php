<?php

require_once('dbc.php');
$todoData = getTodo();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>
<body>
    <h2>Todoリスト</h2>
    <h3><a href="/php_practice/Todo/form.php">新規作成</a></h3>
    <?php foreach($todoData as $todo): ?>
    <p>・<?php echo $todo['content']; ?></p>
    <?php endforeach; ?>
</body>
</html>