<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Template</title>
</head>
<body>
<p align="right"><a href="/AdminPanel/">Админ Панель</a></p>
<hr>
<?php

foreach ($articles as $article) :
    ?>
    <h2>
        <a href="/?ctrl=article&act=action&id=<?php echo $article->id; ?>">
            <?php echo $article->title; ?>
        </a>
    </h2>
    <p><?php echo $article->body; ?></p>
    <p>
        <?php
        if (isset($article->author)) {
            echo 'Автор: ' . $article->author->name;
        }
        ?>
    </p>
    <?php
endforeach;
?>
</body>
</html>