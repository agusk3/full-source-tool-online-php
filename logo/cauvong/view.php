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
$size= 30;
$angel= 0;
$text= $_GET['text'];
$font= 'font.ttf';
$cao= 66;
$bbox= imagettfbbox($size,$angel,$font,$text);
$rong= $bbox[2] + 70;
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
$cv = imagecreatefrompng('cv.png');
$may = imagecreatefrompng('may.png');
//dinh dang mau sac
$white = imagecolorallocate($im,255,255,255);
$pink = imagecolorallocate($im,245,41,245);
$trans = imagecolorallocatealpha($im,255,255,255,127);

imagealphablending($im, FALSE);
imagesavealpha($im,TRUE);
//in van ban
imagefilledrectangle($im,0,0,$rong,$cao,$trans);
imagecopy($im,$cv,0,5,0,0,imagesx($cv),imagesy($cv));
imagecopy($im,$may,$rong-$rong/4,5,0,0,imagesx($may),imagesy($may));

imagettftext($im,$size,$angel,50,45,$pink,$font,$text);



//Xuat and pha huy
imagepng($im);
imagedestroy($im);
?>