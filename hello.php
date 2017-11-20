<?php
session_start();
//$_POST['userName'] = "";
$_SESSION['Msg']=$_POST;
if(empty($_POST['userName']))
{ 
    header("Location:./index.html");exit;}
?>
<html>
    <head>
       <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="format-detection" content="telephone=no, email=no" />

		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
    </head>
    <body style="margin:0;">
            <div data-role="page" id="page9">
			<div class="index ui-page ui-page-theme-a ui-page-active">
            <img src="index.php" style="width:100%"/>
            <img src="images/zmyh.png" style="width:100%"/>
    
			</div>

    		
		</div> 
		
        
    </body>
</html>