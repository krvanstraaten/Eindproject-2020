<?php
$host = 'localhost';
$db   = 'healthtracker';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $dbh = new PDO($dsn, $user, $pass, $options);
    // echo("Connected to: " . $db . " on " . $host . " version: " . phpversion());
    // echo("<br>");
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-vragen.css">
    <link rel="stylesheet" href="css/vragenlijst1.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="icon" href="images/bit_b_logo_white.png">

    <title>Vragen</title>
</head>
<body>
    <div class="container">
        <div id="slider">
            <ul class="slides">
                <li class="slide">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                </li>
                <li class="slide">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                </li>
                <li class="slide">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                </li>
                <li class="slide">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                </li>
            </ul>
        </div>
    </div>

    <form id="form" class="vak" action="vragen2-student.php">

        <p class="text">Hallo <?php echo $_POST["name"]; ?></p>

        <label class="text" for="username">Hoe voel je je vandaag op een schaal van 1 tot 10? </label><br>
        <input type="hidden" id="custId" name="custId" value="0">
        <div class="stars" data-rating="0">
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
        </div>
        <label class="text" for="msg">Wil je er iets over kwijt?</label>
        <div id="submit-stukje">
            <textarea class="msg" name="user_message"></textarea>
            <input class="submit" type="submit" value="Submit">
        </div>
    </form>

    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Jquery/jquery.steps.js"></script>
    <script src="Jquery/jquery.steps.min.js"></script>
    <script src="js/background.js"></script>

</body>
</html>
