<?php 
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Chụp Ảnh Wap Web Online - OK';
include'../template/header.php';
//include'ini.php';
//include 'function.php';


function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$f = curl_exec($data);
curl_close($data);
return $f;
}

echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/chupanh/index.php" title="Chụp ảnh màn hình wap web online">Chụp ảnh màn hình wap web online</a></span></div></div></div>';
$url = htmlspecialchars($_POST['url']);
$morong = htmlspecialchars($_POST['morong']);
$x = htmlspecialchars($_POST['x']);
$y = htmlspecialchars($_POST['y']);
$img='http://mini.s-shot.ru/'.$x.'x'.$y.'/'.$x.'/'.$morong.'/?'.$url.'';
/*
if (isset($img)) {
$stt=time().'.'.$morong;
set_file('screenshot/'.$stt.'',auto($img));
//copy($img,"img/".$stt);
}
*/
/*
echo '<div class="menu"><font color="black">Ảnh chụp trang <b>'.$url.'</b> ('.$x.'x'.$y.') của bạn đây!<br></font><br><center><img src="'.$urlfile.'/'.$stt.'" width="200" height="150"><br/>
[<a href="'.$urlfile.'/'.$stt.'"><big><b>Tải về ảnh '.$x.'x'.$y.'</b></big></a>]</div>
<div class="list1">Link ảnh:<br/>
<textarea row="2">'.$urlfile.'/'.$stt.'</textarea>
</br>BBcode:<br/>
<textarea row="2">[img]'.$urlfile.'/'.$stt.'[/img]</textarea>
</center></div>';
*/

echo '<div class="menu"><font color="black">Ảnh chụp trang <b>'.$url.'</b> ('.$x.'x'.$y.') của bạn đây!<br></font><br><center><img src="'.$img.'" width="200" height="150"><br/>
[<a href="'.$img.'"><big><b>Tải về ảnh '.$x.'x'.$y.'</b></big></a>]</div>
<div class="list1">Link ảnh:<br/>
<textarea row="2">'.$img.'</textarea>
</br>BBcode:<br/>
<textarea row="2">[img]'.$img.'[/img]</textarea>
</center></div>';
include '../template/xemthem.php';
include '../template/footer.php';
?>