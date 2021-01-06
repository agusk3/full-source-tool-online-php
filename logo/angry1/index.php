<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
error_reporting(0);
header("Content-Type: text/vnd.wap.wml; charset=Utf-8");
$key='Tạo Logo Angry Bird 2';
echo '<h2 class="phdr">'.$key.'</h2>';
echo' <div class="menu">
<img src="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&color='.(isset($_POST['color']) ? ''.htmlentities($_POST['color']).'':'1').'" alt="logo" /> <br/> <b>
» <a style="color:red!important;" href="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&color='.(isset($_POST['color']) ? ''.htmlentities($_POST['color']).'':'1').'" >» Tải về</a></b>';
echo '<br/><form  action="" method="POST">Nội dung:<br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'" /><br/><input type="radio" name="color" value="1" '.(!isset($_POST['color']) || $_POST['color'] == 1 ? 'checked="checked"':'').' /> Màu đen<br/><input type="radio" name="color" value="2" '.($_POST['color'] == 2 ? 'checked="checked"':'').' /> Màu xám<br/><input type="submit" value="Tạo" /></form></div>';
?>