<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tạo Logo Rocket';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1"><center><img src="view.php?text='.(isset($_POST['text']) ? htmlentities($_POST['text']) :'S2VN.TOP').'&vt='.(isset($_POST['vt']) ? htmlentities($_POST['vt']) : '80').'"><br><a href= "view.php?text='.(isset($_POST['text']) ? htmlentities($_POST['text']) :'S2VN.TOP').'&vt='.(isset($_POST['vt']) ? htmlentities($_POST['vt']) : '80').'">[Tải về]</a></center> ';
echo '<br/><form method="post">Nội dung logo:<br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'" /><br/>Vị trí Rocket:<br />
<input type="text" name="vt" value="'.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'80').'" /><br/><input type="submit" value="Tạo ngay" /></form></div>';
?>