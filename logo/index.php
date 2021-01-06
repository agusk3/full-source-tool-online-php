<?php 
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$mkey=' Tạo Logo Tết (2016), Tạo Logo Team, Tạo Logo Android, Tạo Logo Army, Tạo Logo Rocket, Tạo Logo Angry bird, Tạo Logo ngũ đế, Tạo Logo Hallowen, Tạo Logo Sàngame, Tạo Logo WinDown, Tạo Logo ZenCms, Tạo Logo Hạt Giấy, Code tạo logo';
$key='Tạo logo Wap Online- logo angrybird, androi, army ngũ,đế rocket | S2VN.TOP ';
include '../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/logo" title="Tạo Logo Wap Online">Tạo Logo Wap Online</a></span></div></div></div>';
$act = isset($_GET['act']) ? $_GET['act'] : '';
if($act){
include $act.'/index.php';
echo '<title>'.$key.' </title>';
} else {
include 'danhsach.php';
}
include '../template/xemthem.php';
include '../template/footer.php';
?>