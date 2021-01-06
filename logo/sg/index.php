<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tạo logo Sàn Game';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1">';
echo '<div align="center"><img src="sg.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&text2='.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'Wap Tiện Ích').'&vt='.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'3').'&vt2='.(isset($_POST['vt2']) ? ''.htmlentities($_POST['vt2']).'':'5').'&vt3='.(isset($_POST['vt3']) ? ''.htmlentities($_POST['vt3']).'':'8').'" alt="logo" /><br><a href="sg.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&text2='.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'Wap Tiện Ích').'&vt='.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'3').'&vt2='.(isset($_POST['vt2']) ? ''.htmlentities($_POST['vt2']).'':'5').'&vt3='.(isset($_POST['vt3']) ? ''.htmlentities($_POST['vt3']).'':'8').'">[Tải về]</a>';
echo '</div><form method="POST">Dòng 1:<br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'" /><br/>Vị trí 1:<br/><input type="text" name="vt" value="'.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'3').'" /><br/>Dòng 2:<br/><input type="text" name="text2" value="'.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'Wap Tiện Ích').'" /><br/>Vị trí 2:<br/><input type="text" name="vt2" value="'.(isset($_POST['vt2']) ? ''.htmlentities($_POST['vt2']).'':'5').'" /><br/>Vị trí chữ đại diện:<br/><input type="text" name="vt3" value="'.(isset($_POST['vt3']) ? ''.htmlentities($_POST['vt3']).'':'8').'" /><br/><div align="center"><input type="submit" value="Tạo" /></form>';
echo '</div></div>';
?>