<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error Page</title>
</head>
<body>
<h2>{{ title ? title : ex.getMessage() }}</h2>
<table border="1" cellpadding="5">
    <tr>
        <td>Сообщение</td>
        <td>{{ ex.getMessage() }}</td>
    </tr>
    <tr>
        <td>Код ошибки</td>
        <td>{{ ex.getCode() }}</td>
    </tr>
    <tr>
        <td>Файл</td>
        <td>{{ ex.getFile() }}</td>
    </tr>
    <tr>
        <td>Строка</td>
        <td>{{ ex.getLine() }}</td>
    </tr>
     {% if sql %}
        <tr>
            <td>Запрос</td>
            <td>{{ sql }}</td>
        </tr>
    {% endif %}
</table>
</body>
</html>