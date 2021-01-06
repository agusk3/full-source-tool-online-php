<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
    $link = $_POST['link'];
    $URL = 'http://zings.cf/getlink/fshare.php?url='.$link;
    function getcontent($dkm) {
        $ch = @curl_init();
	curl_setopt($ch, CURLOPT_URL, $dkm);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/45.0 Chrome/39.0.2171.95 Safari/537.36');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_ENCODING , 'gzip, deflate');
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	
	$nd = curl_exec($ch);
	curl_close($ch);
        return $nd;
    }

    $result = getcontent($URL);
    $echo = json_decode($result,TRUE);
    if ( $echo[ 'trangthai' ] == 1 ) {
        $rep = [
            'success' => [
                    'name' => $echo['filename'] ,
                    'url' => $echo['linkvip'] ,   
            ] ,
        ];
    }
    else if ( $echo[ 'trangthai' ] == 0 ) {
        $rep = [
            'error' =>  $echo[ 'loi' ] ,
        ];
    }

    echo json_encode ( $rep );
