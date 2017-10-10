<?php
	$noidung=mysql_query("select * from logo where id='1'");
	$row=mysql_fetch_array($noidung);
	echo $row['noidung'];
?>