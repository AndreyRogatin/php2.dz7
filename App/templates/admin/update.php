<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<h2>Редактировать новость</h2>
<form action="/Admin/Save/action" method="post">
    <p><input type="text" name="title" size="70" value="<?php echo $article->title; ?>" required></p>
    <p><textarea cols="80" rows="20" name="body" required><?php echo $article->body; ?></textarea></p>
    <input type="hidden" name="id" value="<?php echo $article->id; ?>">
    <button type="submit">Обновить</button>
</form>
</body>
</html>