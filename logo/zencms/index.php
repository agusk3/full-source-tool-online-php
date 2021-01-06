<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Tạo Logo ZenCms';

echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1">';
echo '<div align="center"><img src="tao.php?text1='.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2VN').'&text2='.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.TOP').'&text3='.(isset($_POST['text3']) ? ''.htmlentities($_POST['text3']).'':'Wap Tien Ich').'&vt='.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'10').'" alt="logo" /><br><a href="tao.php?text1='.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2VN').'&text2='.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.TOP').'&text3='.(isset($_POST['text3']) ? ''.htmlentities($_POST['text3']).'':'Wap Tien Ich').'&vt='.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'10').'">[Tải về]</a></div>';
echo '<form method="POST">Ten domain:<br/><input type="text" name="text1" value="'.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2VN').'" /><br/>Duoi domain:<br/><input type="text" name="text2" value="'.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'.TOP').'" /> <br />Text:<br/><input type="text" name="text3" value="'.(isset($_POST['text3']) ? ''.htmlentities($_POST['text3']).'':'Wap Tien Ich').'" /> <br />Vi tri text:<br/><input type="text" name="vt" value="'.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'10').'" /> ';



 echo '<br/><input type="submit" value="Tao Ngay" /></form>';
echo '</div>';

?>