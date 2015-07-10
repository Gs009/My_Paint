<!DOCTYPE html>
<html>
	<head>
		<title>Paint Like | Dessiner, Ecrire</title>
		<meta name="description" content="Voici un paint en ligne, amusez vous ! ;)" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Paint Like</h1>
		<div id="all">
			<canvas id="canvas" width="500" height="500"></canvas>
		</div>
		<aside>
			<label>
				Choose a color :
			</label>
			<input id="color" type="color">
			<label>
				Choose a size :
			</label>
			<input name="size" id="size" type="text" placeholder="Default : 1px">
			<button id="crayon" name="crayon"><img src='pics/brushes.png' alt="crayon"></button>
			<button id="rect" name="rect"><img src='pics/rect.png' alt="rectangle"></button>
			<button id="rectA" name="rectA"><img src='pics/all.png' alt="rectangle rempli"></button>
			<button id="trait" name="trait"><img src='pics/line.png' alt="trait"></button>
			<button id="cercle" name="cercle"><img src='pics/circle.png' alt="cercle"></button>
			<button id="cercleA" name="cercleA"><img src='pics/circleA.png' alt="cercle rempli"></button>
			<button id="texte" name="texte"><img src='pics/font.png' alt="texte"></button>
			<div id="inputTEXT">
				<input type="text" name="text" id="valueTEXT">
				<input type="text" name="sizeText" id="sizeTEXT" placeholder="Text Size">
				<select id="fontTEXT">
					<option value="arial" selected="selected">Arial</option>
					<option value="verdana">Verdana</option>
					<option value="Times New Roman">Times New Roman</option>
					<option value="Courier New">Courier New</option>
					<option value="serif">Serif</option>
					<option value="sans-serif">Sans-Serif</option>
				</select>
				<a href="#" id="back">back</a>
			</div>
			<a href="#" id="clear" title="clear">Clear</a>
		</aside>
	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>