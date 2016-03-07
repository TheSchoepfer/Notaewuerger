<?php
session_start();
    include("dbconnect.php");
    $abfrage = "SELECT * FROM fest";
    $ergebnis = mysqli_query($verbindung, $abfrage);       
?>
<html>
    <?php include("header.php"); ?>
    <body>
        <header>
        </header>
        <nav class="wuergernav">
            <a href="index.php"><div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite()" class="Menu symbol homesymbol" id="home"></div></a>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(1)" class="Menu symbol wuergersymbol" id="wuerger"></div>
			<div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(2)" class="Menu symbol mitgliedsymbol" id="mitglied"></div>
            <div class="Menu symbol toursymbol" id="tour"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(4)" class="Menu symbol soundsymbol" id="sound"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(5)" class="Menu symbol fotossymbol" id="fotos"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(6)" class="Menu symbol chaossymbol" id="chaosgala"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(7)" class="Menu symbol linkssymbol" id="links"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(8)" class="Menu symbol kontaktsymbol" id="kontakt"></div>
        </nav>
        <content id="tourcontent">
            <div class="inhalt">
                <h1 class="titelblack">
                Tourplan
                </h1><br /><br />
                <h2 class="ueberschriftfas">Fasnacht 2016</h2><br />
                <p class="text">
                <?php
                while($row = $ergebnis->fetch_assoc())
                    {
                        $datum =  $row['datum'];
                        $date = new DateTime($datum);
                        $datum = $date->format('d.m.Y');
                        
                        $ort = $row['ort'];
                        $festname =  $row['festname'];
						$output = "$datum <span class=\"abstand\">$ort , $festname</span> <br /><br /> ";
						$output = utf8_encode($output);
                    echo "
                    <div class=\"tourtext\">
					$output</div>
                ";
                }
                ?>
                </p>
            </div>
        </content>
        <footer>
        </footer>
        
    </body>