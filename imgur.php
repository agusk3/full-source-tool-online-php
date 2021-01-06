<?php 
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */

$mkey = 'Upload ảnh, wap upload ảnh nhanh chóng và được lưu trữ vĩnh viễn không link die trên server Imgur.Com. Bạn có thể upload ảnh miễn phí và không giới hạn, tuy nhiên không được up ảnh sex. Những ảnh này sẽ bị xoá mà không báo trước do vi phạm điều khoản';
$key = 'Upload và đóng dấu Ảnh Lên Imgur.Com';
include 'template/header.php';
echo '<style type="text/css">
input[type="file"] {
width: 90%;
}
input, select {
border: 1px #ccc solid;
color: #000;
font-weight: normal;
background-color: #fff;
padding: 3px;
margin: 1px;
border-radius: 10px;
}
</style>
<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/imgur.php" title="Upload Ảnh Lên Imgur">Upload Ảnh Lên Imgur</a></span></div></div></div>';
if ($_GET['er']){
echo '<div class="rmenu"><strong>Có lỗi xảy ra:</strong><br/>- Bạn chưa chọn File ảnh cần Upload<br/>- File bị lỗi trong quá trình Upload do kết nối mạng...<br/>- File vi phạm nội quy hoặc có lỗi xảy ra trên Server Imgur<br/>Bạn vui lòng Upload lại!</div>';}
if (!$_GET['u']){
echo '<div class="rmenu">'.$mkey.'</div><div class="list1"><form action="http://zingdata.esy.es/imgur-hosting.php" enctype="multipart/form-data" method="post"><strong>Chọn ảnh:</strong><br/><input type="radio" name="select" value="upload" checked /> Chọn ảnh từ máy:<br/><input name="dongdau" type="file" /><br/><input type="radio" name="select" value="import"/> Chọn ảnh từ URL:<br/><input type="text" name="url" /><br/><strong>Link logo đóng dấu:</strong><br/><input type="text" name="logo" /><br/><input type="checkbox" name="nen" value="yes" /> Nén ảnh!<br/><input type="submit" name="submit" value="Upload" /></form></div>';
echo '<div class="phdr">Chọn nhiều ảnh</div><div class="list1">';
include 'imgur/index.html';
echo '</div>';
}else{
$u = 'https://i.imgur.com/'.htmlentities($_GET['u']);
echo '<div class="list1"><div style="text-align: center;"><img src="'.$u.'" alt="Upload ảnh lên Imgur" style="max-width: 90%"><br/><br/><a href="'.$u.'"><strong style="color: red;">Tải Về Máy</strong></a>   |   <a href="/imgur.php"><strong style="color:blue">Upload</strong></a></div></div><div class="phdr"><strong>Chia Sẻ Ảnh</strong></div><div class="list1"><strong>Link Trực Tiếp</strong><br /><input type="text" value="'.$u.'" type="text"><br/><strong>BBcode:</strong><br/><input type="text" value="[img]'.$u.'[/img]" type="text"></div>';}
include 'template/xemthem.php';
include 'template/footer.php';
?>