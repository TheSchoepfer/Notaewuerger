<?php
session_start();
if(isset($_POST['sendenbutton'])){
    $vorname=$_POST['vorname'];    
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $nachricht=$_POST['nachricht'];     
    $empfaenger = "schule.minerva@gmail.com";
    $betreff = "Notaewuerger";
    $absender= $email;
    $text = $nachricht;
 
mail($empfaenger, $betreff, $text, "X-Priority: normal\r\nFROM: ".$absender);
}
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
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(4)" class="Menu symbol soundsymbol" id="sound"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(5)" class="Menu symbol fotossymbol" id="fotos"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(6)" class="Menu symbol chaossymbol" id="chaosgala"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(7)" class="Menu symbol linkssymbol" id="links"></div>
            <div class="Menu symbol kontaktsymbol" id="kontakt"></div>
        </nav>
        <content id="contactcontent">
		<div class="inhalt">
			<h2 class="titelblack">Kontakt</h2><br /><br />
			<h1 class="ueberschrift">Du möchtest bei den Notäwürger mitmischen oder uns sonst etwas mitteilen?</h1><br />
			<form action="contact.php" method="post"></br></br>
				Vorname:<input type="text" name="vorname"/></br></br>
				Name:   <input type="text" name="name"/></br></br>
				E-Mail: <input type="email" name="email"/></br></br>
				Nachricht:<input type="text" name="nachricht"/></br></br>
				<input type="submit" value="senden" name="sendenbutton"/>
			</form>
		</div>
        </content>
        <footer>
        </footer>
        
    </body>