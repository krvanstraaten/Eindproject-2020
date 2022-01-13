
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
Je hebt <?php echo $_GET["custId"]; ?> sterren aangegeven<br>
Nog iets te zeggen?<br><?php echo $_GET["user_message"]; ?><br><br>

<!-- <?php print($_GET["custId"]. $_GET["user_message"]); ?> -->

<?php
//database code

var_dump($_POST);

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
    $pdo = new PDO($dsn, $user, $pass, $options);
    // echo("Connected to: " . $db . " on " . $host . " version: " . phpversion());
    // echo("<br>");
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// search submission ID
$stmt = $pdo->prepare("INSERT INTO checkupS (student_id, cijfer) VALUES (?,?);");

if ($stmt->execute(array('student_id'=> $_POST["student_id"], 'cijfer'=> $_POST["cijfer"]))) {

    //hoeft niks te staan
 }

//haal de id en cijfer uit de post array.
// voer de query uit die in de database staat (insert into).


?>

