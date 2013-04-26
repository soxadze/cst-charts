<?php

$image = imagecreatetruecolor(300, 300);
$back   = imagecolorallocatealpha($image, 255, 255, 255, 128);
// imagefilledrectangle($image, 0, 0, $width - 1, $height - 1, $back);
imagecolortransparent($image, $back);

$red = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 150, 55);
$blue = imagecolorallocate($image, 0, 3, 190);
$gray = imagecolorallocate($image, 120, 110, 110);

imagefilledarc($image, 150, 150, 300, 300, 320, 20, $red, IMG_ARC_PIE);
imagefilledarc($image, 150, 150, 300, 300, 260, 320, $blue, IMG_ARC_PIE);
imagefilledarc($image, 150, 150, 300, 300, 110, 260, $green, IMG_ARC_PIE);
imagefilledarc($image, 150, 150, 300, 300, 20, 110, $gray, IMG_ARC_PIE);

header("Content-type: image/png");
imagepng($image);

