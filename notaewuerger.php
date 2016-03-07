<?php
session_start();
            include("dbconnect.php");
            

            $abfrageGattung = "SELECT * FROM gattung";
            $ergebnisGattung = mysqli_query($verbindung, $abfrageGattung);
?>
<html>
    <?php include("header.php"); ?>
    <body>
        <header>
        </header>
        <nav class="wuergernav">
            <a href="index.php"><div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite()" class="Menu symbol homesymbol" id="home"></div></a>
            <div class="Menu symbol wuergersymbol" id="wuerger"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(2)" class="Menu symbol mitgliedsymbol" id="mitglied"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(3)" class="Menu symbol toursymbol" id="tour"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(4)" class="Menu symbol soundsymbol" id="sound"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(5)" class="Menu symbol fotossymbol" id="fotos"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(6)" class="Menu symbol chaossymbol" id="chaosgala"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(7)" class="Menu symbol linkssymbol" id="links"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(8)" class="Menu symbol kontaktsymbol" id="kontakt"></div>
        </nav>
         
        <content id="wuergercontent">
		<div class="inhalt">
		<h2 class="titelblack">Notäwürger</h2><br />
        <?php
                while($rowGattung = $ergebnisGattung->fetch_assoc())
                {
                    $GattungsName = $rowGattung['gattung'];
                    $GattungsID = $rowGattung['ID'];
                    
                    echo "<div class= \"gattungsdiv\"><h2>$GattungsName</h2>";
                    
                    $abfrage = "SELECT * FROM wuerger WHERE gattungID = $GattungsID";
                    $ergebnis = mysqli_query($verbindung, $abfrage);
                    
                    while($row = $ergebnis->fetch_assoc())
                    {
                        
                        
                        $Name = $row['name'];
                        $wuergerzeit = $row['wuergerzeit'];
                        $instrument =  $row['instrument'];
                        $bild = $row['bild'];
                        $output = "$Name,<br /> $wuergerzeit,<br /> $instrument";
                        $output = utf8_encode($output);
                        echo "
                        <div class='bilder'>
                        <img id='Bilder' src='images/$bild' />
                            <div class=\"wuergerinfo\">
                                $output<br /><br />
                            </div>
                        </div>
                ";
                    }
                    echo "</div>";
                    
                }
                    ?>
             
        </div>    
        </content>
        <footer>
        </footer>
         
    </body>