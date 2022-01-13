<!DOCTYPE.html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style-overzicht.css">
<link rel="stylesheet" href="css/gebruikeroverzicht.css">
<link rel="icon" href="images/bit_b_logo_white.png">

<title>Overzicht</title>
</head>

<body>
    <nav class="navigatie-balk">
        <img src="images\bit_academy_logo_white.png">
    </nav>

    <div class="vak">
        <div class="grafiek">
            <div  id="chartContainer">
                <?php $dataPoints = array(
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
                );?>
            </div>
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

            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>

</body>
<footer>
<div id="knop" >
<a href="studenten_overzicht.php" style="text-decoration:none;">studenten overzicht</a>
</div>
</footer>
</html>