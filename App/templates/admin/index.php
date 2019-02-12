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
<ul>
    <?php

    foreach ($articles as $article) :
        ?>
        <li>
            <a href="/AdminPanel/article.php?id=<?php echo $article->id; ?>">
                <?php echo $article->title; ?>
            </a>
        </li>
        <?php
    endforeach;
    ?>
</ul>
<hr>
<p align="center">
    <a href="/AdminPanel/create.php">Добавить статью</a>
</p>
</body>
</html>