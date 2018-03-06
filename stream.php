
<script src='https://cdn.jsdelivr.net/clappr/latest/clappr.min.js' type='text/javascript'></script>
<script src='https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js' type='text/javascript'></script>
<div id='player'>
</div>
<script>
//<![CDATA[
function getQueryParam(param) {
var result =  window.location.search.match(new RegExp("(\\?|&)" + param + "(\\[\\])?=([^&]*)")); return result ? result[3] : false;}
var topVideo = getQueryParam("s");
var playerElement = document.getElementById("player");
var player = new Clappr.Player({height: "100%", width: "100%", plugins: {'core': [LevelSelector]}, hlsjsConfig: {xhrSetup: function(xhr, url) {xhr.withCredentials = false;}}, playbackConfig: {crossorigin: 'use-credentials'}}); player.attachTo(playerElement);
player.load({source: topVideo, mimeType: 'application/x-mpegURL'});
player.play();
//]]>
</script>
