<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tool Get Link Vip Fshare';
$mkey = 'GET Link Vip Fshare.vn , Link tải fshare tốc độ cao , get link tải nhanh fshare max băng thông';
include '../../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/fshare.vn/" title="Tool Get Link Vip Fshare">Tool Get Link Vip Fshare</a></span></div> </div></div>';
echo '<div class="gmenu">Get link Fshare cho phép bạn lấy link download VIP, leech link Fshare tốc độ nhanh nhất không cần tài khoản VIP, tải nhanh link VIP Fshare miễn phí không giới hạn.</div>';
echo '<div class="menu">
<strong>Link hỗ trợ: </strong>https://www.fshare.vn/file/XEW2AZTUL3EE<br />
<form role="form" class="form-horizontal" id="form" method="post" onSubmit="return false;">  
<input type="text" name="link" id="link" placeholder="https://www.fshare.vn/file/XEW2AZTUL3EE">
<input type="submit" id="submit" value="Lấy link get" name="submit" />
</form>
<div id="listLink"></div>
</div>';

?>

<script type="text/javascript">
$(document).ready(function(){
	$("#submit").click(function(){
		$("#submit").addClass('disabled');
		$("#listLink").html('<center><img src="http://i.imgur.com/v5SUm1I.jpg" /></center>');
		getLink();
	});
	function getLink(){
		var form = $('#form')[0];
		var formData = new FormData(form);
		$.ajax({
			url: "get.php",
			type: "POST",
			data:  formData,
			contentType: false,
			cache: false,
			processData:false,
		success: function(rs)
		  {
			res = JSON.parse(rs);
			if(res.success){
				$("#submit").removeClass('disabled');
				$("#listLink").html('<div class="list1"> Link của bạn đã sẵn sàng: <br/> <a class="download" href="'+res.success.url+'" target="_blank">Download '+res.success.name+' </a></div>');
			}
			if(res.error){
				$("#submit").removeClass('disabled');
				$("#listLink").html('<br/><b style="color:red">'+res.error+'</b>');
			}
		  },
		error: function() 
		  {
		  	$("#submit").removeClass('disabled');
		  }           
		});
	}

});
</script>
<script>
$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});
</script>

<?php 
include '../list.php';
include '../../template/footer.php'; ?>