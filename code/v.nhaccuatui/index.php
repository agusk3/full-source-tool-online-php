<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tool Get Link Video Mp4 V.NhacCuaTui.Com';
$mkey = 'Get Link Nhạc 128kbps và 320kbps, video Mp4 của Nhaccuatui.com, Get Link Video của v.nhaccuatui.com,code php get link nhạc video mp4 sd, hd, 320p, 480p, 720p, 1080p';
include '../../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/v.nhaccuatui/" title="Tool Get Link Video V.NhacCuaTui.Com">Tool Get Link Video V.NhacCuaTui.Com</a></span></div> </div></div>';
echo '<div class="gmenu">Get Link Video của v.nhaccuatui.com,code php get link nhạc video mp4 sd, hd, 320p, 480p, 720p, 1080p.</div>';
echo '<div class="menu">
<strong>Link hỗ trợ:</strong><br> 
Video: http://v.nhaccuatui.com/video/ngoc-trinh-da-tro-lai-sexy-het-co-roi-day.BivRxOoHLR0vg.html </div>
<form role="form" class="form-horizontal" id="form" method="post" onSubmit="return false;">  <div class="menu"> <input type="text" name="link" id="link" placeholder="http://v.nhaccuatui.com/video/ngoc-trinh-da-tro-lai-sexy-het-co-roi-day.BivRxOoHLR0vg.html"> <input type="submit" id="submit" value="Get Link" name="submit" />  </form>  <div id="listLink"></div>
 </div>';
?>

<script type="text/javascript">
$(document).ready(function(){
	$("#submit").click(function(){
		$("#submit").addClass('disabled');
		$("#listLink").html('<center><img src="http://i.imgur.com/v5SUm1I.jpg" /></center>');
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
				$("#listLink").html(res.success);
			}
			if(res.error){
				$("#submit").removeClass('disabled');
				$("#listLink").html('<b style="color:red">Lỗi cmnr thím ơi!</b>');
			}
		  },
		  error: function() 
		  {
		  }           
		});
	});
});
</script>
<?php
include '../list.php';
include '../../template/footer.php';
?>