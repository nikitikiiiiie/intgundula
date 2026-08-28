<?php

session_start();

require_once("../lib/patTpl.class.php");

require_once("lang.php");

/********************************************************/
/* LANGUAGE SWITCH										*/
/********************************************************/
if ($_GET['lang']) header("Location: home.php");

/********************************************************/
/* PREPARE TPL-OBJECT					*/
/********************************************************/
$TPL = new patTemplate();
$TPL->setBasedir( "../tpl" );
$TPL->readTemplatesFromFile( "main_intro.tpl" );
$TPL->readTemplatesFromFile( "header.tpl" );
$TPL->readTemplatesFromFile( "langswitch.tpl" );
$tplName = "main_intro";


/********************************************************/
/* MULTILANGUAGE ITEM					*/
/********************************************************/

$TPL->setAttribute("header_intro", "visibility", "visible");
$TPL->addVar( "header_intro", "TABLEWIDTH", "1040");
$TPL->addVar( $tplName, "HEADER", $TPL->getParsedTemplate("header_intro"));

$TPL->setAttribute("langswitch", "visibility", "visible");
$TPL->addVar( $tplName, "CONTENT", $TPL->getParsedTemplate("langswitch"));

// }
/********************************************************/
/* FINISCH MAKE OUTPUT					*/
/********************************************************/
$TPL->displayParsedTemplate($tplName);
//$TPL->dump();
?>


