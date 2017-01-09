<?php

require __DIR__ . '/../autoload.php';

$path = __DIR__ . '/../upload';
$field = 'img';

$uploader = new \App\Classes\Models\ImageUploader($field);
$uploader->upload($path);

header('Location: /obychenie/yrok-9/admin/gallery.php');
die();