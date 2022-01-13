<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inlog.css">
    <link rel="icon" href="images/bit_b_logo_white.png">
    <title>Inlog</title>
</head>
<body>
    <div id="links">
    <div class="imgcontainer">
        <img src="https://jarvis.bit-academy.nl/assets/images/logo_black.png">
    </div>

    <form class="form" action="vragenlijst1.php" method="post">

        <label for="name"><p>Naam</p></label>
        <div class="border">
            <input type="text" placeholder="Name" name="name" required>

        </div>

        <label for="psw"><p>Password</p></label>
        <div class="border">
            <input type="password" placeholder="Enter Password" name="psw" required>
        </div>

        <div id="vergeten">
            <span class="psw"><a href="#">Wachtwoord vergeten?</a></span>
        </div>

        <button class="submit" type="submit">INLOGGEN</button>
    </form>
  
    </div>
  
</body>
</html>
