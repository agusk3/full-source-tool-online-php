<?php

include ('../head.php');

echo '<div class="phdr">Tạo Logo Android online</div><div class="list1"><a href="view.php?text='.(isset($_GET['text']) ? $_GET['text'] :'ANDROID').'"><img src="view.php?text='.(isset($_GET['text']) ? $_GET['text'] :'ANDROID').'"><br />Tải về máy</a>';

echo '<br/><form method="get">Nội dung logo:<br/><input type="text" name="text" value="'.(isset($_GET['text']) ? ''.$_GET['text'].'':'FBVN.CF').'" /><br/><input type="submit" value="Tạo ngay" /></form></div>';

echo '<div class="phdr">Tool khác</div><div class="list1"><a href="/tools/apk">Tạo Logo Android</a></div>

<div class="list1"><a href="/tools/army">Tạo Logo Army</a></div><div class="list1"><a href="/tools/rocket">Tạo Logo Rocket</a></div>

<div class="list1"><a href="/tools/angry">Tạo Logo Angry bird</a></div><div class="list1"><a href="/tools/nd">Tạo Logo ngũ đế</a></div>';

include ('../end.php');

?>
