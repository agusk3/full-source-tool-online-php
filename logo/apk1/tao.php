<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
//Support: Gocpho.Biz
header('Content-Type: image/png');
header('Content-disposition: attachment;filename="logo.png"');
//gia tri
$size= 20;
$angel= 0; 
$kc = $_GET['kc'];
$text1 = $_GET['text1'];
$text15 = strlen($text1);
$text2 = $_GET['text2'];
$text = $text1.''.$text2;
$font= 'fawn.ttf';
$cao= 38;
$bbox= imagettfbbox($size,$angel,$font,$text);
$rong= $bbox[2] + 50;
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
$bird = imagecreatefrompng('icon.png');
//dinh dang mau sac
$white = imagecolorallocate($im,255,255,255);
$red= imagecolorallocate($im,255,0,0);
$trans = imagecolorallocatealpha($im,255,255,255,127);
$xanh = imagecolorallocate($im,35,
104,
61);
imagealphablending($im, FALSE);
imagesavealpha($im,TRUE);
//in van ban
$vt = 48 + ($text15*10)+$kc;

imagefilledrectangle($im,0,0,$rong,$cao,$trans);
imagecopy($im,$bird,1,4,0,0,imagesx($bird),imagesy($bird));
imagettftext($im,$size,$angel,48,35,$red,$font,$text1);
imagettftext($im,$size,$angel,$vt,35,$xanh,$font,$text2);
 
 
 
//Xuat and pha huy
imagepng($im);
imagedestroy($im);
?>