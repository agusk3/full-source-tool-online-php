<?php

$key = 'Tạo logo dị nhất VN';

echo '<div class="phdr">'.$key.'</div><div class="list1">';
echo '<center><img src="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&size='.(isset($_POST['size']) ? ''.htmlentities($_POST['size']).'':'20').'&vt='.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'25').'&f='.(isset($_POST['f']) ? ''.htmlentities($_POST['f']).'':'1').'" alt="logo" /><br><a href="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&size='.(isset($_POST['size']) ? ''.htmlentities($_POST['size']).'':'20').'&vt='.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'25').'&f='.(isset($_POST['f']) ? ''.htmlentities($_POST['f']).'':'1').'">[Tải về]</a></center> ';
echo '</div><form method="POST"><div class="list1">Nội dung: (không dấu)<br/><input class="form-control" type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'" /><br>Kiểu chữ:<br/><select class="select-control"  name="f">';
for($i=1;$i<=11;$i++){
echo '<option value="'.$i.'">Kiểu '.$i.'</option>';
}
echo '</select>
</br>Size:<br/>
<input type="text" class="form-control" name="size" value="'.(isset($_POST['size']) ? ''.htmlentities($_POST['size']).'':'20').'" /><br/>Vị trí:<br/><input type="text" class="form-control" name="vt" value="'.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'25').'" /></div><div class="list1"><input type="submit" value="Tạo" class="btn btn-default" /></div></form>';
echo '</div></div>';