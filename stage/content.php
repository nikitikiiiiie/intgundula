<?php

session_start();

require_once("../lib/patTpl.class.php");
//require_once("lang_".$_SESSION[lang].".php");
require_once("lang_de.php");

/********************************************************/
/* PREPARE TPL-OBJECT					*/
/********************************************************/
$TPL = new patTemplate();
$TPL->setBasedir( "../tpl" );
$TPL->readTemplatesFromFile( "main.tpl" );
$TPL->readTemplatesFromFile( "navi_applied.tpl" );
$TPL->readTemplatesFromFile( "navi_artistic.tpl" );
$TPL->readTemplatesFromFile( "content.tpl" );
$tplName = "main";


/********************************************************/
/* MULTILANGUAGE ITEM					*/
/********************************************************/

$TPL->addVar( "main", "HEAD_TITLE", $language[head_title]);
$TPL->addVar( "main", "META_LANG", $language[meta_lang]);
$TPL->addVar( "main", "DATE_UPDATE", $language[date_update]);

if($_GET[artistic] == "home"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_home", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[home_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[home_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[home_txt1]);
}

elseif($_GET[artistic] == "mels"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_mels", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[mels_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[mels_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[mels_txt1]);
}

elseif($_GET[artistic] == "zebra"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_zebra", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[zebra_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[zebra_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[zebra_txt1]);
}

elseif($_GET[artistic] == "mama"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_mama", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[mama_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[mama_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[mama_txt1]);
}

elseif($_GET[artistic] == "king"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_king", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[king_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[king_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[king_txt1]);
}

elseif($_GET[artistic] == "werdenberg"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_werdenberg", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[werdenberg_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[werdenberg_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[werdenberg_txt1]);
}

elseif($_GET[artistic] == "vilnius"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_vilnius", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[vilnius_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[vilnius_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[vilnius_txt1]);
}

elseif($_GET[artistic] == "vampires"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_vampires", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[vampires_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[vampires_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[vampires_txt1]);
}

elseif($_GET[artistic] == "simulant"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_simulant", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[simulant_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[simulant_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[simulant_txt1]);
}

elseif($_GET[artistic] == "trimaginaziun"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_trimaginaziun", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[trimaginaziun_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[trimaginaziun_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[trimaginaziun_txt1]);
}

elseif($_GET[artistic] == "usche_ditg"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_usche_ditg", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[usche_ditg_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[usche_ditg_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[usche_ditg_txt1]);
}

elseif($_GET[artistic] == "rgdc17"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_rgdc17", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[rgdc17_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[rgdc17_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[rgdc17_txt1]);
}

elseif($_GET[artistic] == "picknick"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_picknick", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[picknick_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[picknick_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[picknick_txt1]);
}

elseif($_GET[artistic] == "gschichtechischte"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_gschichtechischte", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[gschichtechischte_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[gschichtechischte_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[gschichtechischte_txt1]);
}

elseif($_GET[artistic] == "cresta"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_cresta", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[cresta_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[cresta_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[cresta_txt1]);
}

elseif($_GET[artistic] == "tramjam"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_tramjam", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[tramjam_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[tramjam_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[tramjam_txt1]);
}

elseif($_GET[artistic] == "superalgo"){
	$TPL->setAttribute("navi_applied", "visibility", "visible");
	$TPL->addVar( $tplName, "NAVI_APPLIED", $TPL->getParsedTemplate("navi_applied"));
	$TPL->setAttribute("navi_artistic", "visibility", "visible");
	$TPL->addVar( "navi_artistic", "status_superalgo", "_over" );
	$TPL->addVar( $tplName, "NAVI_ARTISTIC", $TPL->getParsedTemplate("navi_artistic"));
	$TPL->addVar( "content", "CONTENT_TITLE", $language[superalgo_title]);
	$TPL->addVar( "content", "CONTENT_PIX1", $language[superalgo_pix1]);
	$TPL->addVar( "content", "CONTENT_TXT1", $language[superalgo_txt1]);
}

$TPL->setAttribute("content", "visibility", "visible");
$TPL->addVar( $tplName, "CONTENT", $TPL->getParsedTemplate("content"));

// }
/********************************************************/
/* FINISCH MAKE OUTPUT					*/
/********************************************************/
$TPL->displayParsedTemplate($tplName);
//$TPL->dump();
?>


