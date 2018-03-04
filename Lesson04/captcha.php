<?php

header("Content-Type: image/png");
$im = @imagecreate(300, 100)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);

$md5 = md5(rand(0,999)); 

$pass = substr($md5, 10, 5); 

$white = imagecolorallocate($im, 255, 255, 255); 
$black = imagecolorallocate($im, 0, 0, 0); 
$grey = imagecolorallocate($im, 204, 204, 204); 

imagestring($im, 5, 130, 45, $pass, $text_color);

imageline($im, 0, 0, 300, 100, $white);
imageline($im, 0, 100, 300, 0, $white);
imageline($im, 150, 0, 150, 100, $white);

imagepng($im);
imagedestroy($im);
?>