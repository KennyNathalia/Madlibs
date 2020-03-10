<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        if (empty($_POST["willen"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_GET["willen"]);
            }
        if (empty($_GET["persoon2"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_GET["persoon2"]);
            }
        if (empty($_GET["getal"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_GET["getal"]);
            }
        if (empty($_GET["vaka"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_GET["vaka"]);
            }
        if (empty($_GET["best"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_GET["best"]);
            }
        if (empty($_GET["slecht"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_GET["slecht"]);
            }
        if (empty($_GET["erg"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_GET["erg"]);
        }
        $vraag1 = test_input($_GET["willen"]);
        $vraag2 = test_input($_GET["persoon2"]);
        $vraag3 = test_input($_GET["getal"]);
        $vraag4 = test_input($_GET["vaka"]);
        $vraag5 = test_input($_GET["best"]);
        $vraag6 = test_input($_GET["slecht"]);
        $vraag7 = test_input($_GET["erg"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    


    
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="madlibs.css">
    <link href="https://fonts.googleapis.com/css?family=Knewave&display=swap" rel="stylesheet">
    <title>Madlibs</title>
</head>
<body>
<h1 id="title">MAD LIBS</h1>
<div class="paniek">
        <nav>
            <p><a href="madlibs_paniek.html">Er heerst paniek...</a></p>
            <p><a href="onkunde.html">Onkunde</a></p>
        </nav>
        <h1 id="title2">Onkunde</h1>
        <div class="tekst">
            <?php
            echo "<p id= \"teksten\">Er zijn veel mensen die niet kunnen ".$vraag1.". Neem nou ".$vraag2.". Zelfs met behulp van een ".$vraag4." of zelfs ".$vraag3." kan ".$vraag2." niet tekenen. Dat heeft niet te maken met een gebrek aan ".$vraag5.", maar met een teveel aan ".$vraag6.". Te veel".$vraag6." leidt tot ".$vraag7." en dat is niet goed als je wilt ".$vraag1.". Helaas voor ".$vraag2.".</p>";
            ?>
        </div>
        <div id="footer">
            <p>©Kenny Nathalia 2020</p>
        </div>
</div>


</body>
</html>