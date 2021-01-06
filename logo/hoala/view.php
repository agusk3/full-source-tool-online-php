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
$size2 = 15;
$angel= 0;
$text1 = $_GET['text1'];
$text2 = $_GET['text2'];
$text = $text1.''.$text2;
$font= 'hlgiomuc.ttf';
$cao= 103;
$bbox= imagettfbbox($size,$angel,$font,$text);
$bbox1= imagettfbbox($size,$angel,$font,$text1);
$bbox2= imagettfbbox($size2,$angel,$font,$text2);
if ($bbox1[2] >= $bbox2[2]){
$rong= $bbox1[2] + 105;
$vt1 = 105;
$vt2  = ($rong - 105 - $bbox2[2])/2 +105;
} else {
$rong= $bbox2[2] + 105;
$vt1 = ($rong - 105 - $bbox1[2])/2 +105;
$vt2 = 105;
}
//tao anh moi
$im = imagecreatetruecolor($rong,$cao);
$hoa = imagecreatefrompng('hoa.png');
$la = imagecreatefrompng('la.png');
//dinh dang mau sac
$xanh = imagecolorallocate($im,80,200,120);
$red= imagecolorallocate($im,255,50,0);
$trang= imagecolorallocate($im,255,255,255);
//transparen
 imagesavealpha($im, true);
    //setting completely transparent color
    $transparent = imagecolorallocatealpha($im, 0, 0, 0, 127);
    //filling created image with transparent color
    imagefill($im, 0, 0, $transparent);

imagecopy($im,$hoa,0,0,0,0,imagesx($hoa),imagesy($hoa));
imagecopy($im,$la,140,10,0,0,imagesx($la),imagesy($la));

// the shadow 
imagefttext($im, $size, 0, $vt1+1, 72, $trang, $font,$text1);
imagefttext($im, $size, 0, $vt1-1, 69, $trang, $font,$text1);
imagefttext($im, $size, 0, $vt1, 70, $xanh, $font,$text1);

imagefttext($im, $size2, 0, $vt2+1, 91, $trang, $font,$text2);
imagefttext($im, $size2, 0, $vt2, 91, $trang, $font,$text2);
imagefttext($im, $size2, 0, $vt2, 90, $red, $font,$text2);



imagepng($im);
imagedestroy($im);

?>