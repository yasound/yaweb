<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YASOUND : Témoignages</title>
<meta property="og:title" content="YASOUND : N'écoutez plus seul votre musique."/>
<meta property="og:type" content="Compagnie"/>
<meta property="og:url" content="http://yasound.com/fr"/>
<meta property="og:image" content="http://yasound.com/fr/og.jpg"/>
<meta property="og:site_name" content="YASOUND : N'écoutez plus seul votre musique."/>
<meta property="fb:admins" content="USER_ID"/>
<meta property="og:description"
      content="Avec Yasound, créez votre radio en un instant, écoutez la musique avec vos amis, et communiquez avec eux en temps réel sur le net, et bientôt sur votre mobile."/>
<link rel="icon" type="image/jpeg" href="icon.jpg" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
<link href="css/base.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]> 
<link href="css/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php include_once "php/js.php" ?>
<script type="application/javascript">
	function joueJC()
		{ 
		  flashHtml = "<param name='movie' value='ffmp3-config.swf' />";
          flashHtml += "<param name='flashvars' value='url=http://ys-web01-vbo.alionis.net:8000/cedric.mp3&lang=fr&codec=mp3&volume=100&autoplay=true&traking=false&jsevents=true&buffering=5&skin=ffmp3-mcclean.xml&title=Jeancedric&welcome=Yasound' />";
          flashHtml += "<param name='wmode' value='opaque' />";
          flashHtml += "<param name='allowscriptaccess' value='always' />";
          flashHtml += "<param name='scale' value='noscale' />";
          flashHtml += "<embed src='ffmp3-config.swf' flashvars='url=http://ys-web01-vbo.alionis.net:8000/cedric.mp3&lang=fr&codec=mp3&volume=100&autoplay=true&traking=false&jsevents=true&buffering=5&skin=ffmp3-mcclean.xml&title=Jeancedric&welcome=Yasound' width='180' scale='noscale' height='60' wmode='window' bgcolor='#FFFFFF' allowscriptaccess='always' type='application/x-shockwave-flash' />";
		  $('FFMP3').set('html', flashHtml);
		}
		
		function joueU()
		{ 
		  flashHtml = "<param name='movie' value='ffmp3-config.swf' />";
          flashHtml += "<param name='flashvars' value='url=http://ys-web01-vbo.alionis.net:8000/ubik.mp3&lang=fr&codec=mp3&volume=100&autoplay=true&traking=false&jsevents=true&buffering=5&skin=ffmp3-mcclean.xml&title=Ubik&welcome=Yasound' />";
          flashHtml += "<param name='wmode' value='opaque' />";
          flashHtml += "<param name='allowscriptaccess' value='always' />";
          flashHtml += "<param name='scale' value='noscale' />";
          flashHtml += "<embed src='ffmp3-config.swf' flashvars='url=http://ys-web01-vbo.alionis.net:8000/ubik.mp3&lang=fr&codec=mp3&volume=100&autoplay=true&traking=false&jsevents=true&buffering=5&skin=ffmp3-mcclean.xml&title=Ubik&welcome=Yasound' width='180' scale='noscale' height='60' wmode='window' bgcolor='#FFFFFF' allowscriptaccess='always' type='application/x-shockwave-flash' />";
		  $('FFMP3').set('html', flashHtml);
		}
		
		window.addEvent('domready', function() {
			joueJC();
		});
</script>
</head>

<body>
<div id="header">
  <div id="content">
    <div id="logo"><a href="index.php"><img src="images/logo.png" alt="Logo Yasound" width="285" height="86" border="0" /></a></div>
    <div id="menu"><a href="a_propos_de_nous.php">A propos de nous</a><span class="current">Témoignages</span><a href="jobs.php">Jobs</a><a href="presse.php">Presse</a><a href="contact.php">Contact</a></div>
    <div id="lang"><a href="../en/index.php">English</a></div>
  </div>
