<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
set_time_limit(0);
$key = 'Kiểm tra IP Site Dùng DNS CloudFlare';
$mkey = 'Công cụ giúp Tìm IP thật của website sử dụng dịch vụ DNS của Cloudflare để ẩn IP';
require 'template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/cloudflare.php" title="Kiểm tra ip CloudFlare">Kiểm tra ip CloudFlare</a></span></div></div></div>';
echo '<form method="get">';
echo '<div class="menu"><input type="text" class="form-control" placeholder="Tên miền, VD:phimmoi.net" name="domain" />
<input value="Check IP" class="btn btn-warning" type="submit" /> <input type="reset" class="btn btn-primary" value="Reset" /></div>';

$domain = isset($_GET['domain']) ? $_GET['domain'] : '';
if ($domain){
$site='http://www.crimeflare.com/cgi-bin/cfsearch.cgi';
$domain = htmlentities($domain);
$data = post($site, 'cfS='.$domain.'');
$data = explode('<blockquote>',$data);
$data = explode('</blockquote>',$data[1]);
$data = strip_tags($data[0], '<font><center><BR><br><UL><LI>');
$data = explode('<font size=2>',$data);
$data = $data[0];
if (!$data OR $domain=='s2vn.top') $data = 'Tên miền không hợp lệ!';

echo '<div class="gmenu">'.$data.'</div>';

}else{
echo '<div class="rmenu">'.$mkey.'</div>'; }

require 'template/xemthem.php';
require 'template/footer.php';

function post($url, $data) {
$ch   = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:37.0) Gecko/20100101 Firefox/37.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
