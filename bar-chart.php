<?php
$image = imagecreatetruecolor(300, 230);
$back   = imagecolorallocatealpha($image, 255, 255, 255, 128);
imagecolortransparent($image, $back);

$red = imagecolorallocate($image, 255, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate ($image, 255,0,255);

imagefilledrectangle($image, 40, 130, 70, 225, $red);
imagefilledrectangle($image, 71, 180, 101, 225, $blue);
imagefilledrectangle($image, 102, 80, 132, 225, $yellow);

imagefilledrectangle($image, 182, 70, 212, 225, $red);
imagefilledrectangle($image, 213, 105, 243, 225, $blue);
imagefilledrectangle($image, 244, 20, 274, 225, $yellow);

imageline ($image, 300, 226, 20, 226, $black);
imageline ($image, 20, 10, 20, 226, $black);

header("Content-type: image/png");
imagepng($image);