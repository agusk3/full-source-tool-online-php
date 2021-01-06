<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
header('Content-Type: image/png');
header('Content-disposition: attachment;filename="logo.png"');
//gia tri
$size= 22;
$angel= 0;
$text= $_GET['text'];
$font= 'UVNBanhMi.TTF';
$cao= 80;
$bbox= imagettfbbox($size,$angel,$font,$text);
$rong= $bbox[2] + 30;
$vt  = $bbox[2] -75;
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
$icon = imagecreatefrompng('an.png');
//dinh dang mau sac
$nau = imagecolorallocate($im,255,255,255);
$den = imagecolorallocate($im,51,153,255);

//transparen
 imagesavealpha($im, true);
    //setting completely transparent color
    $transparent = imagecolorallocatealpha($im, 0, 0, 0, 127);
    //filling created image with transparent color
    imagefill($im, 0, 0, $transparent);


imagecopyresized($im,$icon,$vt,15,0,0,38,26,imagesx($icon),imagesy($icon));

// the shadow 
imagefttext($im, $size, 0, 4, 54, $den, $font,$text);
imagefttext($im, $size, 0, 6, 56, $den, $font,$text);
imagefttext($im, $size, 0, 3, 53, $den, $font,$text);
imagefttext($im, $size, 0, 6, 57, $den, $font,$text);

imagefttext($im, $size, 0, 5, 55, $nau, $font,$text);

imagepng($im);
imagedestroy($im);

?>