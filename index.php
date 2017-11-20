<?php

session_start();
header("content-type:image/jpeg");
$name=$_SESSION['Msg']['userName'];
if(empty($_COOKIE[md5($name.'bg')])){
	$filename="pic/1.jpg";
	setcookie(md5($name.'bg'),$filename,time()+3600);
}else{
	$filename=$_COOKIE[md5($name.'bg')];
}
//$filename="pic/18.jpg";
$src_img = $_COOKIE["filePic"];
list($w,$h)=getimagesize($filename);
$img=imagecreatefromjpeg($filename);
$color=imagecolorallocate($img,225,0,0);
//imagettftext($img,22,0,205,65, $color, "ZZGF.OTF",$name);
list($width,$height)=getimagesize($src_img);
$src=imagecreatefromjpeg($src_img);
imagecopyresized($img,$src,90,472,0,0,504,482, $width, $height);
imagejpeg($img);
?>