<?php
session_start();
?>
<html>
    <?php include("header.php"); ?>
    <body>
        <header>
        </header>
        <nav class="wuergernav">
            <a href="index.php"><div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite()" class="Menu symbol homesymbol" id="home"></div></a>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(1)" class="Menu symbol wuergersymbol" id="wuerger"></div>
            <div class="Menu symbol mitgliedsymbol" id="mitglied"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(3)" class="Menu symbol toursymbol" id="tour"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(4)" class="Menu symbol soundsymbol" id="sound"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(5)" class="Menu symbol fotossymbol" id="fotos"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(6)" class="Menu symbol chaossymbol" id="chaosgala"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(7)" class="Menu symbol linkssymbol" id="links"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(8)" class="Menu symbol kontaktsymbol" id="kontakt"></div>
        </nav>
        <div class="nav2">
            <a href="neumitglied.php"  class="Menu2a" ><div class="Menu2" id="neumitgliedinfo"><span class="navtext2">Info</span></div></a> 
            <a href="neumitgliedform.php" class="Menu2a"><div class="Menu2" id="neumitgliedwerden"><span class="navtext2">Neumitglied werden</span></div></a>
		</div>
        <content id="mitgliedcontent">
		<div class="inhalt">
		<h1 class="titel">Neumitglied werden</h1><br /><br /><br />
		<p class="text">Willst du ein Notäwürger werden dann melde dich!</p>
		<div id="formularneu">
		<form action="neumitgliedform.php" method="post"></br></br>
			Vorname:<input type="text" name="vorname"/></br></br>
			Name:<input type="text" name="name"/></br></br>
			E-Mail:<input type="email" name="email"/></br></br>
			Nachricht:<input type="text" name="nachricht"/></br></br>
			<input type="submit" value="senden" name="sendenbutton"/>
		</form>
		</div>
		</div>
        </content>
        <footer>
        </footer>
        
    </body>