<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row align-items-start">
        <a class="col-md-4 btn btn-default btn-lg" href="/obychenie/yrok-9/index.php">Главная</a>
        <a class="col-md-4 btn btn-default btn-lg" href="/obychenie/yrok-9/gallery.php">Галлерея</a>
        <a class="col-md-4 btn btn-default btn-lg" href="/obychenie/yrok-9/guestBook.php">Гостевая книга</a>
    </div>
    <article>
        <?php foreach ($this->data['about'] as $text): ?>
            <h1><?php echo $text['header']; ?></h1>
            <div><?php echo $text['text']; ?></div>
        <?php endforeach; ?>
    </article>
</div>
</body>
</html>