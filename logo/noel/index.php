<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Tạo Logo Giáng Sinh - Logo Noel';
echo ' <h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1">';
echo '<div align="center"><img src="tao.php?text= '.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').' &color='.(isset($_POST['color']) ? ''.htmlentities($_POST['color']).'':'1').'" />
<a href="tao.php?text= '.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').' &color='.(isset($_POST['color']) ? ''.htmlentities($_POST['color']).'':'1').'"><center><b><font color=red>Tải về máy</font></b></center></a>';
echo '</div><form method="post">Tên domain:<br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').' "/><br/><input type="radio" name="color" value="1" '.(!isset($_POST['color']) || $_POST['color'] == 1 ? 'checked="checked"':'').' /> Màu đỏ<br/><input type="radio" name="color" value="2" '.($_POST['color'] == 2 ? 'checked="checked"':'').' /> Màu xanh<br/>';



 echo '<input type="submit" value="Tạo Ngay" /></form>';
echo '</div>';
?>