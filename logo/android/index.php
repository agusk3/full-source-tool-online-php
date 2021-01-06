<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
error_reporting(0);
header("Content-Type: text/vnd.wap.wml; charset=Utf-8");

$key = 'Tạo Logo Android';
echo '<h2 class="phdr">'.$key.'</h2>';
echo ' <div class="list1"> <center><p> <br/> <br/><img src="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&color='.(isset($_POST['color']) ? ''.htmlentities($_POST['color']).'':'1').'" alt="logo" /> <br/><b>» <a style="color:red!important;" href="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&color='.(isset($_POST['color']) ? ''.htmlentities($_POST['color']).'':'1').'" >Download</a> ';
echo ' <br/><form action="" method="post">Nội dung:<br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'" /><br/><input type="radio" name="color" value="1" '.(!isset($_POST['color']) || $_POST['color'] == 1 ? 'checked="checked"':'').' /> Màu Xanh<br/><input type="radio" name="color" value="2" '.($_POST['color'] == 2 ? 'checked="checked"':'').' /> Màu Đỏ<br/><input type="submit" value="Tạo" /></form></div> ';
?>