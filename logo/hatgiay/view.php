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
$size= 20;
$angel= 0;
$text= $_GET['text'];
$font= 'arial.ttf';
$cao= 38;
$bbox= imagettfbbox($size,$angel,$font,$text);
$wtext = $bbox[2] + 2;
$bird = imagecreatefrompng('hatgiay.png');
$rong= $bbox[2] + imagesx($bird);
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);

//dinh dang mau sac
$white = imagecolorallocate($im,255,255,255);
$red= imagecolorallocate($im,255,0,0);
$trans = imagecolorallocatealpha($im,255,255,255,127);
$xanh = imagecolorallocate($im,50,205,50);
imagealphablending($im, FALSE);
imagesavealpha($im,TRUE);
//in van ban
imagefilledrectangle($im,0,0,$rong,$cao,$trans);
imagecopyresized($im,$bird,$wtext,4,0,0,35,35,imagesx($bird),imagesy($bird));

if($_GET['color'] == 1 || !isset($_GET['color']))
$color = $white;
else
if($_GET['color'] == 2)
$color = $red;
else
if($_GET['color'] == 3)
$color = $xanh;
imagettftext($im,$size,$angel,2,35,$color,$font,$text);
//Xuat and pha huy
imagepng($im);
imagedestroy($im);
?>