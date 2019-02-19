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
<h2><?php echo $title ?? $ex->getMessage(); ?></h2>
<table border="1" cellpadding="5">
    <tr>
        <td>Сообщение</td>
        <td><?php echo $ex->getMessage(); ?></td>
    </tr>
    <tr>
        <td>Код ошибки</td>
        <td><?php echo $ex->getCode(); ?></td>
    </tr>
    <tr>
        <td>Файл</td>
        <td><?php echo $ex->getFile(); ?></td>
    </tr>
    <tr>
        <td>Строка</td>
        <td><?php echo $ex->getLine(); ?></td>
    </tr>
    <?php if (!empty($sql)) : ?>
        <tr>
            <td>Запрос</td>
            <td><?php echo $sql; ?></td>
        </tr>
    <?php endif; ?>
</table>
</body>
</html>