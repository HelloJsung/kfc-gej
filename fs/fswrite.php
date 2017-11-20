<?php

$path = '../json/personal.json';
$content = '"{"name":"'.$_GET['userName'].'","jobNum":"'.$_GET['userId'].'","cellPhone":"'.$_GET['phone'].'"textVal":"'.$_GET['textVal'].'"}",';
file_put_contents($path,$content,FILE_APPEND);
if (file_exists($path))
 {echo "ok";}
else
 {echo "ng";}

?>