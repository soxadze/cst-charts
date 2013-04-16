<?php

$image = imagecreatetruecolor(600, 400);

$red = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 150, 55);
$blue = imagecolorallocate($image, 0, 3, 190);
$gray = imagecolorallocate($image, 120, 110, 110);

imagefilledarc($image, 300, 200, 300, 150, 320, 20, $red, IMG_ARC_PIE);
imagefilledarc($image, 300, 200, 300, 150, 260, 320, $blue, IMG_ARC_PIE);
imagefilledarc($image, 300, 200, 300, 150, 70, 260, $green, IMG_ARC_PIE);
imagefilledarc($image, 300, 200, 300, 150, 20, 70, $gray, IMG_ARC_PIE);

header("Content-type: image/png");
imagepng($image);

