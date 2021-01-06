<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
if (isset($_POST['link'])) {
	$link = $_POST['link'];
	$link = trim($link);
    if(preg_match('/http\:\/\/(www\.)?v\.nhaccuatui\.com\/*/', $link)) {
        $getListMp4 = getListMp4($link);
    }
    if($getListMp4){
        $return['success'] = '<div class="gmenu"><b>Kết quả:</b></div>';
        $value = $getListMp4;
            if($value['link720'])  
                $return['success'].= '<div class="menu"><span style="font-weight: bold;">Link 720p:</span> <a href="' . $value['link720'] . '" target="_blank">'.$value['link720'].'</a></div>';
            if($value['link480'])  
                $return['success'].= '<div class="menu"><span style="font-weight: bold;">Link 480p:</span> <a href="' . $value['link480'] . '" target="_blank">'.$value['link480'].'</a></div>';
            if($value['link360'])  
                $return['success'].= '<div class="menu"><span style="font-weight: bold;">Link 360p:</span> <a href="' . $value['link360'] . '" target="_blank">'.$value['link360'].'</a></div>';
            if($value['title'])
                $return['success'].= '<div class="menu"><span style="font-weight: bold;">Title:</span> ' . $value['title'] . '</div>';
            if($value['image'])
                $return['success'].= '<div class="menu"><span style="font-weight: bold;">Image:</span> <img src="' . $value['image'] . '"/></div>';
    }else{
        $return['error'] = 1;
    }
	echo json_encode($return);
}

function getListMp4($link){
    $content = curl($link); // đọc nội dung trang
    $return = array();
    preg_match("/xmlURL \= \"(.*)\"/",$content,$arr_preg); // tìm key
    if($arr_preg){
        $linkXML = $arr_preg[1]; // tách key trong chuỗi vừa tìm được
        $xml_data = curl($linkXML); // đọc nội dung trang xml
        $xml_string = str_replace("<![CDATA[","",$xml_data); // loại bỏ <![CDATA[
        $xml_string = str_replace("]]>","",$xml_string); // loại bỏ ]]>
        $xml_string=preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $xml_string);
        $xml_arr = json_decode(json_encode((array) simplexml_load_string($xml_string)), 1); // chuyển đổi thành mảng
        if($xml_arr['track']['item'][0]){
            $arrItem = $xml_arr['track']['item'][0];
            $item = $arrItem;
                $return['link480']   = $item['location']; // link video 480p
                $return['link360']   = $item['lowquality']; // link video 480p
                $return['link720']   = $item['highquality']; // link video 480p
                $return['title']     = $item['title']; // title
                $return['image']     = $item['image']; // link image
        }
    }
    return $return;
}

function curl($url)
{
	$ch = @curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Expect:'
	));
	$page = curl_exec($ch);
	curl_close($ch);
	return $page;
}
?>
