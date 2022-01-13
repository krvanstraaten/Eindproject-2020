<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$dataPoints = array(
	array("label"=> "9 Schooldagen geleden ", "y"=> 7),
	array("label"=> "8 Schooldagen geleden ", "y"=> 2),
	array("label"=> "7 Schooldagen geleden ", "y"=> 8),
	array("label"=> "6 Schooldagen geleden", "y"=> 10),
	array("label"=> "5 Schooldagen geleden", "y"=> 8),
	array("label"=> "4 Schooldagen geleden", "y"=> 3),
	array("label"=> "3 Schooldagen geleden", "y"=> 6),
	array("label"=> "2 Schooldagen geleden", "y"=> 10),
	array("label"=> "1 Schooldag geleden", "y"=> 5),
	array("label"=> "Vandaag", "y"=> 1),
);
	
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light1",
	title: {
		text: "Grafiek van laatste weken"
	},
	axisX: {
		tickLength: 0,
		tickWidth: 0,
		labelFontColor: "transparent", 
		labelFontSize: 8,

	},
	axisY: {
		title: "ingevoerde cijfer",
		includeZero: true,
		maximum: 10
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 700px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  

<form form action="/vragenlijst2.php">
<label for="vraag">wil je een gesprek met een coach?</label><br>
<input type="checkbox" name="muzieksoort" value="ja" checked>ja
<input type="checkbox" name="muzieksoort" value="nee">nee<br>
<label for="msg">met wie zou je een gesprek willen?</label><br>
<textarea id="msg" name="user_message"></textarea><br>
<label for="msg">Wanneer zou je een gesprek willen?</label><br>
<input type="date" id="start" name="trip-start"
       value="2020-01-04"
       min="2020-01-04" max="2020-08-24">
<input type="submit" value="Verzenden" ><a href="vragenlijststudenten.php"></a>
</form>
</body>
</html>