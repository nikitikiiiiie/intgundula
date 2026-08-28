<?php

/********************************************************/
/* FORWARD												*/
/********************************************************/
if ($_SERVER['QUERY_STRING']) $query = "?".$_SERVER['QUERY_STRING'];

	require_once("lib/patTpl.class.php");


//insertStats();

header('HTTP/1.1 301 Moved Permanently');
header("Location: stage/content.php?artistic=home".$query);

exit;
?>