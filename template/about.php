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
<?php foreach ($this->data['about'] as $text): ?>
    <form method="post" action="/obychenie/yrok-9/admin/editAbout.php">
        <p><input type="text" size="40" name="header" value="<?php echo $text['header']; ?>"></p>
        <p><textarea name="text" cols="50" rows="3"><?php echo $text['text']; ?></textarea></p>
        <input type="submit">
    </form>
<?php endforeach; ?>
</body>
</html>
