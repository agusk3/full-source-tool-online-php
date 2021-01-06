<?php
header('Content-Type: image/png');
//gia tri

/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */

$size= 40;
$angel= 0;
$text = 'New Year';
$f = $_GET['font'];
if($f == 1 || !isset($f))
$font = 'HoaDao.TTF';
if($f == 2)
$font = 'HanViet.TTF';



$cao= 48;
$bbox= imagettfbbox($size,$angel,$font,$text);
$wtext = $bbox[2] + 2;
$rong= $bbox[2];

$im = imagecreatetruecolor($rong,$cao);
$color2= imagecolorallocate($im,255,102,0);
$color= imagecolorallocate($im,255,209,0);
$trans = imagecolorallocatealpha($im,255,255,255,127);
imagealphablending($im, FALSE);
imagesavealpha($im,TRUE);
imagefilledrectangle($im,0,0,$rong,$cao,$trans);


imagettftext($im,$size,$angel,4,47,$color2,$font,$text);
imagettftext($im,$size,$angel,2,45,$color,$font,$text);
//Xuat and pha huy
imagepng($im);
imagedestroy($im);
?>