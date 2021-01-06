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
$font= 'UVNVan.TTF';
$cao= 60;
$bbox= imagettfbbox($size,$angel,$font,$text);
$rong= $bbox[2] + 55;
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
$may = imagecreatefrompng('may.png');

$icon = imagecreatefrompng('avatar.png');
//dinh dang mau sac
$nau = imagecolorallocate($im,255,255,255);
$den = imagecolorallocate($im,255,55,255);

//transparen
 imagesavealpha($im, true);
    //setting completely transparent color
    $transparent = imagecolorallocatealpha($im, 0, 0, 0, 127);
    //filling created image with transparent color
    imagefill($im, 0, 0, $transparent);


imagecopy($im,$may,$rong/3,5,0,0,imagesx($may),imagesy($may));
imagecopy($im,$icon,0,12,0,0,imagesx($icon),imagesy($icon));


// the shadow 
imagefttext($im, $size, 0, 42, 52, $den, $font,$text);
imagefttext($im, $size, 0, 41, 54, $den, $font,$text);
imagefttext($im, $size, 0, 44, 54, $den, $font,$text);
imagefttext($im, $size, 0, 41, 51, $den, $font,$text);
imagefttext($im, $size, 0, 44, 55, $den, $font,$text);

imagefttext($im, $size, 0, 43, 53, $nau, $font,$text);

imagepng($im);
imagedestroy($im);

?>