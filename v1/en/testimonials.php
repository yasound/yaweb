<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YASOUND : What users are saying</title>
<meta property="og:title" content="YASOUND : There’s no need to listen to music alone anymore"/>
<meta property="og:type" content="Compagnie"/>
<meta property="og:url" content="http://yasound.com/en"/>
<meta property="og:image" content="http://yasound.com/en/og.jpg"/>
<meta property="og:site_name" content="YASOUND : There’s no need to listen to music alone anymore"/>
<meta property="fb:admins" content="USER_ID"/>
<meta property="og:description"
      content="With Yasound, there’s no need to listen to music alone anymore. Create your own radio station instantly and share with your friends in real time online and on your phone."/>
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
          flashHtml += "<param name='flashvars' value='url=http://ys-web01-vbo.alionis.net:8000/cedric.mp3&lang=en&codec=mp3&volume=100&autoplay=true&traking=false&jsevents=true&buffering=5&skin=ffmp3-mcclean.xml&title=Jeancedric&welcome=Yasound' />";
          flashHtml += "<param name='wmode' value='opaque' />";
          flashHtml += "<param name='allowscriptaccess' value='always' />";
          flashHtml += "<param name='scale' value='noscale' />";
          flashHtml += "<embed src='ffmp3-config.swf' flashvars='url=http://ys-web01-vbo.alionis.net:8000/cedric.mp3&lang=en&codec=mp3&volume=100&autoplay=true&traking=false&jsevents=true&buffering=5&skin=ffmp3-mcclean.xml&title=Jeancedric&welcome=Yasound' width='180' scale='noscale' height='60' wmode='window' bgcolor='#FFFFFF' allowscriptaccess='always' type='application/x-shockwave-flash' />";
		  $('FFMP3').set('html', flashHtml);
		}
		
		function joueU()
		{ 
		  flashHtml = "<param name='movie' value='ffmp3-config.swf' />";
          flashHtml += "<param name='flashvars' value='url=http://ys-web01-vbo.alionis.net:8000/ubik.mp3&lang=en&codec=mp3&volume=100&autoplay=true&traking=false&jsevents=true&buffering=5&skin=ffmp3-mcclean.xml&title=Ubik&welcome=Yasound' />";
          flashHtml += "<param name='wmode' value='opaque' />";
          flashHtml += "<param name='allowscriptaccess' value='always' />";
          flashHtml += "<param name='scale' value='noscale' />";
          flashHtml += "<embed src='ffmp3-config.swf' flashvars='url=http://ys-web01-vbo.alionis.net:8000/ubik.mp3&lang=en&codec=mp3&volume=100&autoplay=true&traking=false&jsevents=true&buffering=5&skin=ffmp3-mcclean.xml&title=Ubik&welcome=Yasound' width='180' scale='noscale' height='60' wmode='window' bgcolor='#FFFFFF' allowscriptaccess='always' type='application/x-shockwave-flash' />";
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
    <div id="menu"><a href="about_us.php">About us</a><span class="current">Meet our users</span><a href="careers.php">Careers</a><a href="press.php">Press</a><a href="contact.php">Contact</a></div>
    <div id="lang"><a href="../fr/index.php">Français</a></div>
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
      <p><span class="textBleu">Y- Hey, Jeancedric. You've become a big figure on the Ibiza scene. How long have you been a DJ there?</span><br />
        JC- I've been going to Ibiza each season for more than 11 years now. On top of my regular appearances at Zoo Project and Privilege you can also find me behind the turntables at more intimate spots like Underground and Km5.<br />
      </p>
      <p><span class="textBleu">Y- Why create your own radio station?</span><br />
        JC- For the same reason I'm a DJ. I'm always on the lookout for fresh sounds and I love sharing what I find. It'd been a while since I'd created my own Internet radio because all the tools I'd seen were complicated and didn't really fit my needs.<br />
      </p>
      <p><span class="textBleu">Y- How do you create your radio station on Yasound?</span><br />
        JC - Sitting on a beach chair :) But seriously, your system is amazing. I gave it one playlist and it created an entire radio station for me in an instant.</p>
    </div>
    <div class="data" style="width:250px; margin-left:130px;">
      <h3>Ubik - e-marketing specialist</h3>
      <p><span class="textBleu">Y- Hi Ubik. You're an encyclopedia of music; is it your job?</span><br />
        U- No, I actually work in e-marketing. But I've always got music playing. It's not just a hobby, it's something I need in my life.<br />
      </p>
      <p><span class="textBleu">Y- Is Ubik your real name?</span><br />
        U- No, it's just what I go by online.<br />
      </p>
      <p><span class="textBleu">Y- What music sites do you use?</span><br />
        U- It used to be sites like Pandora, Jiwa, or Radioblogclub. Today I mostly use Youtube or SoundCloud to publish my mixes and lots of blogs and Internet radio.<br />
      </p>
      <p><span class="textBleu">Y- Why create an Internet radio?</span><br />
        U- I was always meeting &quot;vinyl addicts&quot; and I was looking for an easy way to create a radio station to broadcast all my new finds, especially 60s-inspired jazz and Brazilian rhythms. I love the arrangements on those kinds of tracks.<br />
      </p>
      <p><span class="textBleu">Y- So, can you summarize your Yasound experience?</span><br />
      U- In a word: wow!</p>
      <p>&nbsp;</p>
    </div>
    <div id="rouge" style="left: 852px; top: 55px;">
      <h2>Testimonials<br />
        <span style="font-size:14px">Two beta users answer <br />
        our questions.</span></h2>
    </div>
    <?php include_once "php/rs2.php" ?>
  </div>
  <div id="deco" style="background-image:url(../en/images/backConcert.jpg); height:200px;"></div>
</div>
<div id="footer">
  <div id="content">
    <div id="menu"><a href="index.php">Home Page</a> | <a href="about_us.php">About us</a> | <span class="current">Meet our users</span> | <a href="careers.php">Careers</a> | <a href="press.php">Press</a> | <a href="contact.php">Contact</a> <br />
      <span style="font-size: 18px; font-weight:bold">yasound </span><span style="font-size: 10px">© 2011 - All rights reserved</span></div>
    <div id="app"><img src="images/app.png" width="264" height="45" alt="Bientôt sur AppStore et Android Market" /></div>
  </div>
</div>
</body>
</html>
