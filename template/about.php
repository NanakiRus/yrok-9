<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div><a href="/obychenie/yrok-9/admin/index.php">Назад</a></div>
<ul>
    <li><a href="/obychenie/yrok-9/index.php">Главная</a></li>
    <li><a href="/obychenie/yrok-9/gallery.php">Галлерея</a></li>
    <li><a href="/obychenie/yrok-9/guestBook.php">Гостевая книга</a></li>
</ul>
<?php foreach ($this->data['about'] as $text): ?>
    <h1><?php echo $text['header']; ?></h1>
    <div><?php echo $text['text']; ?></div>
<?php endforeach; ?>
</body>
</html>