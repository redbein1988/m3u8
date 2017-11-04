<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Player</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jwplayer/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="4cFrCsBdTSWp87XH5zQW4VsWi+mFFzQIIqiC4kpnEoU=";</script>


</head>
<body topmargin="0" leftmargin="0">


<div class="centerVideo">
<div style="position:relative">

	<div style="position: absolute; width: 160px; height: 41px; z-index: 1; left: 4px; top: 4px" id="layer1">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://facebook.com/alltvgoals" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>

  <div id="player"></div>
  <script>
    var player = new Clappr.Player({source: "<?=$_GET["u"]?>",autoPlay: true, width:"100%", height:"400", parentId: "#player"});
  </script>
	
		
</div>

</div>


</body>
</html>