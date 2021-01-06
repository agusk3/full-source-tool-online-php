<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */

$key='Chụp ảnh màn hình wap web online';
include'../template/header.php';
?>
<?php 
include'ini.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/chupanh/index.php" title="Chụp ảnh màn hình wap web online">Chụp ảnh màn hình wap web online</a></span></div></div></div>

<div class="menu"><font color="black">Tool giúp bạn chụp ảnh màn hình wap hay website trực tuyến.<br></font></div>';

echo'
<div class="list1"><form action="add.php" method="post">Nhập địa chỉ trang web:<br/>
<input type="text" size="20" name="url" value="http://m.s2vn.top"><br/>
Kích thước :<br/>
<input type="text" size="3" value="640" name="x"/>x<input type="text" size="3" value="480" name="y"/><br/>
Chọn định dạng ảnh <select name ="morong">
<option value = "png">png</option>
<option value ="jpg">jpg</option>
</select><br>
<input type="submit" value="Xong"></form></div>';

?>
<?php
include '../template/xemthem.php';
include '../template/footer.php';
?>