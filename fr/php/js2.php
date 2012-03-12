<script type="text/javascript" src="js/mootools-core-1.4.5-full-nocompat.js"></script>
<script type="text/javascript" src="js/mootools-more-1.4.0.1.js"></script>
<script type="text/javascript">
// GOOGLE ANALYTICS
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4211339-12']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
// ANIMATION
var pBack = new Array('left','left','center','left');
var mrCont = new Array('10%','10%','auto','10%');
var slide = 1;
var animX = new Array (0,100,-100,100,-100);
var removedVideo = new Object();
var wx = 0;
var y = 0; 
var z = 0;

function goToSlide(n) {
	$('droite').set('onclick', '');
	$('gauche').set('onclick', '');
	$('droite').setStyle('display', 'none');
	$('gauche').setStyle('display', 'none');
	$('imgBack'+slide).set('tween', {duration: 500});
	$('imgBack'+n).set('tween', {duration: 500});
	$('imgBack'+slide).fade(0);
	$('imgBack'+n).fade(1);
	$('puce'+slide).set('class','puce');
	if (slide==1) {
		removedVideo = $('video1').dispose();
	}
	y1 = $('content'+slide).getPosition().y;
	y2 = $('content'+n).getPosition().y;
	$('content'+slide).set('tween', {duration: 500});
	$('content'+n).set('tween', {duration: 1000});
	$('content'+slide).fade(0);
	$('content'+n).fade(1);
	var screen1 = new Fx.Tween($('iphone'+n), {
		property: 'top',
		duration: 500,
		transition:'sine:out'
		}
	);
	var screen2 = new Fx.Tween($('iphone'+slide), {
		property: 'top',
		duration: 500,
		transition:'sine:out',
		onComplete: function(){
			$('droite').setStyle('display', 'block');
			$('gauche').setStyle('display', 'block');
			$('droite').set('class', 'd'+n);
			$('gauche').set('class', 'g'+n);
			$('droite').set('onclick', 'goToSlide('+(n+1)+')');
			$('gauche').set('onclick', 'goToSlide('+(n-1)+')');
			if (n==1) {
				removedVideo.inject($('screen1'));
			}
		}
		}
	);
	screen1.start(-353,0);
	screen2.start(0,353);
	slide = n;	
	$('puce'+slide).set('class','puceactive');
}

function resize() {
	var wx = window.getSize().x; 
	var y = parseInt((window.getSize().y - 449)/2); 
	var z = parseInt((window.getSize().y - 50)/2);
	if (wx<1200) {		 
		$('title1').setStyle('font-size','32px');
		$('title1').setStyle('line-height','32px');
	}
	if (wx-350-40<820) {
		var x = wx-50-820;
		var xb = x-350;
	} else {
		var x = parseInt((wx - 820)/2)+175;
		var xb = 0;
	}
	
	$('imgBack').setStyle('top', y+'px');
	$('fleches').setStyle('top',z+'px');
	$('appstore').setStyle('top',(y+470)+'px'); 
	$('appstore').setStyle('left',(x+169)+'px'); 
	Array.each ($$('h1'), function (title,index) {
		title.setStyle('width', (x+500)+'px');
	});
	$('iphone').setStyle('top',(y-60)+'px');
	$('iphone').setStyle('left',(x+546)+'px');
	for (i=1; i<5; i++) { 
		$('content'+i).setStyle('top',y+'px');
		$('content'+i).setStyle('left',x+'px');
		$('imgBack'+i).setStyle('left',xb+'px');
	}
}

window.addEvent('domready', function() {
	resize();
	for (i=2; i<5; i++) {
		$('imgBack'+i).fade('hide');
		$('content'+i).fade('hide');;
		$('content'+i).setStyle('display','block');
	}
	$('droite').set('class', 'd1');
	$('gauche').set('class', 'g1');
	$('droite').set('onclick', 'goToSlide(2)');
	$('content1').setStyle('display','block');
	$('imgBack').setStyle('display','block');
	$('content1').fade(1);
});

window.addEvent('resize', function() {
	resize();
});

</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'fr'}
</script>