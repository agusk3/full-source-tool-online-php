<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */

$key = "Xem Mã Nguồn Wap Web";
$mkey = ' Soi mã nguon wap web , soi css waplux wapego, xem html web, xem php, xem code wap, an cap trang wap source';
include 'template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/source.php" title="Xem Mã Nguồn Wap Web">Xem Mã Nguồn Wap Web</a></span></div></div></div><div class="list1">';
$dkm = htmlspecialchars($_POST['dkm']);
$td = htmlspecialchars($_POST['vkl']);
$kieuxem = htmlspecialchars($_POST['checkbox']);
$view = htmlspecialchars($_POST['view']);
//trình duyệt


if($td == 'android')
{
$trinhduyet = 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 4 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19';
}
 elseif($td == 'java')
{
$trinhduyet = 'NokiaN97/21.1.107 (SymbianOS/9.4; Series60/5.0 Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebkit/525 (KHTML, like Gecko) BrowserNG/7.1.4';
}
 elseif($td == 'pc')
{
 $trinhduyet = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/45.0 Chrome/39.0.2171.95 Safari/537.36';
}
 else
{
 $trinhduyet = $_SERVER['HTTP_USER_AGENT'];
};

//end trình cmn duyệt
if (!$dkm)
{
echo '<form method="POST" class="list-group-item">Link URL: <input type="url" name="dkm" placeholder="http://" /><br/>Trình Duyệt: <select name="vkl"><option value="now">Hiện tại</option><option value="java">Java</option><option value="android">Android Smartphone</option><option value="pc">Linux</option></select><br />
<table><tr><td>Text Box<br/><input type="radio" name="checkbox" value="line" />Theo dòng<br/><input type="radio" name="checkbox" value="full" />Toàn bộ</td><td>Kiểu xem<br/><input type="radio" name="view" value="1" />CURL<br/><input type="radio" name="view" value="2" />GET</td></tr></table><input type="submit" value="Xem" class="btn btn-default"></form>';
}
else
{
 if ($view=2) {
 error_reporting(0);
 session_start();
 ini_set('user_agent',$trinhduyet);
 $nd=file_get_contents($dkm);
 } else {
	$ch = @curl_init();
	curl_setopt($ch, CURLOPT_URL, $dkm);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, $trinhduyet);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_ENCODING , 'gzip, deflate');
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$nd = curl_exec($ch);
	curl_close($ch);
 }
 $nd = htmlentities($nd);
if(!$nd OR $nd == '' OR $nd == ' ' Or $nd == '  '){$nd = 'Có lỗi xảy ra! Vui lòng thử lại sau.'; }
if($kieuxem == 'line')
{
$nd = str_replace("\r\n", "\n", $nd);
$nd = str_replace("\r", "\n", $nd);
$lines = explode("\n", $nd);
$count = count($lines);
for ($i=0;$i<$count;$i++) {
echo("<span>".($i+1)." </span><textarea rows=\"5\" cols=\"30\">".$lines[$i]."</textarea><br/>");}
}elseif($kieuxem == 'full')
{
echo '<div class="gmenu" style="text-align: center;"><textarea style="height:700px; width:100%;" class="code list-group-item" >'.$nd.'</textarea></div>';
}
else
{
$nd=preg_replace("~&lt;[^<>]*&gt;~iU",
"<font color=\"#0000ff\">\\0</font>",$nd);
$nd=preg_replace("~(&lt;[^\s!]*\s)([^<>]*)([/?]?&gt;)~iU",
"\\1<font color=\"#007f7f\">\\2</font>\\3",$nd);
$nd=preg_replace("~&lt;!--.*--&gt;~iU",
"<font color=\"#909090\">\\0</font>",$nd);
$nd=preg_replace("~(&quot;|&#039;)[^<>]*(&quot;|&#039;)~iU",
"<font color=\"#900000\">\\0</font>",$nd);
$nd=str_replace("\r","<br>\r\n",$nd);
echo '<div class="rmenu">'.$nd.'</div>';
};
};
echo '</div></div>';
include 'template/xemthem.php';
include 'template/footer.php';
?>