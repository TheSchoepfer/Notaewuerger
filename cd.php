<!doctype html>

 <?php
			session_start();
            include("dbconnect.php");
            $abfrage = "SELECT * FROM sound";
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
			<a href="cd.php" class="Menu2a"><div class="Menu2" id="cd"><span class="navtext2">CD</span></div></a>
			<?php
						if(isset($_SESSION['$username']))
						{
							echo" <a href=\"intern.php\" class=\"Menu2a\"><div class=\"Menu2\" id=\"cd\"><span class=\"navtext2\">Intern</span></div></a>";
						}else
						{
							echo"Fehler";
						}
			?>
		</div>
        <content id="soundcontent">
            <div class="inhalt">
			<h1 class="titelblack">Sound</h1><br /><br />
                <table class="special">
        
                    <tbody>
                    <?php
            
                    while($row = $ergebnis->fetch_assoc())
                    {
                        $gname =  $row['gName'];
                        $Jahr = $row['jahr'];
                        $Artist =  $row['artist'];
                        $Name = $row['Name'];
                        echo" <tr>
                        <td>$gname<td>
                        <td>$Jahr<td>
                        <td>$Artist<td>
                        <td>$Name<td>
						
						<br /><br />
						<br /><br />
						
                        <tr>
						
                    ";
					
                    }
                    ?>
            </tbody>
        </div>                
        </table>
        </content>
        <footer>
        </footer>
        
    </body>