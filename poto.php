<?php
if(isset($_POST['data'])) {
	$base64_string = $_POST['data'];
	$img = base64_decode($base64_string);
	$rand = rand(1000, 9999); 
    $pics = date("YmdHis") . $rand . stristr($picname,"."); //命名图片名称
    $filePut = "upload/".$pics.'.jpg';
	$n = file_put_contents($filePut, $img);
	setcookie("filePic",$filePut, time()+3600*24);
}else{
	echo "Error";
}
?>