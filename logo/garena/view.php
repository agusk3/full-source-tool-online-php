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
$size= 35;
$size2 = 10;
$angel= 0;
$text1 = $_GET['text1'];
$text2 = $_GET['text2'];
$text = $text1.''.$text2;
$font= 'Raleway-v4020-Regular.otf';
$cao= 75;
$bbox= imagettfbbox($size,$angel,$font,$text);
$bbox1= imagettfbbox($size,$angel,$font,$text1);
$bbox2= imagettfbbox($size2,$angel,$font,$text2);
if ($bbox1[2] >= $bbox2[2]){
$rong= $bbox1[2] + 80;
$vt1 = 75;
$vt2  = ($rong - 75 - $bbox2[2])/2 +75;
} else {
$rong= $bbox2[2] + 80;
$vt1 = ($rong - 75 - $bbox1[2])/2 +75;
$vt2 = 75;
}
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
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

imagecopy($im,$icon,0,0,0,0,imagesx($icon),imagesy($icon));

// the shadow 
imagefttext($im, $size, 0, $vt1, 50, $red, $font,$text1);
imagefttext($im, $size2, 0, $vt2, 65, $xanh, $font,$text2);



imagepng($im);
imagedestroy($im);

?>