<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tạo Logo WinDown';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1"><center><img src="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&color='.(isset($_POST['color']) ? ''.htmlentities($_POST['color']).'':'1').'" alt="logo" /><br><a href ="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&color='.(isset($_POST['color']) ? ''.htmlentities($_POST['color']).'':'1').'" />[Tải về]</a></center> ';
echo '<br/><form method="POST">Nội dung:<br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'" /><br/><input type="radio" name="color" value="1" '.(!isset($_POST['color']) || $_POST['color'] == 1 ? 'checked="checked"':'').' /> Màu Cam<br/><input type="radio" name="color" value="2" '.($_POST['color'] == 2 ? 'checked="checked"':'').' /> Màu xanh<br/><input type="submit" value="Tạo" /></form></div>';
?>