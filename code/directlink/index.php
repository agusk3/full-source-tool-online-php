<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tool Get Direct Link - Google Drive, Dropbox, OneDrive';
$mkey = 'Tool Get Direct Link - Google Drive, Dropbox, OneDrive , lấy link chia sẻ, link tải trực tiếp từ dịch vụ chia sẻ file nổi tiếng Google Drive , get link tải nhanh ';
include '../../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/directlink/" title="Tool Get Direct Link - Google Drive, Dropbox, OneDrive">Tool Get Direct Link - Google Drive, Dropbox, OneDrive</a></span></div> </div></div>';
echo '<div class="gmenu">Tool Get Direct Link - Google Drive, Dropbox, OneDrive . Direct link là dạng link download trực tiếp, có nghĩa là khi bạn bấm vào đường link đó nó sẽ tự động tải xuống luôn mà không cần phải click thêm một lần nào nữa.</div>';
echo '<div class="menu">
						<strong>Link hỗ trợ:</strong><br> 
						https://drive.google.com/file/d/0BwhjVbB5GFrMam8tT2ptN0FFU3c/view?usp=sharing<br />
https://www.dropbox.com/sh/bxswq8vmi8v31n6/AACtgqddh21mwbJ5mK1eNGcOa?dl=0<br />
https://onedrive.live.com/embed?cid=E5DA28800C57A84E&resid=E5DA288OOC57A84E%21126&authkey=ACrSKTVU7RjQI0M
					</div>
<form role="form" class="form-horizontal" id="form" method="post" onSubmit="return false;">  
<div class="menu">
<label for="cde">Nhập đường link được chia sẻ:</label> 
<input id="cde" onkeydown="if (event.keyCode == 13) $(\'but\').click()" placeholder="e.g., https://drive.google.com/file/d/0B0k76GMavVymS2RPY3RGTzgwVzg/view?usp=sharing" type="text" class="form-control" autofocus />

<input type="submit" id="but" value="Lấy link get" name="submit" /> 
</div><div class="list2">
<label for="linkpaste">Direct Download link:</label> 
<input id="linkpaste" readonly="" type="text" class="form-control" autofocus /></div>

<script type="text/javascript">
function $(id){return document.getElementById(id);}function generatelink(){var add = $("cde").value;var drive = add.indexOf("google.com/file/d/");var dbox = add.indexOf("dropbox.com/s");var odrive = add.indexOf("onedrive.live.com");if(drive != -1){var start = add.indexOf("d/");var end = add.indexOf("/view");var reString = add.slice(start+2, end);var link = "https://drive.google.com/uc?export=download&id="+reString+"";$("linkpaste").value = link;$("linkpaste"). select();}else if(dbox != -1){var link = add.replace("?dl=0", "?dl=1");$("linkpaste").value = link;$("linkpaste"). select();}else if(odrive != -1){var link = add.replace("redir", "download");var link = add.replace("embed", "download");$("linkpaste").value = link;$("linkpaste"). select();}else{$("linkpaste").value = "Xin lỗi, có vẻ như link bạn vừa dán chưa chia sẻ công khai hoặc không đúng! Vui lòng kiểm tra lại!";}}window.onload = function(){$("cde").focus();$("but").onclick = generatelink;};
</script></form>
</div>';

include '../list.php';
include '../../template/footer.php'; ?>