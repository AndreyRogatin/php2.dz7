<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
<p align="right"><a href="/">На главную</a></p>
<h2>Админ Панель</h2>
<hr>
<h3>Список статей</h3>
<?php echo $table; ?>
<hr>
<p align="center">
    <a href="/Admin/Create/action">Добавить статью</a>
</p>
</body>
</html>