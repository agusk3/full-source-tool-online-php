<?php
/**
 * Code by Nguyễn Hữu Đạt - J2team
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */

error_reporting(0);

function gettoken()
{
	$headers = array();
	$headers[] = 'Content-Type: application/x-www-form-urlencoded';
	$headers[] = 'Host: graph.nhaccuatui.com';
	$headers[] = 'Connection: Keep-Alive';
	
	
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://graph.nhaccuatui.com/v1/commons/token");
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST,false);
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($c, CURLOPT_POST, 1);
	curl_setopt($c, CURLOPT_POSTFIELDS, "deviceinfo=%7B%22DeviceID%22%3A%22dd03852ada21ec149103d02f76eb0a04%22%2C%22DeviceName%22%3A%22AppTroLyBeDieu%22%2C%22OsName%22%3A%22WINDOWS%22%2C%22OsVersion%22%3A%228.0%22%2C%22AppName%22%3A%22NCTTablet%22%2C%22AppTroLyBeDieu%22%3A%221.3.0%22%2C%22UserName%22%3A%220%22%2C%22QualityPlay%22%3A%22128%22%2C%22QualityDownload%22%3A%22128%22%2C%22QualityCloud%22%3A%22128%22%2C%22Network%22%3A%22WIFI%22%2C%22Provider%22%3A%22NCTCorp%22%7D&md5=ebd547335f855f3e4f7136f92ccc6955&timestamp=1499177482892");


	$page = curl_exec($c);
	curl_close($c);
	
	$infotoken = json_decode($page);
	$token = $infotoken->data->accessToken;
	return $token;
}


function getlink($idbaihat,$token)
{
	//echo $idbaihat;
	$linklist = 'https://graph.nhaccuatui.com/v1/songs/'.$idbaihat.'?access_token='.$token;
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, $linklist);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST,false);
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

	$page = curl_exec($c);
	curl_close($c);
	
	$data = json_decode($page);
	return $data;
}


$key = 'Tool Get Link Download NhacCuaTui.Com';
$mkey = 'Tìm nhạc và lấy link tải mp3 nhaccuatui , Tải nhạc 320kbs, lossness miễn phí cho mobile, Lấy link , download   mp3 nhaccuatui.';
include '../../template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/nhaccuatui/" title="Tool Get Link NhacCuaTui.Com">Tool Get Link NhacCuaTui.Com</a></span></div> </div></div>';
echo '<div class="gmenu">GetLink nhạc Lossless, 320Kbs Trên NhacCuaTui.</div>';
echo '<div class="menu">
<strong>Link hỗ trợ: </strong>http://www.nhaccuatui.com/bai-hat/yeu-la-tha-thu-em-chua-18-ost-onlyc.vmjlLAAxhof5.html<br/></div>';
echo '<div class="list1"><form class="form-horizontal" action="" method="POST">
<input id="url" name="url" placeholder="Nhập link Bài hát của NhacCuaTui" class="form-control input-md" placeholder="http://www.nhaccuatui.com/bai-hat/yeu-la-tha-thu-em-chua-18-ost-onlyc.vmjlLAAxhof5.html" type="text">
<button id="Submit" name="submit" value="submit" class="btn btn-primary">Get link</button></form> </div>';
					if(isset($_POST['url']))
					{
echo '<link rel="stylesheet" type="text/css" href="audioplayerengine/initaudioplayer-1.css">
<div class="menu"><div class="col-md-12" style="text-align: center;">';
						$url = $_POST['url'];
						$temp = explode(".",$url);
						$idbaihat = trim($temp[3]);
						if($idbaihat != "")
						{
							$token = gettoken();
							if($token != "")
							{
								$data = getlink($idbaihat,$token);

								$linkplay = $data->data->{7};
								$link128 = $data->data->{11};
								$link320 = $data->data->{12};
								$linklossless = $data->data->{19};
								$thumbnail = $data->data->{8};
								$tenbaihat = $data->data->{2};
								$casy = $data->data->{3};
								if($tenbaihat != "")
								{
									$tenfile = "$tenbaihat - $casy";
									$msg.= '<div style="margin:12px auto;">
										<div id="amazingaudioplayer-1" style="display:block;position:relative;width:300px;height:300px;margin:0px auto 0px;">
											<ul class="amazingaudioplayer-audios" style="display:none;">
												<li data-artist="" data-title="'.$tenbaihat.' - '.$casy.'" data-album="" data-info="" data-image="'.$thumbnail.'" data-duration="0">
													<div class="amazingaudioplayer-source" data-src="'.$linkplay.'" data-type="audio/mpeg" />
												</li>
											</ul>
										</div>
									</div>';

									$msg.= ' <a target="_banks" href="'.$link128.'"><button type="button" class="btn btn-success"><i class="fa fa-cloud-download"></i> 128 Kbps</button></a> ';

									$msg.= ' <a target="_banks" href="'.$link320.'"><button type="button" class="btn btn-success"><i class="fa fa-cloud-download"></i> 320 Kbps</button></a> ';

									$msg.= ' <a target="_banks" href="'.$linklossless.'"><button type="button" class="btn btn-success"><i class="fa fa-cloud-download"></i> Lossless</button></a> ';

									echo $msg;
								}
								else
								{
									echo "Lỗi cmnr: Không thể get bài này!!";
								}
							}
							else
							{
								echo "Lỗi cmnr: tạo token!";
							}
						}
						else
						{
							echo "Lỗi cmnr: Không tìm thấy ID bài hát! Link phải có dạng: http://www.nhaccuatui.com/bai-hat/yeu-la-tha-thu-em-chua-18-ost-onlyc.vmjlLAAxhof5.html";
						}
						
					}

					?>
			
			</div>
			
		  </div>
<script src="audioplayerengine/amazingaudioplayer.js"></script>
<script src="audioplayerengine/initaudioplayer-1.js"></script>
	
	


<?php
include '../list.php';
include '../../template/footer.php';
?>