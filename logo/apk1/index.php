<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Tạo Logo Android 1';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1">';
echo '<div align="center"><img src="tao.php?text1='.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2VN').'&text2='.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.TOP').'&kc='.(isset($_POST['kc']) ? ''.htmlentities($_POST['kc']).'':'2').'" alt="logo" /><br><a href="tao.php?text1='.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2VN').'&text2='.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.TOP').'&kc='.(isset($_POST['kc']) ? ''.htmlentities($_POST['kc']).'':'2').'">[Tải về]</a></div>';

echo ' <form method="POST">Tên miền:<br/><input type="text" name="text1" value="'.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2VN').'" /><br/>Đuôi:<br/><input type="text" name="text2" value="'.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.TOP').'" /><br/>Khoảng cách:<br/><input type="text" name="kc" value="'.(isset($_POST['kc']) ? ''.htmlentities($_POST['kc']).'':'2').'" /><br/><input type="submit" value="Tạo" /></form></div>';

?>