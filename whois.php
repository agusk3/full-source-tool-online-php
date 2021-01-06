<?php 
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */

$key = 'Kiểm tra domain | Whois';
$mkey = 'Kiểm tra tên miền, Whois domain, Tra hạn sử dụng domain, Tra sự tồn tại của tên miền, mua tên miền, whois tên miền việt nam và quốc tế, matbao';
$domain = htmlentities($_GET['domain']);
require 'template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/whois.php" title="Kiểm tra tên miền">Kiểm tra tên miền</a></span></div></div></div>';
echo '<form method="get">';
echo '<div class="rmenu"><input type="text" class="form-control" placeholder="Nhập tên miền cần kiểm tra" name="domain" />
<input value="Whois" class="btn btn-warning" type="submit" /> <input type="reset" class="btn btn-primary" value="Reset" /></div>';
// Kiểm tra sự tồn tại của tên miền
if($domain)
{
$kt = 'http://www.whois.net.vn/whois.php?domain='.$domain;
$kq = auto($kt) ;

// Lấy whois tên miền
$kt = 'http://www.whois.net.vn/whois.php?domain='.$domain.'&act=getwhois';
$info = auto($kt);
$dk = $info;
$info = str_replace('Tên miền không tồn tại', 'Tên miền có thể đăng kí', $info);
echo '<div class="list1">'.$info.'</div>';
          if($dk == 'Tên miền không tồn tại') echo '<div class="list1">Tên Miền Có Thể Đăng Kí</div>';

}
function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$kq = curl_exec($data);
curl_close($data);
return $kq;
}

require 'template/xemthem.php';
require 'template/footer.php';
?>