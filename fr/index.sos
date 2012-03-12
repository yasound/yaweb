<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YASOUND : Créez votre radio musicale en un instant</title>
<meta property="og:title" content="YASOUND : N'écoutez plus seul votre musique."/>
<meta property="og:type" content="Compagnie"/>
<meta property="og:url" content="http://yasound.com/fr"/>
<meta property="og:image" content="http://yasound.com/fr/og.jpg"/>
<meta property="og:site_name" content="YASOUND : N'écoutez plus seul votre musique."/>
<meta property="fb:admins" content="USER_ID"/>
<meta property="og:description"
      content="Avec Yasound, créez votre radio en un instant, écoutez la musique avec vos amis, et communiquez avec eux en temps réel sur le net, et bientôt sur votre mobile."/>

<link rel="icon" type="image/jpeg" href="icon.jpg" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]> 
<link href="css/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php include_once "php/js.php" ?>
<script type="text/javascript">
<!--
window.addEvent('domready', function() {
	
	function saveEmail() { 
		$('answer').setStyle('display','block');
		var myHTMLRequest = new Request.HTML({
			url:'saveEmail.php',
			method: 'post',
			onRequest: function(){
				// nothing to do
			},
			onSuccess: function(responseTree, responseElements, responseHTML, responseJavaScript){
				$('answer').set('html', responseHTML);
				$('close').addEvent('click', closeAnswer);
				$('email0001').set('value','');
				$('OK').removeEvents('click');
				$('OK').setStyle('opacity', '0.3');
			},
			onFailure: function(){
				$('answer').set('html', '<h2>Erreur</h2><p>Désolé une erreur est survenue :(</p><div id="close"></div>');
				$('close').addEvent('click', closeAnswer);
			}
		}).send('email='+$('email0001').get('value'));
	}
	
	function connexion() {
		$('answer').setStyle('display','block'); 
		var myHTMLRequest = new Request.HTML({
			url:'connexion.php',
			method: 'post',
			onRequest: function(){
				// nothing to do
			},
			onSuccess: function(responseTree, responseElements, responseHTML, responseJavaScript){
				$('answer').set('html', responseHTML);
				$('close').addEvent('click', closeAnswer);
				$('send').addEvent('click', function(){
				login();
				});
			},
			onFailure: function(){
				$('answer').set('html', '<h2>Erreur</h2><p>Désolé une erreur est survenue :(</p><div id="close"></div>');
				$('close').addEvent('click', closeAnswer);
			}
		}).send();
	}
	
	function login() { 
		var myHTMLRequest = new Request.HTML({
			url:'login.php',
			method: 'post',
			onRequest: function(){
				// nothing to do
			},
			onSuccess: function(responseTree, responseElements, responseHTML, responseJavaScript){
				$('answer').set('html', responseHTML);
				$('close').addEvent('click', closeAnswer);
			},
			onFailure: function(){
				$('answer').set('html', '<h2>Erreur</h2><p>Désolé une erreur est survenue :(</p><div id="close"><img src="images/close.jpg" width="16" height="16" alt="close" /></div>');
				$('close').addEvent('click', closeAnswer);
			}
		}).send();
	}
	
	function testEmail() {
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('email0001').get('value'))) { 
			$('OK').setStyle('opacity', '1');
			$('OK').removeEvents('click');
			$('OK').addEvent('click', function(){
				saveEmail();
			});
		} else {
			$('OK').removeEvents('click');
			$('OK').setStyle('opacity', '0.3');
		}
	}
	
	$('email0001').addEvents({
		change: function()  { 
			testEmail();
		},
		focus: function()  { 
			testEmail();
		},
		keyup: function()  { 
			testEmail();
		},
		keydown: function()  { 
			testEmail();
		},
		select: function()  { 
			testEmail();
		}
	});
	
	$('lienConnexion').addEvent('click', connexion);
	
	// fermeture du popup
	function closeAnswer(){
		$('answer').setStyle('display','none');
		$('answer').set('html', '<div id="wait"><img src="images/loading.gif" width="41" height="39" /></div>');
	}
	
});
-->
</script>
</head>

<body>
<div id="header">
  <div id="content">
    <div id="logo"><a href="index.php"><img src="images/logo.png" alt="Logo Yasound" width="285" height="86" border="0" /></a></div>
    <div id="menu"><a href="a_propos_de_nous.php">A propos de nous</a><a href="temoignages.php">Témoignages</a><a href="jobs.php">Jobs</a><a href="presse.php">Presse</a><a href="contact.php">Contact</a></div>
    <div id="lang"><a href="../en/index.php">English</a></div>
  </div>
</div>
<div class="home" id="middle">
  <div id="content">
    <div id="rouge">
      <h2>N'écoutez plus seul votre musique.<br />
        Avec Yasound, créez votre radio en un instant, écoutez la musique avec vos amis, et communiquez avec eux en temps réel sur le net, et bientôt sur votre mobile.</h2>
    </div>
    <div id="bleu">
      <h3>Vous voulez utiliser Yasound ?</h3>
      Yasound est en béta privée pour le moment, mais vous pouvez demander une invitation en donnant votre email ici...<br />
      <form id="emailform" name="emailform" method="post" action="">
        <input name="email0001" type="text" id="email0001" size="16" />
        <input type="button" name="OK" id="OK" value="OK">
      </form>
    Déjà inscrit(e)? <a href="#" id="lienConnexion">Connexion</a></div>
    <div id="vert">
      <h3>Ils utilisent Yasound</h3>
      Passionnés de musique, djays, amateurs ou professionnels, ils utilisent Yasound pour créer leurs radios et échanger avec leurs amis. <br />
      <a href="temoignages.php">Découvrez leurs témoignages</a></div>
     <?php include_once "php/rs.php" ?> 
    <div id="answer">
    <div id="wait"><img src="images/loading.gif" width="41" height="39" /></div>
    </div>
  </div>
</div>
<div class="home" id="footer">
  <div id="content">
    <div id="menu"><span class="current">Accueil</span> | <a href="a_propos_de_nous.php">A propos de nous</a> | <a href="temoignages.php">Témoignages</a> | <a href="jobs.php">Jobs</a> | <a href="presse.php">Presse</a> | <a href="contact.php">Contact</a> <br />
      <span style="font-size: 18px; font-weight:bold">yasound </span><span style="font-size: 10px">© 2011 - Tous droits réservés</span></div>
    <div id="app"><img src="images/app.png" width="264" height="45" alt="Bientôt sur AppStore et Android Market" /></div>
  </div>
</div>
</body>
</html>
