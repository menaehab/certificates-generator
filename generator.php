<?php
header('Content-Type: image/jpeg');
$font = realpath('Roboto-Medium.ttf');
$img = imagecreatefromjpeg('empty_certificate.jpg');
$img = imagecreatefromjpeg('empty_certificate.jpg');
$color = imagecolorallocate($img, 51, 51, 102);
$name = "Mena Ehab Youssef";
$instructor = "John Doe";
imagefttext($img, 120, 0, 200, 850, $color, $font, $name);
imagefttext($img, 30, 0, 287, 1140, $color, $font, $instructor);
imagejpeg($img,"certificates/".$name.".jpg");
imagejpeg($img);
imagedestroy($img);