<?php
$xemthem = array();
$xemthem[] = '<div class="list"><a href="/whois.php" rel="menu"  title="kiem tra ten mien whois">Kiểm Tra Domain - Whois </a></div>';
$xemthem[] = '<div class="list"><a href="/source.php" rel="menu" title="Soi Mã Nguồn Wap/Web">Soi Mã Nguồn Wap/Web</a></div>';
$xemthem[] = '<div class="list"><a href="/logo" rel="menu" title="tao logo wap web online">Tạo Logo Wap Online</a></div>';
$xemthem[] = '<div class="list"><a href="/chupanh" rel="menu" title="chup anh wap web online">Chụp Ảnh Wap/Web Online</a></div>';
$xemthem[] = '<div class="list"><a href="/imgur.php" rel="menu" title="upload anh len imgur">Lưu Trữ Ảnh Trên Imgur</a></div>';
$xemthem[] = '<div class="list"><a href="/mahoa.php" rel="menu" title="upload anh len imgur">Tool Mã hoá/Giải mã Tổng hợp</a></div>';
$xemthem[] = '<div class="list"><a href="/ddos.php" rel="menu" title="Tang traffic ao, visit cho wap/web">Tăng Visit cho trang Wap/Web</a></div>';
$xemthem[] = '<div class="list"><a href="/cloudflare.php" rel="menu"  title="Truy tim ip website su dung dns cloudflare">Kiểm Tra IP trang dùng DNS của CloudFlare </a></div>';

echo '<div class="widget">
<div class="phdr">Xem Thêm</div>';
$rand_keys = array_rand($xemthem, 6);
//-- Xuất ra phần thử thứ nhất và thứ 2
echo $xemthem[$rand_keys[0]] . "\n";
echo $xemthem[$rand_keys[1]] . "\n";
echo $xemthem[$rand_keys[2]] . "\n";
echo $xemthem[$rand_keys[3]] . "\n";
echo $xemthem[$rand_keys[4]] . "\n";
echo $xemthem[$rand_keys[5]] . "\n";
echo '</div>';