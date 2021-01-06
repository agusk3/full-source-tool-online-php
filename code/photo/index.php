<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key = 'Tool Get Link Video Google Photo';
$mkey = 'Get Link video Mp4 của Google Photo, Get Link Video của Google Drive,code php get link video mp4 sd, hd, 320p, 480p, 720p, 1080p';
include '../../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/photo/" title="Tool Get Link Video Google Photo">Tool Get Link Video Google Photo</a></span></div> </div></div>';
echo '<div class="gmenu">Get Link Video của Google Photo,code php get link nhạc video mp4 sd, hd, 320p, 480p, 720p, 1080p.</div>';
echo '<div class="menu"><strong>Link demo:</strong> https://photos.google.com/share/AF1QipNyYyBWbThLYpt6Pjqw5Y84UvDJL8QTSO9aCPW3nEOS7cXJEFJHpXELOZpb8VpdtA/photo/AF1QipNbBQXg9A60xLs1cLoivK1LIoQbtwJvzoRuI6Ar?key=Rmg0aE1BNkFsb0Z1VG9pUDVOYlRHT3JOb0xRejlR</div> <form role="form" class="form-horizontal" id="form" method="post" onSubmit="return false;">  <div class="menu"> <input type="text" name="link" id="link" placeholder="https://photos.google.com/share/AF1QipNyYyBWbThLYpt6Pjqw5Y84UvDJL8QTSO9aCPW3nEOS7cXJEFJHpXELOZpb8VpdtA/photo/AF1QipNbBQXg9A60xLs1cLoivK1LIoQbtwJvzoRuI6Ar?key=Rmg0aE1BNkFsb0Z1VG9pUDVOYlRHT3JOb0xRejlR"> <input type="submit" id="submit" value="Get Link"></form>
<div id="listLink"></div></div>'; ?>
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
				$("#listLink").html('<b style="color:red">ERROR</b>');
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
include '../../template/footer.php'; ?>