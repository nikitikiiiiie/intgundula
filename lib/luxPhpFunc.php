<?php

/********************************************************/
/* MYSQL FUNCTIONS					*/
/********************************************************/
function db_assoc($sql) {
	$result = mysql_query($sql);
	if ($result) {
		while ($tmp = mysql_fetch_array($result,MYSQL_ASSOC)) {
			$arr[]=$tmp;
		}
	}
	//echo mysql_errno() . ": " . mysql_error(). "\n"; 
	return $arr;
}

function db_assocOne($sql) {
	$result = mysql_query($sql);
	if ($result) {
		while ($tmp = mysql_fetch_array($result,MYSQL_ASSOC)) {
			$arr[]=$tmp;
		}
	}
	//echo mysql_errno() . ": " . mysql_error(). "\n"; 
	$arr = $arr[0];
	return $arr;
}

function db_list($sql) {
	$result = mysql_fetch_row(mysql_query($sql));
	if ($result) {
		return $result[0];
	} else {
		return false;
		//echo mysql_errno() . ": " . mysql_error(). "\n";
	}
	
}

function db_query($sql) {
	$result = mysql_query($sql) or die(mysql_error());
	return $result;
}



/********************************************************/
/* REUSED FUNCTIONS					*/
/********************************************************/

function outputHTML($ets,$tpl) {
	printt($ets,$tpl);
	$_SESSION['last_ets'] = $ets;
	$_SESSION['last_tpl'] = $tpl;
	CloseDataBase();
	exit;
}

/* check email and if host exists */
function email_check($mail) {
	if (!preg_match("/^([a-z0-9\.\_\-]+)@([a-z0-9\.\_\-]+)\.[a-z]{2,4}$/i", $mail)) {
		return false;
	} else {
		list ($mail_user, $mail_host) = explode ("@", $mail);
		if ($mail == "deine@email.ch") {
			return false;
		} elseif ((checkdnsrr($mail_host, "MX") || checkdnsrr($mail_host, "A")) && $mail_user) {
			return true;
		} else {
			return false;
		}
	}
}

function is_odd($tmp) {
	if (is_int($tmp / 2)) {
		return false;
	} else {
		return true;
	}
} 

function formatTime($tmp) {

	// datetime from mysql: "2003-09-17 16:33:00" 
	$year = substr($tmp,0,4);
	$mon = substr($tmp,5,2);
	$day = substr($tmp,8,2); 
	$hour = substr($tmp,11,2); 
	$min = substr($tmp,14,2); 
	$sec = substr($tmp,17,2); 
	$tmp = date("H:i", mktime($hour, $min, $sec,  $mon, $day, $year)); 

	return $tmp;
}

function formatShortDate($tmp) {

	// datetime from mysql: "2003-09-17 16:33:00" 
	$year = substr($tmp,0,4);
	$mon = substr($tmp,5,2);
	$day = substr($tmp,8,2); 
	$hour = substr($tmp,11,2); 
	$min = substr($tmp,14,2); 
	$sec = substr($tmp,17,2); 
	$tmp = date("d.m.y", mktime($hour, $min, $sec,  $mon, $day, $year)); 

	return $tmp;
}

function formatShortDateEn($tmp) {

	// datetime from mysql: "2003-09-17 16:33:00" 
	$year = substr($tmp,0,4);
	$mon = substr($tmp,5,2);
	$day = substr($tmp,8,2); 
	$hour = substr($tmp,11,2); 
	$min = substr($tmp,14,2); 
	$sec = substr($tmp,17,2); 
	$tmp = date("m.d.y", mktime($hour, $min, $sec,  $mon, $day, $year)); 

	return $tmp;
}

function formatDateTime($tmp) {

	// datetime from mysql: "2003-09-17 16:33:00" 
	$year = substr($tmp,0,4);
	$mon = substr($tmp,5,2);
	$day = substr($tmp,8,2); 
	$hour = substr($tmp,11,2); 
	$min = substr($tmp,14,2); 
	$sec = substr($tmp,17,2); 
	$tmp = date("d.m.Y H:i ", mktime($hour, $min, $sec,  $mon, $day, $year)); 

	return $tmp;
}


function niceText($text) {
    $text = trim($text);
    //$text = htmlentities($text);
    $text = eregi_replace("(http://)([%a-z0-9:0-9/@.\_\~\?\=\&,\-]+)","<nobr><a href=\"\\1\\2\" target=\"_blank\" class=\"pink10\">\\2</a></nobr>",$text);
    $text = eregi_replace("([%a-z0-9.\_\-]+@[%a-z0-9.\_\-]+)","<nobr><a href=\"mailto:\\1\" class=\"pink10\">\\1</a></nobr>",$text);
    $text = str_replace("\n", "<br>", $text);
    $text = str_replace("\n", "", $text);
    $text = str_replace("\r", "", $text);
    
    return $text;
}

function wordCut($tmp,$length) {
	//$tmp = niceText($tmp);
	$tmp = split(" ",$tmp);
	for ($y = 0; $y <= $length; $y++) {
		$cut .= $tmp[$y]." ";
	}
	return $cut;
}

function letterCut($tmp,$length) {
	$tmp = substr($tmp, 0, $length);
	$tmp .= "...";
	//$tmp = niceText($tmp);
	return $tmp;
}

function comboCut($tmp,$length) {
	if (strlen($tmp) <= $length) {
		return $tmp;
	}
	$tmp = substr($tmp, 0, $length);
	
	$tmp = split(" ",$tmp);
	for ($y = 0; $y <= count($tmp)-2; $y++) {
		$cut .= $tmp[$y]." ";
	}
	//$cut .= "...";
	return $cut;
}

function setMime($tmp) {
	if ($tmp == "application/pdf") {
		$mime = "pdf";
	} elseif ($tmp == "application/octet-stream") {
		$mime = "excel";
	} elseif ($tmp == "application/rtf") {
		$mime = "txt";
	} elseif ($tmp == "application/msword") {
		$mime = "word";
	} elseif ($tmp == "text/plain") {
		$mime = "txt";
	}
	return $mime;
}

function writeFile($filename,$txt,$path) {

	if (!$txt) {
		return "Keine Beschreibung vorhanden.";
	} else {
		//if (system("touch ".$$path.$filename)) {
		$fh = fopen($path."nl_log_".$filename.".txt", "w") or die("Could not open file"); 
		fwrite($fh, $txt." ") or die("Could not write to file"); 
		fclose($fh);
		return $path.$filename;

	}
	
	// print file permissions 
	//echo "File permissions: <b>".fileperms($path.$filename) . "</b><br>"; 
}
?>