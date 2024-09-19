<?php
if (isset($_POST['submit'])) {
    $font = realpath('Roboto-Medium.ttf');
    $img = imagecreatefromjpeg('empty_certificate.jpg');
    $color = imagecolorallocate($img, 51, 51, 102);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $instructor = "John Doe";
    imagefttext($img, 120, 0, 200, 850, $color, $font, $name);
    imagefttext($img, 30, 0, 287, 1140, $color, $font, $instructor);
    $dir = "certificates";
    $filename = "$dir/" . basename($name) . ".jpg";
    imagejpeg($img, $filename);
    imagedestroy($img);
}
header('Location: index.php');
exit();