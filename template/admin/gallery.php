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
    <?php foreach ($this->data['gallery'] as $name) : ?>
        <img width="200" src="/obychenie/yrok-9/upload/<?php echo $name; ?>"/>
    <?php endforeach; ?>

    <form method="post" enctype="multipart/form-data" action="/obychenie/yrok-9/admin/galleryUploader.php">
        <input  type="file" name="img">
        <input class="btn btn-default" type="submit">
    </form>
    </article>
</div>
</body>
</html>