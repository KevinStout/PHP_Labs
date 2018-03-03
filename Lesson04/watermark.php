<?php
header('Content-Type:image/png');

$im = imagecreatefromjpeg('media/bike.jpg');

$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);

$text = 'Live Free, Ride Hard, Get Stoked!';

$font = 'fonts/chiller.ttf';

imagettftext($im, 90,45,75,905,$grey,$font,$text);

imagettftext($im, 90,45,80,905,$white,$font,$text);

imagepng($im);

imagedestroy($im);
?>