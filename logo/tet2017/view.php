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
$size= 50;
$angel= 0;
$text= $_GET['text'];
$f = $_GET['font'];
if($f == 1 || !isset($f))
$font = 'HoaDao.TTF';
if($f == 2)
$font = 'HanViet.TTF';

$cao= 90;
$bbox= imagettfbbox($size,$angel,$font,$text);
$wtext = $bbox[2]+30;
$snow = imagecreatefrompng('phai.png');
$sao = imagecreatefrompng('phao.png');
$phao = imagecreatefrompng('phao2.png');
$tree = imagecreatefrompng('icon.png');
$santa = imagecreatefrompng('2017.png');
$rong= $bbox[2] + 120;
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
$xanh = imagecolorallocate($im,50,205,50);
$white = imagecolorallocate($im,255,255,255);
$red= imagecolorallocate($im,255,0,0);
$vang = imagecolorallocate($im,250,205,0);
$trans = imagecolorallocatealpha($im,255,255,255,127);
imagealphablending($im, FALSE);
imagesavealpha($im,TRUE);
//in van ban

imagefilledrectangle($im,0,0,$rong,$cao,$trans);
imagecopyresized($im,$tree,-5,4,0,0,87,87,imagesx($tree),imagesy($tree));
imagecopyresized($im,$santa,$wtext/1.5,-14,0,0,100,100,imagesx($santa),imagesy($santa));
imagecopyresized($im,$snow,$wtext,4,0,0,87,87,imagesx($snow),imagesy($snow));


if($_GET['color'] == 1 || !isset($_GET['color']))
$color = $white;
elseif($_GET['color'] == 2)
$color = $red;
elseif($_GET['color'] >= 3)
$color = $xanh;
imagecopyresized($im,$phao,$wtext/1.9,1,0,0,45,45,imagesx($phao),imagesy($phao));
imagecopyresized($im,$sao,$wtext/3.7,2,0,0,45,45,imagesx($sao),imagesy($sao));
imagecopyresized($im,$sao,$wtext/
2.4,15,0,0,35,35,imagesx($sao),imagesy($sao));


imagettftext($im,$size,$angel,45,87,$color,$font,$text);
//Xuat and pha huy
imagepng($im);
imagedestroy($im);
?>