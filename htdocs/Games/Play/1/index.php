<html lang="en"><head>
		<title>Baseplate Client</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

		<style type="text/css">
			html, body {
				width:100%;
				height:100%;
				font-family:Arial, Helvetica, sans-serif;
				margin:0;
				padding:0;
				background-color:#314475;
				overflow:hidden;
			}

			.infobox {
				position:fixed;
				top:30px;
				left:50%;
				width:600px;
				height:360px;
				padding:10px 30px;
				margin:0 0 0 -300px;
				background:#7ec0ee;
				box-sizing:border-box;
			}

			.fade-out {
				opacity:0;
				transition:opacity 2000ms;
				-webkit-transition:opacity 2000ms;
			}
		</style>
	</head>

	<body>
		<div id="game"><canvas width="1366" height="100"></canvas></div>

		<script src="/js/games/1/libs/stats.min.js"></script>

		<script src="/js/games/1/libs/detector.js"></script>
		<script src="/js/games/1/libs/three.js"></script>
		<script src="/js/games/1/libs/cannon.js"></script>

		<script src="/js/games/1/game/game.static.js"></script>
		<script src="/js/games/1/game/game.three.js"></script>
		<script src="/js/games/1/game/game.cannon.js"></script>
		<script src="/js/games/1/game/game.events.js"></script>
		<script src="/js/games/1/game/game.helpers.js"></script>
		<script src="/js/games/1/game/game.ui.js"></script>
		<script src="/js/games/1/game/game.core.demo1.js"></script>
		<script src="/js/games/1/game/game.models.js"></script>

		<script>
			if (!Detector.webgl) {
				Detector.addGetWebGLMessage();
			} else {
				window.gameInstance = window.game.core();
				window.gameInstance.init({
					domContainer: document.querySelector("#game"),
					rendererClearColor: window.game.static.white
				});
			}

			// STATS VIA MONKEY PATCH
			(function() {
				var gameLoop = window.gameInstance.loop;
				var stats = new Stats();

				stats.domElement.style.position = "absolute";
				stats.domElement.style.left = "0px";
				stats.domElement.style.top = "0px";

				document.body.appendChild( stats.domElement );

				window.gameInstance.loop = function() {
					stats.begin();
					gameLoop();
					stats.end();
				}
			})();
		</script>	
</body></html>