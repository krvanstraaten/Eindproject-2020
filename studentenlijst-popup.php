<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/studentenoverzicht.css">
	<link rel="stylesheet" href="css/style-overzicht.css">
	<link rel="icon" href="images/bit_b_logo_white.png">

    <title></title>
</head>
<body>
	<header>
        <nav class="navigatie-balk">
            <img src="images\bit_academy_logo_white.png">
        </nav>
	</header>
	
	<main>
		<button id="myBtn">voorbeeld van popup</button>
		<div id="mainmidden">
			<div id="myModal" class="modal">

				<div class="modal-content">
					<span class="close">&times;</span>

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
								type: "line",
								dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
							}]
						});
						chart.render();
						
						}
					</script>
					<div id="chartContainer" style="height: 370px; width: 700px;"></div>
					<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
				</div>
			</div>
		</div>
		
	</main>

	<script>
		var modal = document.getElementById("myModal");
		var btn = document.getElementById("myBtn");
		var span = document.getElementsByClassName("close")[0];


		btn.onclick = function() {
		modal.style.display = "block";
		}


		span.onclick = function() {
		modal.style.display = "none";
		}


		window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		}
	</script>

</body>
</html>
