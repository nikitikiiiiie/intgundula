<?php

if (!$_GET[lang]) {
	$_SESSION[lang] = "de";
}

if ($_GET[lang]) {
	$_SESSION[lang] = $_GET[lang];
} else {
	$_SESSION[lang] = "de";
}

//echo "session language: ".$_SESSION[lang];
require_once("lang_".$_SESSION[lang].".php");

?>