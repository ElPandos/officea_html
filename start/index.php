<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Video Page</title>

<head>
</head>

<body>

	<div id="container" style="width:1500px">
	
	<div id="header" style="background-color:#FFFFFF;">
		<h1 style="margin-bottom:0;">Video Page</h1>
	</div>
		
	<!--
	<?php
		$color="red";
		echo "My car is " . $color . "<br>";
		echo "My house is " . $COLOR . "<br>";
		echo "My boat is " . $coLOR . "<br>";
	?>  

	<form action="">
		<select name="cars">
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="fiat">Fiat</option>
			<option value="audi">Audi</option>
		</select>
	</form>
	-->
	
	<video width="320" height="240" controls>
		<source src="/video/11.mp4" type="video/mp4">
		<source src="/video/2.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>

</body>
</html>

<!--
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Title of the document</title>

<head>
	<style>
		#div1, #div2
		{float:left; width:100px; height:35px; margin:10px;padding:10px;border:1px solid #aaaaaa;}
	</style>
	
	<script>
		function allowDrop(ev) {
			ev.preventDefault();
		}

		function drag(ev) {
			ev.dataTransfer.setData("Text", ev.target.id);
		}

		function drop(ev) {
			ev.preventDefault();
			var data = ev.dataTransfer.getData("Text");
			ev.target.appendChild(document.getElementById(data));
		}
	</script>
</head>
<body>

	<div id="container" style="width:1500px">
	
	<div id="header" style="background-color:#FFA500;">
		<h1 style="margin-bottom:0;">Main Title of Web Page</h1>
	</div>

	<div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:left;">
	<b>Menu</b><br>
	HTML<br>
	CSS<br>
	JavaScript</div>

	<div id="content" style="background-color:#EEEEEE;height:200px;width:1300px;float:left;">
		<form action="">
		
			<input type="checkbox" name="vehicle" value="Bike">I have a bike<br>
			<input type="checkbox" name="vehicle" value="Car">I have a car
			
			<form name="input" action="demo_form_action.asp" method="get">
				Username: <input type="text" name="user">
				<input type="submit" value="Submit">
			</form>
			
			<form action="">
				<select name="cars">
					<option value="volvo">Volvo</option>
					<option value="saab">Saab</option>
					<option value="fiat">Fiat</option>
					<option value="audi">Audi</option>
				</select>
			</form>
			
			<textarea rows="10" cols="30">
				The cat was playing in the garden.
			</textarea>
			
			<form action="">
				<fieldset>
					<legend>Personal information:</legend>
					Name: <input type="text" size="30"><br>
					E-mail: <input type="text" size="30"><br>
					Date of birth: <input type="text" size="10">
				</fieldset>
			</form>
			
			<button type="button" onclick="myFunction()">Click Me!</button>
			
			<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
				<input type="range" id="a" value="50">100 +
				<input type="number" id="b" value="50">=
				<output name="x" for="a b"></output>
			</form>
			
			<video width="320" height="240" controls>
				<source src="/video/11.mp4" type="video/mp4">
				<source src="/video/2.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="/picture/img_w3slogo.gif" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>

			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
			
			<embed width="420" height="345" src="http://www.youtube.com/v/XGSy3_Czz8k" type="application/x-shockwave-flash">
			
				
		</form>
		
		<?php
			$color="red";
			echo "My car is " . $color . "<br>";
			echo "My house is " . $COLOR . "<br>";
			echo "My boat is " . $coLOR . "<br>";
		?>  
		
	</div>
	
	<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
	Copyright © W3Schools.com</div>

</body>
</html>
-->