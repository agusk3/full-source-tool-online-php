<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
header('Content-Type: image/png');
header('Content-disposition: attachment;filename="logo.png"');
$text = $_GET['text'];
$size = $_GET['size'];
 
$path = 'http://anonymouse.org/cgi-bin/anon-www.cgi/http://www1.flamingtext.com/net-fu/proxy_form.cgi?script=comics-logo&text='.$text.'&imageoutput=true&fontsize='.$size.'&fontname=Impact&fillTextColor=%23fff&outlineSize=3&fillOutlineColor=%23f00&outline2Size=0&fillOutline2Color=%23f00&curveHighlight=false&shadowType=0&shadowXOffset=-20&shadowYOffset=-20&shadowBlur=0&shadowColor=%23fff5f5&shadowOpacity=71&backgroundRadio=0&autocrop=on/'.$text.'';

$img = imagecreatefrompng($path);
$size= getimagesize($path);
$w=$size[0]; //rong
$h=$size[1];//cao


$y = $h+28;
$im  = imagecreatetruecolor($w,$y);

$tim = imagecreatefrompng('tim.png');
$ava = imagecreatefrompng('bird.png');
$chim = imagecreatefrompng('chim.png');

imagealphablending($im,false);
imagesavealpha($im,true);
$transparent = imagecolorallocatealpha($im, 255, 255, 255, 127);
imagefilledrectangle($im, 0, 0, $w,$y, $transparent);

/*imagecopy($im,$fly,0,0,0,0,imagesx($fly),imagesx($fly));
imagecopy($im,$rocket1,$w/3,3,0,0,imagesx($rocket1),imagesx($rocket1));
imagecopy($im,$tam,$w-10,5,0,0,imagesx($tam),imagesx($tam));
imagecopy($im,$rocket2,$w/1.5,20,0,0,imagesx($rocket2),imagesx($rocket2)); */

imagecopy($im,$img,0,$y-$h,0,0,$w,$h);
imagecopy($im,$ava,$w-50,$h-($h-6),0,0,28,19);
imagecopy($im,$tim,($w/2)-9,$h-($h-20),0,0,50,19);
imagecopy($im,$chim,0,$h-($h-6),0,0,78,33);

imagepng($im);
imagedestroy($im);

?>