</div>
<div id="middle">
  <div class="jobs" id="content">
    <div class="data" style="width:960px; margin-left:40px;"><img src="images/bulle_rouge.gif" alt="Yasound recrute" width="223" height="185" align="right"/>
      <h3 style="margin-top:90px;">&nbsp;</h3>
      <div id="player"> 
        <!-- BEGINS: AUTO-GENERATED FFMP3 CODE --> 
        <a href="#" onclick="joueJC()"><img src="images/ecouterjeancedric.jpg" alt="Ecouter Jeancedric" width="170" height="93" border="0" /></a>
        <object width="180" height="60" bgcolor="#FFFFFF" id="FFMP3">
          
        </object>
        <!-- ENDS: AUTO-GENERATED FFMP3 CODE --> 
        <a href="#" onclick="joueU()"><img src="images/ecouterubik.jpg" alt="Ecouter Ubik" width="170" height="93" border="0" /></a></div>
    </div>
    <div class="data" style="width:320px; margin-left:40px;"><img src="images/jeancedric.jpg" width="329" height="247" alt="Jeancedric" /></div>
    <div class="data" style="width:320px; margin-left:60px;"><img src="images/ubik.jpg" width="329" height="247" alt="Jeancedric" /></div>
    <br/>
    <div class="data" style="width:250px; margin-left:250px;">
      <h3>Jeancedric - DJ<br />
      </h3>
      <p><span class="textBleu">Y- Bonjour Jeancedric, tu es devenu une figure d'Ibiza, cela fait combien de saisons que tu t'y produit en tant que DJ ?</span><br />
        JC- Cela fait plus de 11 ans que je travaille à Ibiza chaque saison... En plus de mes résidences à Zoo Project ou au Privilege, on peut me trouver aussi derrière les platines d'endroits plus spécialisés, comme l'Underground ou le cosmopolite Km5...<br />
      </p>
      <p><span class="textBleu">Y- Pourquoi créer une radio ?</span><br />
        JC- Pour les mêmes raisons qui m'ont amener à être DJ : je suis en perpétuelle recherche de sons de qualité et j'aime faire partager mes découvertes. Cela faisait déjà un moment que je cherchais à faire une radio sur le net, mais tous les outils que j'ai vu jusqu'ici étaient compliqués et pas adaptés à ce que je cherchais...<br />
      </p>
      <p><span class="textBleu">Y- Créer ta radio avec Yasound, ca s'est passé comment ?</span><br />
        JC - En 1 minute au fond d'un transat (rires). Sérieusement, votre système est géant : à partir d'une liste de lecture que j'avais, il m'a généré et créé ma radio automatiquement... </p>
    </div>
    <div class="data" style="width:250px; margin-left:130px;">
      <h3>Ubik - emarketer</h3>
      <p><span class="textBleu">Y- Bonjour Ubik. Tu as une culture musicale incroyable, quasi encyclopédique, c'est ton métier ?</span><br />
        U- Pas du tout, dans la vraie vie, je suis emarketer... Mais au travail ou en dehors j'écoute en permanence de la musique, c'est un besoin, une passion.<br />
      </p>
      <p><span class="textBleu">Y- Ubik, c'est ton vrai nom ?</span><br />
        U- Non, c'est le pseudo que j'utilise online.<br />
      </p>
      <p><span class="textBleu">Y- Qu'est ce que tu utilises comme site de musique ?</span><br />
        U- Avant j'utilisais des sites comme Pandora, Radioblogclub ou Jiwa. Aujourd'hui j'utilise surtout Youtube, Soundcloud pour publier mes mixes, et pas mal de blogs et de webradios... <br />
      </p>
      <p><span class="textBleu">Y- Pourquoi faire une radio ?</span><br />
        U- Je suis en contact avec pas mal de &quot;vinyls addicts&quot;... Je cherchais un moyen simple de pouvoir diffuser online toutes mes trouvailles, en particulier faire une radio sur la musique des années 60 d'inspiration jazzy, brésilienne... J'adore ces titres avec ces arrangements magnifiques et ces belles orchestrations.<br />
      </p>
      <p><span class="textBleu">Y- Alors, utiliser Yasound en résumé ?</span><br />
        U- En résumé ? En un mot : waouh ! </p>
      <p>&nbsp;</p>
    </div>
    <div id="rouge" style="left: 852px; top: 55px;">
      <h2>Témoignages<br />
        <span style="font-size:14px">2 beta-testeurs Yasound<br />
        répondent à nos questions.</span> </h2>
    </div>
    <?php include_once "php/rs2.php" ?>
  </div>
  <div id="deco" style="background-image:url(images/backConcert.jpg); height:200px;"></div>
</div>
<div id="footer">
  <div id="content">
    <div id="menu"><a href="index.php">Accueil</a> | <a href="a_propos_de_nous.php">A propos de nous</a> | <span class="current">Témoignages</span> | <a href="jobs.php">Jobs</a> | <a href="presse.php">Presse</a> | <a href="contact.php">Contact</a> <br />
      <span style="font-size: 18px; font-weight:bold">yasound </span><span style="font-size: 10px">© 2011 - Tous droits réservés</span></div>
    <div id="app"><img src="images/app.png" width="264" height="45" alt="Bientôt sur AppStore et Android Market" /></div>
  </div>
</div>
</body>
</html>
