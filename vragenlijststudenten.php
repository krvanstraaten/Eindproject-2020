<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vragen voor studenten</title>
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
 
    <form form action="/vragenlijststudenten.php">
        <label for="vraag">wil je een gesprek met een coach?</label><br>
        <input type="checkbox" name="checkbox-yes" value="ja">ja
        <input type="checkbox" name="checkbox-no" value="nee">nee<br>
        <label>Met welke coach zou je op gesprek willen?</label><br>
        <select>
          <option value="none">Kies er een</option>
          <option value="Stijn">Stijn</option>
          <option value="Ties">Ties</option>
          <option value="Klaas">Klaas</option>
          <option value="josephine">Josephine</option>
          <option value="Bram">Bram</option>
          <option value="Fons">Fons</option>
          <option value="Thomas">Thomas</option>
        </select><br><br>
        <input type="date" id="start" name="trip-start"
       value="2020-01-04"
       min="2020-01-04" max="2020-08-24">
       <input type="submit" value="Verzend">
    </form>



</form>
</body>
</html>