<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */

$key='Mã hoá gải mã tổng hợp - M.s2Vn.Top';
$mkey='Công cụ giúp mã hía và giải mã các cơ số md5 ,sha1, base64, link url, crc32, hex , ...';
include 'template/header.php';
?>
<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/mahoa.php" title="Mã hoá giải mã online">Mã hoá giải mã online</a></span></div></div></div> 
<div class="list2">Công cụ mã hoá giải mã tổng hợp. Công cụ giúp mã hía và giải mã các cơ số md5 ,sha1, base64, link url, crc32, hex , ...</div>
<?php
echo '<div class="menu"><form method="post"><textarea name="text"></textarea></br>
Mã hóa: <select name="type">
<option value="md5"> Mã hoá md5
<option value="sha1"> Mã hoá sha1
<option value="crc32"> Mã hoá crc32
<option value="enbase64"> Mã hoá Base64
<option value="debase64"> Giải mã Base64
<option value="url"> Mã hoá/Giải mã Url</select><br>
<input type="submit" name="sub" value="Mã hóa/Giải mã"/></form></div>';

$text = isset($_POST['text']) ? $_POST['text'] : '';
$type = isset($_POST['type']) ? htmlentities($_POST['type']) : '';
if($text){
   if($type == 'md5'){
      echo '<div class="rmenu">Mã hoá md5</div>
<div class="list1">Chuỗi trước khi mã hoá<br>
<textarea>'.htmlentities($text).'</textarea><br>
Mã hoá md5 1 lần<br><textarea>'.md5($text).'</textarea><br>
Mã hoá md5 2 lần<br><textarea>'.md5(md5($text)).'</textarea><br>
Mã hoá md5 3 lần<br><textarea>'.md5(md5(md5($text))).'</textarea><br>
Mã hoá md5 4 lần<br><textarea>'.md5(md5(md5(md5($text)))).'</textarea><br>
Mã hoá md5 5 lần<br><textarea>'.md5(md5(md5(md5(md5($text))))).'</textarea><br>
</div><div class="list1">Đây là chương trình mã hóa chuỗi bằng cách mã hóa md5 sử dụng khi bạn bị mất mật khẩu 1 site nào đó mà chỉ còn cách tác động vào database mới thay đổi được mật khẩu.</div>
';
   }
   if($type == 'sha1'){
      echo '<div class="rmenu">Mã hoá Sha1</div>
<div class="list1">Chuỗi cần mã hoá<br>
<textarea>'.htmlentities($text).'</textarea><br>
Kết quả mã hoá Sha1<br><textarea>'.htmlentities(sha1($text)).'</textarea></div>';
   }
   if($type == 'crc32'){
      echo '<div class="rmenu">Mã hoá crc32</div>
<div class="list1">Chuỗi cần mã hoá<br>
<textarea>'.htmlentities($text).'</textarea><br>
Kết quả mã hoá crc32<br><textarea>'.htmlentities(crc32($text)).'</textarea></div>';
   }
   if($type == 'enbase64'){
      echo '<div class="rmenu">Mã hoá Base64</div>
<div class="list1">Chuỗi trước khi mã hoá<br>
<textarea>'.htmlentities($text).'</textarea><br>
Kết quả mã hoá Base64<br><textarea>'.base64_encode($text).'</textarea>
</div><div class="list1">Đây là chương trình mã hóa - giải mã chuỗi bằng cách sử dụng base64</div>';
   }
   if($type == 'url'){
      echo '<div class="rmenu">Mã hoá/Giải mã Url</div>
<div class="list1">Chuỗi Kí Tự ban đầu<br>
<textarea>'.htmlentities($text).'</textarea><br>
Kết quả mã hoá URL<br><textarea>'.htmlentities(rawurlencode($text)).'</textarea><br>
Kết quả giải mã URL<br><textarea>'.htmlentities(rawurldecode($text)).'</textarea></div>';
   }
   if($type == 'debase64'){
      echo '<div class="rmenu">Giải mã Base64</div>
<div class="list1">Chuỗi mã hoá<br>
<textarea>'.htmlentities($text).'</textarea><br>
Kết quả giải mã Base64<br><textarea>'.htmlentities(base64_decode($text)).'</textarea>
</div><div class="list1">Đây là chương trình mã hóa - giải mã chuỗi bằng cách sử dụng base64</div>';
   }
}
?>
<?
include 'template/xemthem.php';
include 'template/footer.php';
?>