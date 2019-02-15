<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<h2>Добавьте новость</h2>
<form action="/Admin/Save/action" method="post">
    <p><input type="text" name="title" size="70" " placeholder="Заголовок статьи" required></p>
    <p><textarea cols="80" rows="20" name="body" placeholder="Текст статьи" required></textarea></p>
    <button type="submit">Добавить</button>
</form>
</body>
</html>