<?
include("../mobile/Mobile_Detect.php");

$detect = new Mobile_Detect();

if ($detect->isMobile())
header("Location:../mobile/index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>YASOUND | Ma radio, c'est moi</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Avec Yasound, créez votre radio en un instant, écoutez la musique avec vos amis, et communiquez avec eux en temps réel sur le net, et bientôt sur votre mobile." />
<meta name="Author" content="Yasound SAS" />
<meta name="copyright" content="Yasound SAS" />
<meta http-equiv="Cache-control" content="public" />
<meta name="language" content="french" />
<meta property="og:title" content="YASOUND : N'écoutez plus seul votre musique."/>
<meta property="og:type" content="Compagnie"/>
<meta property="og:url" content="http://yasound.com/fr"/>
<meta property="og:image" content="http://yasound.com/fr/og.jpg"/>
<meta property="og:site_name" content="YASOUND : Ma radio, c'est moi."/>
<meta property="fb:admins" content="USER_ID"/>
<meta property="og:description"
      content="Avec Yasound, créez votre radio en un instant, écoutez la musique avec vos amis, et communiquez avec eux en temps réel sur le net, et bientôt sur votre mobile."/>
<link rel="icon" type="image/jpeg" href="icon.jpg" />
<link href="css/intro.css" rel="stylesheet" type="text/css" />
<?php include_once "php/js2.php" ?>
</head>
<body>
<!--<img src="images/intro/background1.jpg" width="1920" height="1000" alt="Background" class="superbg"/>-->
<div id="imgBack">
  <div id="imgBack4"><img src="images/intro/background4.jpg" width="2000" height="449" /></div>
  <div id="imgBack3"><img src="images/intro/background3.jpg" width="2000" height="449" /></div>
  <div id="imgBack2"><img src="images/intro/background2.jpg" width="2000" height="449" /></div>
  <div id="imgBack1"><img src="images/intro/background1.jpg" width="2000" height="449" /></div>
</div>
<div id="logo"><img src="images/intro/logo.png" width="215" height="52" alt="Logo Yasound" /></div>
<div id="content2">
  <h1 id="title2">Je crée ma radio en un instant</h1>
  <div class="screen" id="screen2">

    <div class="video" id="video2">
    <object width="480" height="270" id="youtube">
    <param name="movie" value="http://www.youtube.com/v/YkFaWMN6Rsg?version=3&amp;hl=fr_FR&amp;rel=0&amp;autohide=1&amp;color2=f2f2f0&amp;showinfo=0">
    </param>
    <param name="allowFullScreen" value="true">
    </param>
    <param name="allowscriptaccess" value="always">
    </param>
    <embed src="http://www.youtube.com/v/YkFaWMN6Rsg?version=3&amp;hl=fr_FR&amp;rel=0&amp;autohide=1&amp;color2=f2f2f0&amp;showinfo=0" type="application/x-shockwave-flash" width="480" height="270" allowscriptaccess="always" allowfullscreen="true"></embed>
    </object>
    </div>

</div>
  <div id="text2">
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="60" height="60" align="left" valign="middle"><img src="images/intro/icon21.png" width="49" height="50" /></td>
        <td width="340" align="left" valign="middle">J'installe gratuitement l'application sur mon mobile</td>
      </tr>
      <tr>
        <td height="60" align="left" valign="middle"><img src="images/intro/icon22.png" width="49" height="50" /></td>
        <td align="left" valign="middle">Je choisis les morceaux que j'aime</td>
      </tr>
      <tr>
        <td height="60" align="left" valign="middle"><img src="images/intro/icon23.png" width="49" height="48" /></td>
        <td align="left" valign="middle">Ma radio est créée : elle est gratuite, légale, diffusée 24/7 sur mobiles et internet</td>
      </tr>
    </table>
  </div>
</div>
<div id="content3" style="display:block">
  <h1 id="title3">Je communique avec mes amis</h1>
  <div class="screen" style="background:url(images/intro/bvideo3.png) center top no-repeat;" id="screen3">
    <div class="video" id="video3"><img src="images/intro/screen3.jpg" width="480" height="274" /></div>
  </div>
  <div id="text3">
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="60" height="45" align="left" valign="middle"><img src="images/intro/icon31.png" width="35" height="35" /></td>
        <td width="340" align="left" valign="middle">Je vois qui écoute ma radio</td>
      </tr>
      <tr>
        <td height="45" align="left" valign="middle"><img src="images/intro/icon32.png" width="35" height="35" /></td>
        <td align="left" valign="middle">Je discute en direct avec la communauté</td>
      </tr>
      <tr>
        <td height="45" align="left" valign="middle"><img src="images/intro/icon33.png" width="35" height="35" /></td>
        <td align="left" valign="middle">Je partage l'écoute avec mes amis Facebook</td>
      </tr>
      <tr>
        <td height="45" align="left" valign="middle"><img src="images/intro/icon34.png" width="35" height="35" /></td>
        <td align="left" valign="middle">J'ai accès aux stats de ma radio</td>
      </tr>
    </table>
  </div>
</div>
<div id="content4">
  <h1 id="title3">Je découvre...</h1>
  <div id="screen4" style="position:absolute; top:0px; left:0px">
    <img src="images/logo.png"/>

    <div id="text4">
    <table width="505" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td height="100" align="center" valign="middle">...une multitude de radios,<br />
    de styles et de nouveaux talents...</td>
    </tr>
    </table>
    </div>

</div>
</div>
<div id="content1">
<h1 id="title1">Avec Yasound, transformer votre mobile<br/>
en station de radio est un jeu d'enfants</h1>
  <div class="screen" id="screen1">
    <div class="video" id="video1">
      <object width="480" height="270" id="youtube">
        <param name="movie" value="http://www.youtube.com/v/ysEpLi4ZWhs?version=3&amp;hl=fr_FR&amp;rel=0&amp;autohide=1&amp;color2=f2f2f0&amp;showinfo=0">
        </param>
        <param name="allowFullScreen" value="true">
        </param>
        <param name="allowscriptaccess" value="always">
        </param>
        <embed src="http://www.youtube.com/v/ysEpLi4ZWhs?version=3&amp;hl=fr_FR&amp;rel=0&amp;autohide=1&amp;color2=f2f2f0&amp;showinfo=0" type="application/x-shockwave-flash" width="480" height="270" allowscriptaccess="always" allowfullscreen="true"></embed>
      </object>
    </div>
  </div>
  <div id="text1">
    <table width="360" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="60" height="60" align="left" valign="middle"><img src="images/intro/icon11.png" width="49" height="50" /></td>
        <td width="300" align="left" valign="middle">Je crée ma radio en un instant,<br />
          c'est simple et gratuit</td>
      </tr>
      <tr>
        <td height="60" align="left" valign="middle"><img src="images/intro/icon12.png" width="49" height="50" /></td>
        <td align="left" valign="middle">Je communique avec mes amis</td>
      </tr>
      <tr>
        <td height="60" align="left" valign="middle"><img src="images/intro/icon13.png" width="49" height="48" /></td>
        <td align="left" valign="middle">Je découvre une multitude de radios,<br />
          de styles et de nouveaux talents</td>
      </tr>
    </table>
  </div>
</div>
<div id="iphone">
  <div id="iphonescreen">
    <div id="iphone4"><img src="images/intro/Selection.jpg" width="235" height="353" /></div>
    <div id="iphone3"><img src="images/intro/MesAmis.jpg" width="235" height="353" /></div>
    <div id="iphone2"><img src="images/intro/JeCreeMaRadio.jpg" width="235" height="353" /></div>
    <div id="iphone1"><img src="images/intro/WallRadio.jpg" width="235" height="353" /></div>
  </div>
</div>
<div id="fleches">
  <div id="gauche">&nbsp;</div>
  <div id="droite">&nbsp;</div>
</div>
<div id="appstore"><a href="http://itunes.apple.com/us/app/yasound/id492680161?ls=1&mt=8"><img src="images/intro/appstore_now.png" width="167" height="58"/></a></div>
<div id="footer">
  <div id="puces">
    <div id="puce1" class="puceactive" onclick="goToSlide(1)"></div>
    <div id="puce2" class="puce" onclick="goToSlide(2)"></div>
    <div id="puce3" class="puce" onclick="goToSlide(3)"></div>
    <div id="puce4" class="puce" onclick="goToSlide(4)"></div>
  </div>
  <div id="menu"><a href="a_propos_de_nous.php">À propos de nous</a> | <a href="jobs.php">Jobs</a> | <a href="presse.php">Presse</a> | <a href="contact.php">Contact</a></div>
</div>
<?php include_once "php/rs2.php" ?>
</body>
</html>