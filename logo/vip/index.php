<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Tạo Logo Vip';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1">';
echo '<img src="tao.php?text1='.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2vn').'&text2='.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.Top').'" alt="logo" /><br><a href="tao.php?text1='.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2vn').'&text2='.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.Top').'">[Tải về]</a>';
echo '<form method="post">Tên Domain: <input type="text" name="text1" value="'.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2vn').'" /><br/>Đuôi Domain: <input type="text" name="text2" value="'.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.Top').'" />'; 



 echo '<br/><input type="submit" value="Tạo" /></form>';
echo '</div>';

?>