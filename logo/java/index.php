<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Tạo Logo Java Icon Game';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1"><center><img src="view.php?text1='.(isset($_POST['text1']) ? htmlentities($_POST['text1']) :'S2vn').'&text2='.(isset($_POST['text2']) ? htmlentities($_POST['text2']) :'.TOP').'" width="200" height="auto" ><br><a href="view.php?text1='.(isset($_POST['text1']) ? htmlentities($_POST['text1']) :'S2vn').'&text2='.(isset($_POST['text2']) ? htmlentities($_POST['text2']) :'.TOP').'">[Tải về]</a></center>';
echo '<br/><form method="post">Tên miền:<br/><input type="text" name="text1" value="'.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2vn').'" /><br/>Tên mở rộng:<br/><input type="text" name="text2" value="'.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.TOP').'" /><br/><input type="submit" value="Tạo ngay" /></form></div>';
?>