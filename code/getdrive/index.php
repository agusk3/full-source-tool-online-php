<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tool Get Link Download Trực Tiếp Google Drive';
$mkey = 'GET Link Download Trực Tiếp Google Drive , lấy link chia sẻ, link tải trực tiếp từ dịch vụ chia sẻ file nổi tiếng Google Drive , get link tải nhanh ';
include '../../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/getdrive/" title="Tool Get Link Download Trực Tiếp Google Drive">Tool Get Link Download Trực Tiếp Google Drive</a></span></div> </div></div>';
echo '<div class="gmenu">Tool cho phép bạn lấy Direct Link Google Drive. Direct link là dạng link download trực tiếp, có nghĩa là khi bạn bấm vào đường link đó nó sẽ tự động tải xuống luôn mà không cần phải click thêm một lần nào nữa.</div>';
echo '<div class="menu">
<strong>Link hỗ trợ: </strong>https://drive.google.com/file/d/0BypABqNqmyIaZHFNQnVrcF8tdWM/view<br />
<form method="post">  
<input type="text" name="link" id="link" placeholder="https://drive.google.com/file/d/0BypABqNqmyIaZHFNQnVrcF8tdWM/view">
<input type="submit" id="submit" value="Lấy link get" name="submit" />
</form>
</div>';

$link = isset($_POST['link']) ? $_POST['link'] : '';
if($link){
include 'curl_gd.php';
$linkdown = Drive($link);
echo '<div class="list1">Link Direct:<a class="download" href="'.$linkdown.'">Download Now</a><br/><textarea>'.$linkdown.'</textarea></div>';
}

include '../list.php';
include '../../template/footer.php'; ?>