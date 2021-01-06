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
 
$path = 'http://anonymouse.org/cgi-bin/anon-www.cgi/http://www1.flamingtext.com/net-fu/proxy_form.cgi?script=funtime-logo&fontname=Baby+Kruffy&text='.$text.'&imageoutput=true&fontsize='.$size.'&textAdvanced=&textBorder=5&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textFilters=&textOutline=false&outlineSize=2&glowSize=4&feather=10&logoBoxEnd=&backgroundBox=&backgroundResizeToLayers=on&backgroundRadio=0&autocrop=on&useAutoSize=on&imageWidth=400&imageHeight=150/'.$text.'';


$img = imagecreatefrompng($path);
$size= getimagesize($path);
$w=$size[0]; //rong
$h=$size[1];//cao


$y = $h+28;
$fly = imagecreatefrompng('fly.png');
$rocket1 = imagecreatefrompng('rocket1.png');
$rocket2 = imagecreatefrompng('rocket2.png');
$tam = imagecreatefrompng('tam.png');
$im  = imagecreatetruecolor($w+54,$y);
imagealphablending($im,false);
imagesavealpha($im,true);
$transparent = imagecolorallocatealpha($im, 255, 255, 255, 127);
imagefilledrectangle($im, 0, 0, $w+54,$y, $transparent);

imagecopy($im,$fly,0,0,0,0,imagesx($fly),imagesx($fly));
imagecopy($im,$rocket1,$w/3,3,0,0,imagesx($rocket1),imagesx($rocket1));
imagecopy($im,$tam,$w-10,5,0,0,imagesx($tam),imagesx($tam));
imagecopy($im,$rocket2,$w/1.5,20,0,0,imagesx($rocket2),imagesx($rocket2));
imagecopy($im,$img,0,28,0,0,$w,$h);
imagepng($im);
imagedestroy($im);

?>