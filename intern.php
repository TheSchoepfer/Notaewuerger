<?php
session_start();
            include("dbconnect.php");
            $abfrage = "SELECT * FROM sound";
            $ergebnis = mysqli_query($verbindung, $abfrage);                  
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script language="javascript" type="text/javascript" src="script.js"></script>
        <title>Not&auml;w&uuml;rger</title>
    </head>
    <body>
        <header>
        </header>
        <nav class="wuergernav">
            <a href="index.php"><div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite()" class="Menu symbol homesymbol" id="home"></div></a>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(1)" class="Menu symbol wuergersymbol" id="wuerger"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(2)" class="Menu symbol mitgliedsymbol" id="mitglied"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(3)" class="Menu symbol toursymbol" id="tour"></div>
            <div class="Menu symbol soundsymbol" id="sound"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(5)" class="Menu symbol fotossymbol" id="fotos"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(6)" class="Menu symbol chaossymbol" id="chaosgala"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(7)" class="Menu symbol linkssymbol" id="links"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(8)" class="Menu symbol kontaktsymbol" id="kontakt"></div>
        </nav>
        <div class="nav2">
            <a href="sound.php" class="Menu2a"><div  class="Menu2" id="repertoire"><span class="navtext2">Repertoire</span></div></a> 
            <a href="movies.php" class="Menu2a"><div class="Menu2" id="movies"><span class="navtext2">Movies</span></div></a>
			<a href="intern.php" class="Menu2a"><div class="Menu2" id="intern"><span class="navtext2">Intern</span></div></a>

			</div>
        <content id="soundcontent">
            <div class="inhalt">
			<h1 class="titelblack">Mitgliederliste</h1>
			<p class="text"><a href="PDF/Mitgliederliste.pdf"  class="internlink">Mitgliederliste</a></p><br /><br />
			<h1 class="titelblack">Probeplan</h1>
			<p class="text"><a href="PDF/Probeplan.pdf"  class="internlink">Probeplan</a></p><br />
			<h1 class="titelblack">Tourplan</h1>
			<p class="text"><a href="PDF/Tourplan.pdf"  class="internlink">Tourplan</a></p><br />
			<table class="special">
        </div>                
        </table>
        </content>
        <footer>
        </footer>
        
    </body>