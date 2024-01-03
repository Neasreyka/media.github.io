<?php
$url = isset($_GET['url']) ? htmlspecialchars($_GET['url']) : null;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MediaFire</title>
</head>
<body>
<div id="player"></div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/8.23.1/jwplayer.js"></script>
	<script type="text/javascript">jwplayer.key="XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";</script>
    <style type="text/css" media="screen">html,body{padding:0;margin:0;height:100%}#player{width:100%!important;height:100%!important;overflow:hidden;background-color:#000}</style>

<script>
jwplayer= jwplayer("player").setup({
  playlist: [{
    "sources": <?php require 'mediafire.php';?>
    	
  }],
  advertising: {
                    client: 'vast',
                skiptext: 'Skip Ad',
                skipmessage: 'Skip Ad in  XX',
                admessage: 'Skip ad in XX .',
                    schedule: {
                        adbreak1: {
                            offset: 'pre',
                            tag: '',
                            skipoffset: 5,
                        },
                        adbreak2: {
                            offset: '100%',
                            tag: 'https://raw.githack.com/Neasreyka/adsmp4/main/adsmp.xml',
                            skipoffset: 3,
                        },
                        adbreak3: {
                            offset: '100%',
                            tag: 'https://raw.githack.com/Neasreyka/adsmp4/main/adsmp.xml',
                            skipoffset: 3,
                        }
                    }
                },
  allowfullscreen: 'true',
  aspectratio: "16:9",
  startparam: "start",
  primary: "html5",
  autostart: false,
  preload: "auto",
  aboutlink: "https://moviekh.net",
  abouttext: "MPlayer",
					logo: {
						file: "https://moviekh.net/wp-content/uploads/2023/12/Moviekh-net.png",
						link: "",
                        hide: "false",
						position: "top-right"
					},
                    			skin: {
                    				url: "https://res.cloudinary.com/do1zdkwaj/raw/upload/v1704087632/SUB/neflex_uoodhg.css",
		    				name: "Netplex"
		    			},
                    			autoPause: {
    						viewability: "true",
    						pauseAds: "true"
					},
});
jwplayer.on("ready",function(){let e=jwplayer.getContainer(),r=e.querySelector(".jw-button-container");r.querySelector(".jw-spacer");let o=e.querySelector(".jw-display-icon-rewind"),n=o.cloneNode(!0),t=n.querySelector(".jw-icon-rewind");t.style.transform="scaleX(-1)",t.ariaLabel="Forward 10 Seconds";let l=e.querySelector(".jw-display-icon-next");l.parentNode.insertBefore(n,l),e.querySelector(".jw-display-icon-next").style.display="none";let c=r.querySelector(".jw-icon-rewind"),i=c.cloneNode(!0);i.style.transform="scaleX(-1)",i.ariaLabel="Forward 10 Seconds",c.parentNode.insertBefore(i,c.nextElementSibling),[t,i].forEach(e=>{e.onclick=()=>{jwplayer.seek(jwplayer.getPosition()+10)}})});
</script>
</body>
</html>
