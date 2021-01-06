<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tool Get Link Phim tổng hợp';
$mkey = 'GET Link Phim Tổng Hợp, Tải Phim, Get Link Phimmoi, ..';
include '../../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/fullfilm/" title="Tool Get Link Phim Tổng Hợp">Tool Get Link Phim Tổng Hợp</a></span></div> </div></div>';
echo '<div class="gmenu">Công cụ hỗ trợ Get Link Download từ nhiều trang phim lớn nhỏ khác nhau. Tool này ẩm ương lúc được lúc không.</div>';
echo '<div class="menu">
<strong>Xem phim:</strong> youtube.com, tv.zing.vn, v.nhaccuatui.com, xphim.vn, xemphimon.com, vung.tv, vkool.net, tgphim.vn, phimtt.com, phimmoi.net, phim.media,
phimbathu.com, phim3s.pw, phim14.net, bilutv.com, banhtv.com, mfilm.vn, kzone.tv, phim.keeng.vn, iphim.vn, watchcartoononline.com, ...<br/>
<strong>Anime:</strong> vuighe.net, animehay.tv <br/>
<strong>Drive</strong> drive.google.com. facebook.com, photos.google.com, yadi.sk, onedrive.live.com, vimeo.com, tusfiles.net, solidfiles.com, mp4upload.com, dailymotion.com <br/>
<strong>18+</strong> bloghentai.info, xtube.com, xhamster.com, vlxx.tv, pornhub.com, javhd.pro, jav555.net, heodam.tv, hentaiz.net </div>
<div class="menu"><form method="post">  
<input type="text" name="link" id="link" placeholder="https://www.fshare.vn/file/XEW2AZTUL3EE">
<input type="submit" id="submit" value="Lấy link get" name="submit" />
</form>
<div id="listLink"></div>
</div>';
$link = isset($_POST['link']) ? $_POST['link'] : '';
if($link){
$api_url = 'https://player.trunguit.net/get?url='.$link;
$data = json_decode(auto($api_url));
echo '<div class="widget">';
foreach($data->data AS $datafilm){
   foreach($datafilm->sources AS $link){
    echo '<div class="list"><a href="'.$link->file.'">Download '.$datafilm->name.' '.$link->label.' '.$link->type.'</a></div>';
   }
 }
echo '</div>';
}

include '../list.php';
include '../../template/footer.php';

function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$kq = curl_exec($data);
curl_close($data);
return $kq;
}
 ?>