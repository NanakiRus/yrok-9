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
<?php foreach ($this->data['gallery'] as $name) : ?>
    <img width="200" src="/obychenie/yrok-9/upload/<?php echo $name; ?>" />
<?php endforeach; ?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit">
</form>
</body>
</html>