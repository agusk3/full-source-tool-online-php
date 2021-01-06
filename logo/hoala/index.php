<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Tạo Logo Hoa và Lá';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1"><center><img src="view.php?text1='.(isset($_POST['text1']) ? htmlentities($_POST['text1']) :'S2VN.TOP').'&text2='.(isset($_POST['text2']) ? htmlentities($_POST['text2']) :'tao logo wap online').'" width="200" height="auto" ><br><a href="view.php?text1='.(isset($_POST['text1']) ? htmlentities($_POST['text1']) :'S2VN.TOP').'&text2='.(isset($_POST['text2']) ? htmlentities($_POST['text2']) :'tao logo wap online').'">[Tải về]</a></center>';
echo '<br/><form method="post">Dòng trên:<br/><input type="text" name="text1" value="'.(isset($_POST['text1']) ? ''.htmlentities($_POST['text1']).'':'S2VN.TOP').'" /><br/>Dòng dưới:<br/><input type="text" name="text2" value="'.(isset($_POST['text2']) ? ''.htmlentities($_POST['text2']).'':'tao logo wap online').'" /><br/><input type="submit" value="Tạo ngay" /></form></div>';
?>