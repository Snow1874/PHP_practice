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
    <table>
        <?php foreach($todoData as $todo): ?>
        <tr>
            <th><p>・<?php echo $todo['content']; ?></p></th>
            <th><a href="/php_practice/Todo/todo_delete.php?id=<?php echo $todo['id'] ?>">削除</a></th>
        </tr>
        <?php endforeach; ?>
    </table>
    
    
    
</body>
</html>