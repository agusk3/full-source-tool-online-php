<?php
/*/////////////////////
//*Site: Taologo.yzi.me va GocHep.Net
///////////////////////*/
header('Content-Type: image/png');
header('Content-disposition: attachment;filename="logo.png"');
//gia tri vao
$f = intval($_GET['f']);
if($f == 1)
$font = 'almosnow.ttf';

$size = intval($_GET['size']);
$text = $_GET['text'];
$vt = intval($_GET['vt']);
$goc= 0;
//cho image
$box = imagettfbbox($size,$goc,$font,$text);
$w = $box[2]+60;
$h = $box[1]+45;
$cay=imagecreatefrompng('avata.png');
$im = imagecreatetruecolor($w,$h);
$bat=imagecreatefrompng('trai-tim-team2.png');
$moon=imagecreatefrompng('may2.png');
$broom=imagecreatefrompng('maytroi.png');
//tao mau sac
$trans=imagecolorallocatealpha($im,255,255,255,127);
$white=imagecolorallocate($im,255,255,255);
$black=imagecolorallocate($im,255,51,0);
imagealphablending($im,false);
imagesavealpha($im,true);
imagefilledrectangle($im,0,0,$w,$h,$trans);
//cai cay
imagecopy($im,$cay,0,0,0,0,imagesx($cay),imagesy($cay));
//dam may
imagecopyresized($im,$bat,(($w-imagesx($bat))/2+40),0,0,0,26,26,imagesx($bat),imagesy($bat));
//may troi
imagecopyresized($im,$broom,(imagesx($cay)+5),0,0,0,24,24,imagesx($broom),imagesy($broom));
//moon
imagecopy($im,$moon,($w-imagesx($moon)-5),0,0,0,imagesx($moon),imagesy($moon));
//chu len img
imagettftext($im,$size,$goc,$vt,44,$black,$font,$text);
//xuat du lieu
imagepng($im);
imagedestroy($im);
//Code by Thach
?>