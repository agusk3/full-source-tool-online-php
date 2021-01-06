<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tạo Logo Wap Đại Bàng';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1"><center><img src="'.(isset($_POST['text']) ? 'tao.php?text='.htmlentities($_POST['text']).'&size='.htmlentities($_POST['size']).'':'/logo/icon/daibang.png').'"><br><a href= "tao.php?text='.(isset($_POST['text']) ? htmlentities($_POST['text']) :'S2VN.TOP').'&size='.(isset($_POST['size']) ? htmlentities($_POST['size']) : '45').'">[Tải về]</a></center> ';
echo '<br/><form method="post">Nội dung logo:<br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'" /><br/>Size:<br />
<input type="text" name="size" value="'.(isset($_POST['size']) ? ''.htmlentities($_POST['size']).'':'45').'" /><br/><input type="submit" value="Tạo ngay" /></form></div>';
?>