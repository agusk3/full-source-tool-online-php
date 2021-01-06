<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tool Get Link PlayList Video Youtube';
$mkey = 'GET Link Download PlayList Video Youtube , Get Link tải Youtube , get link tải nhanh playlist youtube';
include '../../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/youtube_playlist/" title="Tool Get Link PlayList Video Youtube">Tool Get Link PlayList Video Youtube</a></span></div> </div></div>';
echo '<div class="gmenu">Get link tất cả các video trong playlist của youtube.</div>';
echo '<div class="menu">
<strong>Nhập ID của playlist, Ví dụ: </strong>PLp7eJdzYEusefLjjp5qTR9jvTLb-tpxZz<br />
<form method="post">  
<input type="text" name="link" id="link" placeholder="PLp7eJdzYEusefLjjp5qTR9jvTLb-tpxZz">
<input type="submit" id="submit" value="Lấy link get" name="submit" />
</form>
<div id="listLink"></div>
</div>';

$playlist_id = isset($_POST['link']) ? $_POST['link'] : '';
$api_key = 'AIzaSyB5qRx8sScOT4JtK3bM7BM8mky856vPRNg';
if ($playlist_id){
$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId='.$playlist_id.'&key=' . $api_key;
$playlist = json_decode(auto($api_url));
if(!$playlist->error){
echo '<div class="widget">';
foreach($playlist->items AS $item){
     echo '<div class="list"><a href="http://s2-vn.a3c1.starter-us-west-1.openshiftapps.com/Video/getvideo.php?videoid=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D'.$item->snippet->resourceId->videoId.'&type=Download">'.$item->snippet->title.'</a></div>';
    }
  echo '</div>';
  } else { echo '<div class="list1"> Có lỗi xảy ra, vui lòng thử lại sau! </div>'; }
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