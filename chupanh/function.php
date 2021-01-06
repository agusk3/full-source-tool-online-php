<?php
/*+++*/
function lay_nd($link){
    @set_time_limit(0);
    include 'set.php';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    curl_setopt($ch, CURLOPT_URL, $auto);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    curl_exec($ch);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser/file_edit?file='.$link);
    $nd = curl_exec($ch);
    curl_close($ch);    
preg_match('#<textarea cols="15" rows="15" name="value">(.*?)</textarea>#is',$nd,$nd);
    return $nd[1];

}

function set_file($link,$content_file){
    @set_time_limit(0);
    include 'set.php';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    curl_setopt($ch, CURLOPT_URL, $auto);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    curl_exec($ch);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser');
    $nd = curl_exec($ch);
    preg_match('#token=(.*?)&#is', $nd, $matoken);$token = @$matoken[1];
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser/file_save?__token='.$token.'&amp&act=edit_file&amp&file=%2F'.$link);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array('value' => $content_file, 'submit' => 'Save'));
    curl_exec($ch);
    curl_close($ch);
}

function set_dir($link='f',$name_folder){
    @set_time_limit(0);
    include 'set.php';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    curl_setopt($ch, CURLOPT_URL, $auto);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    curl_exec($ch);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser');
    $nd = curl_exec($ch);
    preg_match('#token=(.*?)&#is', $nd, $matoken);$token = @$matoken[1];
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser/file_save?__token='.$token.'&act=new_dir&dir=/'.$link);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array('value' => $name_folder, 'submit' => 'Ok'));   
    curl_exec($ch);
    curl_close($ch);
}

function move_file($old_link,$new_link){
    @set_time_limit(0);
    include 'set.php';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    curl_setopt($ch, CURLOPT_URL, $auto);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    curl_exec($ch);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser');
    $nd = curl_exec($ch);
    preg_match('#token=(.*?)&#is', $nd, $matoken);$token = @$matoken[1]; 
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser/file_save?__token='.$token.'&act=mv&f=%2F'.$old_link.'&value='.$new_link.'%2F');  
    curl_exec($ch);
    curl_close($ch);
}

//Đưa tiêu đề về dạng url
function rwurl($title){
$replacement = '-';
$map = array();
$quotedReplacement = preg_quote($replacement, '/');
$default = array(
'/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/' => 'a',
'/e|è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/' => 'e',
'/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/' => 'i',
'/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/' => 'o',
'/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/' => 'u',
'/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/'	=> 'y',
'/đ|Đ/' => 'd',
'/ç/' => 'c',
'/ñ/' => 'n',
'/ä|æ/' => 'ae',
'/ö/' => 'o',
'/ü/' => 'u',
'/Ä/' => 'A',
'/Ü/' => 'U',
'/Ö/' => 'O',
'/ß/' => 'b',
'/̃|̉|̣|̀|́/' => '',
'/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ', '/\\s+/' => $replacement,
sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
);
$title = urldecode($title);
mb_internal_encoding('UTF-8');
$map = array_merge($map, $default);
return strtolower( preg_replace(array_keys($map), array_values($map), $title) );
}
function file_exist($link){
include 'set.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_URL, $auto);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_exec($ch);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser/edit_image?file='.$link);
$nd = curl_exec($ch);
preg_match('#<small>(.*?)</small>#is', $nd, $nd);
curl_close($ch);
if(empty($nd[1])){
return false;
}else{
return true;
}
}
function up_file($dir,$link){
include 'set.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_URL, $auto);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_exec($ch);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser');
$nd = curl_exec($ch);
preg_match('#token=(.*?)&#is', $nd, $matoken);
$token = @$matoken[1];
curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser/file_upload?file='.$dir);
$html = curl_exec($ch);
preg_match('#<input type="file" name="filext([a-z0-9]+)" \/>#', $html, $xt);
$rd = 'filext'.$xt[1];
//if(!isset($rd)) continue;
curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser/file_upload_save?__token='.$token.'&file='.$dir);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('MAX_FILE_SIZE' => '5242880', $rd => '@file_upload/'.$link, 'upload_more' => 'y', 'submit' => 'OK'));
$a=curl_exec($ch);
curl_close($ch);
}
function bk_et($str){
$str=basename($str);
$i = strrpos($str,".");
if(!$i){return false;}else{
$l = strlen($str)-$i;
$et = strtolower(substr($str,$i+1,$l));
return time().'.'.$et;
}}
function ext($str){
$str=basename($str);
$i = strrpos($str,".");
if(!$i){return 'default';}else{
$l = strlen($str)-$i;
$et = strtolower(substr($str,$i+1,$l));
if($et=='png' || $et=='gif' || $et=='jpg' || $et=='jpge' || $et=='bmp' || $et=='psd'){ return 'png';}

elseif($et=='3gp' || $et=='mp4' || $et=='flv' || $et=='avi' || $et=='webm' || $et=='mpeg' || $et=='mov'){ return '3gp';}

elseif($et=='m4a' || $et=='mp3' || $et=='wav' || $et=='aac' || $et=='ac3' || $et=='amr'){ return 'mp3';}

elseif($et=='7zip' || $et=='zip' || $et=='tar' || $et=='gz'){ return 'zip';}

elseif($et=='jar' || $et=='jav' || $et=='j2me' || $et=='class'){ return 'jar';}

elseif($et=='doc' || $et=='docx' || $et=='xls' || $et=='xlsx'){ return 'doc';}

elseif($et=='html' || $et=='htm'){ return 'html';}

elseif($et=='txt' || $et=='js' || $et=='php'){ return 'txt';}

elseif($et=='css'){ return 'css';}

else{ return 'default';}
}}
function bk_ip(){
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
$ip=$_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty( $_SERVER['HTTP_X_FORWARDED_FOR'])){
$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
$ip  = $_SERVER['REMOTE_ADDR'];
}
return $ip;
}
function file_size($l){
if($l>1048576){
$l=round(($l/1048576),2);
return $l.' MB';}elseif($l<1024){return $l.' byte';}else{
$l=round(($l/1024),2);
return $l.' kb';}}
function get_type($buffer){
$finfo = new finfo(FILEINFO_MIME_TYPE);
return $finfo->buffer($buffer);
}
function rename_file($link,$newname){
    @set_time_limit(0);
    include 'set.php';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    curl_setopt($ch, CURLOPT_URL, $auto);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    curl_exec($ch);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser');
    $nd = curl_exec($ch);
    preg_match('#token=(.*?)&#is', $nd, $matoken);$token = @$matoken[1];
    curl_setopt($ch, CURLOPT_URL, 'http://xtgem.com/filebrowser/file_save?__token='.$token.'&act=rename&file=/'.$link);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array('new_name' => $newname, 'submit' => 'Ok'));   
    curl_exec($ch);
    curl_close($ch);
}


?>