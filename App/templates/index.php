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
<p align="right"><a href="/Admin/Index/action">Админ Панель</a></p>
<hr>
{% for article in articles %}
<h2>
    <a href="/?ctrl=article&act=action&id={{ article.id }}">
        {{ article.title }}
    </a>
</h2>
<p>{{ article.body }}</p>
<p>
    {% if article.author %}
    Автор: {{ article.author.name }}
    {% endif %}
</p>
{% endfor %}
</body>
</html>