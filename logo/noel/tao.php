<?php
//Support: Gocpho.Biz
//code:Văn Thạch
header('Content-Type: image/png');
header('Content-disposition: attachment;filename="logo.png"');
//gia tri
$size= '20';
$size1 = '30';
$angel= '0'; 
$text = $_GET['text'];
$font= 'stnicholas.ttf';
$cao= '90';
$bird = imagecreatefrompng('nai.png'); 
$sao = imagecreatefrompng('sao.png');
$nen = imagecreatefrompng('dencay.png');
$chuong = imagecreatefrompng('chuong.png');
$bbox= imagettfbbox($size,$angel,$font,$text);


$rong= $bbox[2] + 55;
$w = $bbox[2]-28;
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
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
if($_GET['color'] == 1 || !isset($_GET['color']))
$color = $red;
else
if($_GET['color'] == 2)
$color = $xanh;



imagefilledrectangle($im,0,0,$rong,$cao,$trans);


imagecopyresized($im,$bird,$w,4,0,0,80,70,imagesx($bird),imagesy($bird));

imagecopyresized($im,$nen,1,57,0,0,15,20,imagesx($nen),imagesy($nen));

imagecopyresized($im,$sao,10,45,0,0,15,15,imagesx($sao),imagesy($sao));

imagecopyresized($im,$sao,25,35,0,0,15,15,imagesx($sao),imagesy($sao));

imagecopyresized($im,$sao,40,50,0,0,15,15,imagesx($sao),imagesy($sao));

imagecopyresized($im,$chuong,$bbox[2]-60,45,0,0,25,25,imagesx($chuong),imagesy($chuong));

imagecopyresized($im,$sao,55,25,0,0,15,15,imagesx($sao),imagesy($sao));



imagettftext($im,$size,$angel,15,75,$color,$font,$text);

//Xuat and pha huy
imagepng($im);
imagedestroy($im);
?>