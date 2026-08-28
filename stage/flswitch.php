<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>NACHBEBEN - Ein Film von Stina Werenfels</title>
<!-- Metaangaben Normalform -->
<meta name="keywords" content="Nachbeben, Banker, Zürich, Stina Werenfels, Zürich, Goldküste">
<meta name="description" content="Samir, Dschoint Ventschr Filmproduktion AG Zürich">
<meta name="audience" content="alle">
<meta name="expires" content="NEVER">
<meta NAME="robots" content="index, follow">
<meta NAME="author" content="Stina Werenfels, Dschoint Ventschr Filmproduktion AG Zürich / int.gundula.ch / Niki Schawalder">
<meta http-equiv="content-language" content="de">
<meta name="revisit-after" content="5 days">
<meta NAME="abstract" content="Ein Grillabend unter Bankern voll Intrigen und Verrat">
<meta http-equiv="pragma" content="no-cache">
<!-- Metaangaben nach DublinCore Prinzip -->
<meta name="DC.Title" content="Stina Werenfels, Dschoint Ventschr Filmproduktion AG Zürich">
<meta name="DC.Creator" content="Stina Werenfels, Dschoint Ventschr Filmproduktion AG Zürich / int.gundula.ch / Niki Schawalder">
<meta name="DC.Publisher" content="Stina Werenfels, Dschoint Ventschr Filmproduktion AG Zürich">
<meta name="DC.Subject" content="Ein Grillabend unter Bankern voll Intrigen und Verrat">
<meta name="DC.Identifier" content="http://www.nachbeben.ch">
<meta name="DC.Rights" content="http://www.www.nachbeben.ch/index.php">


<SCRIPT LANGUAGE="JavaScript" type="text/javascript">
<!--
// moock fpi [f.lash p.layer i.nspector]
// version: 1.3.7
// written by colin moock
// code maintained at: http://www.moock.org/webdesign/flash/detection/moockfpi/
// terms of use posted at: http://www.moock.org/terms/



// =============================================================================
// These are the user defined globals.
// Modify the following variables to customize the inspection behaviour.

var requiredVersion = 7;   // Version the user needs to view site (max 9, min 2)
var useRedirect = true;    // Flag indicating whether or not to load a separate
                           // page based on detection results. Set to true to
                           // load a separate page. Set to false to embed the
                           // movie or alternate html directly into this page.
                           
// Only set next three vars if useRedirect is true...

<?php
if ($_SERVER['QUERY_STRING']) $query = "?".$_SERVER['QUERY_STRING'];
?>

var flashPage   = "langswitch.php<?= $query ?>"    // The location of the flash movie page
var noFlashPage = "langswitch.php<?= $query ?>&mode=noflash"  // Page displayed if the user doesn't have the
                                  // plugin or we can't detect it.
var upgradePage = "upgrade.htm"  // Page displayed if we detect an old plugin
// =============================================================================



// *************
// Everything below this point is internal until after the BODY tag.
// Do not modify! Proceed to the BODY tag for further instructions.
// *************

// System globals
var flash2Installed = false;    // boolean. true if flash 2 is installed
var flash3Installed = false;    // boolean. true if flash 3 is installed
var flash4Installed = false;    // boolean. true if flash 4 is installed
var flash5Installed = false;    // boolean. true if flash 5 is installed
var flash6Installed = false;    // boolean. true if flash 6 is installed
var flash7Installed = false;    // boolean. true if flash 7 is installed
var flash8Installed = false;    // boolean. true if flash 8 is installed
var flash9Installed = false;    // boolean. true if flash 9 is installed
var maxVersion = 9;             // highest version we can actually detect
var actualVersion = 0;          // version the user really has
var hasRightVersion = false;    // boolean. true if it's safe to embed the flash movie in the page
var jsVersion = 1.0;            // the version of javascript supported

// -->
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript1.1" type="text/javascript">
<!--

// Check the browser...we're looking for ie/win
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;    // true if we're on ie
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false; // true if we're on windows


// This is a js1.1 code block, so make note that js1.1 is supported.
jsVersion = 1.1;

// Write vbscript detection on ie win. IE on Windows doesn't support regular
// JavaScript plugins array detection.
if(isIE && isWin){
  document.write('<SCR' + 'IPT LANGUAGE=VBScript\> \n');
  document.write('on error resume next \n');
  document.write('flash2Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.2"))) \n');
  document.write('flash3Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.3"))) \n');
  document.write('flash4Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.4"))) \n');
  document.write('flash5Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.5"))) \n');  
  document.write('flash6Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.6"))) \n');  
  document.write('flash7Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.7"))) \n');
  document.write('flash8Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.8"))) \n');
  document.write('flash9Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.9"))) \n');
  document.write('<\/SCR' + 'IPT\> \n'); // break up end tag so it doesn't end our script
}
// -->
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript" type="text/javascript">
<!--

// Next comes the standard javascript detection that uses the 
// navigator.plugins array. We pack the detector into a function so that 
// it preloads before being run.

