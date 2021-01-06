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


$path = 'http://anonymouse.org/cgi-bin/anon-www.cgi/http://www1.flamingtext.com/net-fu/proxy_form.cgi?script=gradient-shadow-logo&fontname=Eczar+SemiBold&text='.$text.'&imageoutput=true&fontsize=59&outlineSize=5&outlineColor=%23fff&backgroundBox=&backgroundResizeToLayers=on&backgroundRadio=0&autocrop=on&useAutoSize=on&imageWidth=400&imageHeight=150/'.$text.'';


$img = imagecreatefrompng($path);
$size= getimagesize($path);
$w=$size[0]; //rong
$h=$size[1];//cao
$y = $h;

$icon = imagecreatefrompng('icon.png');
$im  = imagecreatetruecolor($w+65,$y);
imagealphablending($im,false);
imagesavealpha($im,true);
$transparent = imagecolorallocatealpha($im, 255, 255, 255, 127);
imagefilledrectangle($im, 0, 0, $w+65,$y, $transparent);

imagecopy($im,$img,64,5,0,0,$w,$h);
imagecopy($im,$icon,0,0,0,0,imagesx($icon),imagesx($icon));
imagepng($im);
imagedestroy($im);

?>