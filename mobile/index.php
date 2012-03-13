<?

include ("Mobile_Detect.php");
include("localization/Localization.php");

$detect = new Mobile_Detect();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title><? echo localizedString("title"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="Yasound SAS" />
<meta name="copyright" content="Yasound SAS" />
<meta http-equiv="Cache-control" content="public" />
<link rel="icon" type="image/jpeg" href="/maps/icon.jpg" />
<link href="css/mobile.css" rel="stylesheet" type="text/css" />

<?
if ($detect->isAndroid()) { ?>
<link href="css/android.css" rel="stylesheet" type="text/css" />
<? } ?>
</head>

<body>

<div class="page">

    <img id="logo" src="/mobile/maps/logo.png"/>

<p id="chapo">
<? echo localizedString("chapo"); ?>
</p>


<div id="video">


<param name="movie" value="http://www.youtube.com/v/sIs7sIfsDYE?version=3&amp;hl=fr_FR&amp;rel=0&amp;autohide=1&amp;color2=f2f2f0&amp;showinfo=0">
</param>
<param name="allowFullScreen" value="true">
</param>
<param name="allowscriptaccess" value="always">
</param>
<embed class="embed" src="http://www.youtube.com/v/sIs7sIfsDYE?version=3&amp;hl=fr_FR&amp;rel=0&amp;autohide=1&amp;color2=f2f2f0&amp;showinfo=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"></embed>

</div>

    <img class="button" src="/mobile/maps/<? echo $gLang ?>/soon_appstore.png"/>

</div>
    
</body>

</html>