<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>GETメソッド</h2>
    <form action="form_get.php" method="GET">
        <p>名前</p>
        <input type="text" name="name">
        <input type="submit">
    </form>

    <h2>POSTメソッド</h2>
    <form action="form_post.php" method="POST">
        <p>年齢</p>
        <input type="text" name="age">
        <input type="submit">
    </form>
</body>
</html>