function detectFlash() {  
  // If navigator.plugins exists...
  if (navigator.plugins) {
    // ...then check for flash 2 or flash 3+.
    if (navigator.plugins["Shockwave Flash 2.0"]
        || navigator.plugins["Shockwave Flash"]) {

      // Some version of Flash was found. Time to figure out which.
      
      // Set convenient references to flash 2 and the plugin description.
      var isVersion2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
      var flashDescription = navigator.plugins["Shockwave Flash" + isVersion2].description;

      // DEBUGGING: uncomment next line to see the actual description.
      // alert("Flash plugin description: " + flashDescription);
      
      // A flash plugin-description looks like this: Shockwave Flash 4.0 r5
      // We can get the major version by grabbing the character before the period
      // note that we don't bother with minor version detection. 
      // Do that in your movie with $version or getVersion().
      var flashVersion = parseInt(flashDescription.substring(16));

      // We found the version, now set appropriate version flags. Make sure
      // to use >= on the highest version so we don't prevent future version
      // users from entering the site.
      flash2Installed = flashVersion == 2;    
      flash3Installed = flashVersion == 3;
      flash4Installed = flashVersion == 4;
      flash5Installed = flashVersion == 5;
      flash6Installed = flashVersion == 6;
      flash7Installed = flashVersion == 7;
      flash8Installed = flashVersion == 8;
      flash9Installed = flashVersion >= 9;
    }
  }
  
  // Loop through all versions we're checking, and
  // set actualVersion to highest detected version.
  for (var i = 2; i <= maxVersion; i++) {  
    if (eval("flash" + i + "Installed") == true) actualVersion = i;
  }
  
  // If we're on msntv (formerly webtv), the version supported is 4 (as of
  // January 1, 2004). Note that we don't bother sniffing varieties
  // of msntv. You could if you were sadistic...
  if(navigator.userAgent.indexOf("WebTV") != -1) actualVersion = 4;  
  
  // DEBUGGING: uncomment next line to display flash version
  // alert("version detected: " + actualVersion);


  // We're finished getting the version on all browsers that support detection.
  // Time to take the appropriate action.

  // If the user has a new enough version...
  if (actualVersion >= requiredVersion) {
    // ...then we'll redirect them to the flash page, unless we've
    // been told not to redirect.
    if (useRedirect) {
      // Need javascript1.1 to do location.replace
      if(jsVersion > 1.0) {
        // It's safe to use replace(). Good...we won't break the back button.
        window.location.replace(flashPage);  
      } else {
        // JavaScript version is too old, so use .location to load
        // the flash page.
        window.location = flashPage;
      }
    }

    // If we got here, we didn't redirect. So we make a note that we should
    // write out the object/embed tags later.
    hasRightVersion = true;                
  } else {  
    // The user doesn't have a new enough version.
    // If the redirection option is on, load the appropriate alternate page.
    if (useRedirect) {
      // Do the same .replace() call only if js1.1+ is available.
      if(jsVersion > 1.0) {
        window.location.replace((actualVersion >= 2) ? upgradePage : noFlashPage);
      } else {
        window.location = (actualVersion >= 2) ? upgradePage : noFlashPage;
      }
    }
  }
}

detectFlash();  // call our detector now that it's safely loaded. 
  
// -->
</SCRIPT>





</HEAD>

<body BGCOLOR="#000000" text="#FFFFFF" link="#FFFF00" vlink="#FFFF00" alink="#FFFF00">

<h1><img src="../img/spazz.gif" width="10" height="2000"><br>
<a href="http://www.nachbeben.ch" class="style5">NACHBEBEN - Der neue Film von Stina Werenfels</a></h1>

 "Detecting Macromedia Flash, please wait..."

<!-- ===========================================================================
  IF YOU'RE USING PAGE REDIRECTION, FOLLOW THESE INSTRUCTIONS
  1) Put some content here to tell the user what's going on
     while they wait. something like: 
  "Detecting Macromedia Flash, please wait..."

  2) Delete everything below this point up to 
  the NOSCRIPT start tag: <NOSCRIPT>
  ========================================================================== -->



  
  
<!-- ===========================================================================
  IF YOU'RE USING CONTENT SWAPPING, ADJUST THE SCRIPT BELOW TO SUIT YOUR NEEDS
  ========================================================================== -->

<SCRIPT LANGUAGE="JavaScript" type="text/javascript">
<!--
// In this section we set up the content to be placed dynamically on the page.
// Customize movie tags and alternate html content below.

if (!useRedirect) {    // if dynamic embedding is turned on
  if(hasRightVersion) {  // if we've detected an acceptable version
    var oeTags = '<OBJECT CLASSID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'
    + 'WIDTH="550" HEIGHT="400"'
    + 'CODEBASE="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab">'
    + '<PARAM NAME="MOVIE" VALUE="movie.swf">'
    + '<PARAM NAME="PLAY" VALUE="true">'
    + '<PARAM NAME="LOOP" VALUE="false">'
    + '<PARAM NAME="QUALITY" VALUE="high">'
    + '<PARAM NAME="MENU" VALUE="false">'
    + '<EMBED SRC="movie.swf"'
    + 'WIDTH="550" HEIGHT="400"'
    + 'PLAY="true"'
    + 'LOOP="false"'
    + 'QUALITY="high"'
    + 'MENU="false"'
    + 'TYPE="application/x-shockwave-flash"'
    + 'PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash">'
    + '<\/EMBED>'
    + '<\/OBJECT>';

    document.write(oeTags);   // embed the flash movie
  } else {  // flash is too old or we can't detect the plugin
    // NOTE: height, width are required!
    var alternateContent = '<IMG SRC="../img/spazz.gif" HEIGHT="400" WIDTH="550">' 
      + '<BR>any desired alternate html code goes here';

    document.write(alternateContent);  // insert non-flash content
  }
}

// -->
</SCRIPT>

<NOSCRIPT>
  <META HTTP-EQUIV="Refresh" CONTENT="10;URL=langswitch.php"> 
</NOSCRIPT>


</BODY>
</HTML>