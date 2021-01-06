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
$size= 40;
$size2 = 60;
$angel= 0;
$text1 = $_GET['text1'];
$text2 = $_GET['text2'];
$text = $text1.''.$text2;
$font= 'javajiveregular.ttf';
$cao= 110;
$bbox= imagettfbbox($size,$angel,$font,$text);
$bbox1= imagettfbbox($size,$angel,$font,$text1);
$bbox2= imagettfbbox($size2,$angel,$font,$text2);
$rong= $bbox1[2] + $bbox2[2] + 78 + 63;
$vt  = $bbox1[2] +75;
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
$java = imagecreatefrompng('java.png');
$chim = imagecreatefrompng('chim.png');
$icon = imagecreatefrompng('icon.png');
//dinh dang mau sac
$xanh = imagecolorallocate($im,115,190,255);
$red= imagecolorallocate($im,255,0,0);
//transparen
 imagesavealpha($im, true);
    //setting completely transparent color
    $transparent = imagecolorallocatealpha($im, 0, 0, 0, 127);
    //filling created image with transparent color
    imagefill($im, 0, 0, $transparent);

imagecopy($im,$java,0,0,0,0,imagesx($java),imagesy($java));
imagecopy($im,$chim, $bbox1[2]+50,12,0,0,imagesx($chim),imagesy($chim));
imagecopy($im,$icon,$rong-65,30,0,0,imagesx($icon),imagesy($icon));

// the shadow 
imagefttext($im, $size, 0, 74, 90, $red, $font,$text1);
imagefttext($im, $size2, 0, $vt, 90, $xanh, $font,$text2);



imagepng($im);
imagedestroy($im);

?>