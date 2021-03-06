<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="util.js"></script>
<script src="draw.js"></script>
<script src="animation.js"></script>
<script src="keyboard.js"></script>
<link rel="stylesheet" type="text/css" href="gwarl.css">
<script src="gwarl.js"></script>
</head>
<body>
<div id="graphics">
	<img id="uibars" class="graphic" src="./uigraphics/bars.png"></img>
	<img id="uicast" class="graphic" src="./uigraphics/cast.png"></img>
	<img id="uiexplore" class="graphic" src="./uigraphics/explore.png"></img>
	<img id="uifight" class="graphic" src="./uigraphics/fight.png"></img>
	<img id="uiinfobox" class="graphic" src="./uigraphics/infobox.png"></img>
	<img id="uiitembutton" class="graphic" src="./uigraphics/itembutton.png"></img>
	<img id="uiitems" class="graphic" src="./uigraphics/items.png"></img>
	<img id="uimagic" class="graphic" src="./uigraphics/magic.png"></img>
	<img id="uimagicbutton" class="graphic" src="./uigraphics/magicbutton.png"></img>
	<img id="uioptions" class="graphic" src="./uigraphics/options.png"></img>
	<img id="uioptionsbuttons" class="graphic" src="./uigraphics/optionsbuttons.png"></img>
	<img id="uirest" class="graphic" src="./uigraphics/rest.png"></img>
	<img id="uiskills" class="graphic" src="./uigraphics/skills.png"></img>
	<img id="uiskillbutton" class="graphic" src="./uigraphics/skillbutton.png"></img>
	<img id="uistats" class="graphic" src="./uigraphics/stats.png"></img>

	<img id="none" class="graphic" src="getimage.php?imageof=none&tilesize=36">
	<img id="none144" class="graphic" src="getimage.php?imageof=none&tilesize=144">
	<img id="wall" class="graphic" src="getimage.php?imageof=wall&tilesize=36">
	<img id="floor" class="graphic" src="getimage.php?imageof=floor&tilesize=36">
	<img id="stairup" class="graphic" src="getimage.php?imageof=stairup&tilesize=36">
	<img id="stairdown" class="graphic" src="getimage.php?imageof=stairdown&tilesize=36">
	
	<img id="potion144" class="graphic" src="getimage.php?imageof=potion&tilesize=144">
	<img id="potion" class="graphic" src="getimage.php?imageof=potion&tilesize=36">
	<img id="ring144" class="graphic" src="getimage.php?imageof=ring&tilesize=144">
	<img id="ring" class="graphic" src="getimage.php?imageof=ring&tilesize=36">
	<?php
	include "images.php";
	?>
	
	<img id="decal1" class="graphic" src="getimage.php?imageof=decal1&tilesize=36">
	<img id="decal2" class="graphic" src="getimage.php?imageof=decal2&tilesize=36">
	<img id="decal3" class="graphic" src="getimage.php?imageof=decal3&tilesize=36">
	<img id="decal4" class="graphic" src="getimage.php?imageof=decal4&tilesize=36">
	<img id="decal5" class="graphic" src="getimage.php?imageof=decal5&tilesize=36">
	<img id="decal6" class="graphic" src="getimage.php?imageof=decal6&tilesize=36">
	<img id="decal7" class="graphic" src="getimage.php?imageof=decal7&tilesize=36">
	<img id="decal8" class="graphic" src="getimage.php?imageof=decal8&tilesize=36">
	<img id="decal9" class="graphic" src="getimage.php?imageof=decal9&tilesize=36">
</div>
<div id="game">

<div id="sidebar">
	<canvas id="controls" width="388" height="518"></canvas>
	<div id="movelog">
	</div>	
</div>
<div id="mapcontainer">
	<div id="loadingscreen">
	</div>
	<div id="menu">
		<button id="newlevel">New game/continue</button>
		<div id="help">
		<h2>Controls:</h2>
		<h3>Mouse:</h3>
		<p>Click to move or attack. Shift+click to cast a spell with a target. Click the player tile to pass a turn or get an item. Click items in the inventory to use them.</p>
		<h3>Keyboard:</h3>
		<p>Numpad and arrow keys move*. Numpad 5 to pass a turn or pick up an item. E to explore and descend staircases, F to fight the closest enemy, R to rest, G to get an item off the ground, C to cast the currently selected spell at the nearest creature.</p>
		<p>*check if numlock is on if unable to move diagonally</p>
		<p>There is music hidden in the options panel</p>
		</div>
		<a href="http://gwarl.esy.es/blog/">Website/blog</a>
	</div>
	<div id="deathscreen">
	</div>
	<canvas id="map" width="612" height="612"></canvas>
</div>
</div>
<div id="debug"></div>
<div id="outtakes">
</div>
</body>
</html>
