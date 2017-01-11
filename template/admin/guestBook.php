<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row align-items-start">
        <a class="col-md-4 btn btn-default btn-lg"
           href="/obychenie/yrok-9/admin/index.php">Назад</a>
    </div>
    <br/>
    <article>
        <?php foreach ($this->data['record'] as $record) : ?>
            <blockquote>
                <h2><?php echo $record->getText()['author']; ?></h2>
                <p><?php echo $record->getText()['text']; ?></p>
                <footer><?php echo $record->getText()['date']; ?></footer>
                <a class="btn btn-default"
                   href="/obychenie/yrok-9/admin/deleteGuestBookRecord.php?id=<?php echo $record->getText()['id']; ?>">Удалить
                    запись</a>
            </blockquote>
        <?php endforeach; ?>
    </article>
</div>
</body>
</html>