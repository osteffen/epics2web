<?php
	$content = file_get_contents("http://a2slowcontrol1.online.a2.kph:8081/".$_SERVER[QUERY_STRING]); 
	echo $content;
?>
