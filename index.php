<?php
require_once 'includes/dbconnect.php';
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">

<body class="container">
    <div class="bodypic" id="wondershref">
        <div class="headertext"></div>
        <h1> Wonders of the World Collection </h1>

        <div class="container1">
            <nav class="navbar">
                <div class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#wondershref" class="nav-link">Wonders of World</a>
                    </li>
                    <li class="nav-item">
                        <a href="#factspagehref" class="nav-link">Facts</a>
                    </li>
                    <li class="nav-item">
                        <a href="#formhref" class="nav-link">Input form</a>
                    </li>
                </ul>
            </nav>
        </div>
        <section>
            <?php
            $wonders = getWonders($db);
            echo formatWonders($wonders);
            ?>
        </section>
    </div>

    <h2 class="formcss" id="formhref">Form Input</h2>
    <section class="formcss">
        <form method="post" action="newWonders.php">
            <p>
                <label for="Name">Name of Wonder:</label><br><br/>
                <input type="text" name="name" id="name" value="" required><br><br/>
            </p>
            <p>
                <label for="Name">Location of Wonder:</label><br><br/>
                <input type="text" name="location" id="location" value="" required><br><br/>
            </p>
            <p>
                <label for="Name">Year Wonder was made:</label><br><br/>
                <input type="text" name="yearmade" id="yearmade" value="" required><br><br/>
                <input type="submit" value="Submit">
            </p>
        </form>
    </section>

    <footer>
        <div class="footerimage"</div>
    </footer>

</body>
</html>
