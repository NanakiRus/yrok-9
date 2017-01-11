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
<?php foreach ($this->data['record'] as $record) : ?>
    <article>
        <h2><?php echo $record->getText()['author'];?></h2>
        <p><?php echo $record->getText()['text'];?></p>
        <p><i><?php echo $record->getText()['date'];?></i></p>
    </article>
<?php endforeach; ?>
<form method="post" action="/obychenie/yrok-9/addGuestBookRecord.php">
    <p><input type="text" size="40" name="author" value=""></p>
    <p><textarea name="text" cols="50" rows="3"></textarea></p>
    <input type="submit">
</form>
</body>
</html>