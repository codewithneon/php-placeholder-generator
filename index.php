<?php
$img = imagecreate(180, 180);
$bg = imagecolorallocate($img, 128, 128, 128);
$color = imagecolorallocate($img, 255, 255, 255);
imagefilledrectangle($img, 0, 0, 0, 0, $bg);
imagettftext($img,80,0,50,125,$color,__DIR__.'/BebasNeue.ttf','Fa');
header('Content-type: image/png');
imagepng($img); imagedestroy($img);
