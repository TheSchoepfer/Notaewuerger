<?php
session_start(); ?>
<?php
if(isset($_POST['logoutsubmit'])){
	unset($_SESSION['$username'] );
	session_unset();
	session_destroy();
	header("Location: index.php");
}
else{
	if(isset ($_POST['submitlogin'])){
		include_once 'intern.php';
		$user = $_POST['username'];
		$password =  $_POST['password'];
			if(login($user, $password)){
				//header("Location: intern.php");
			}
			else{
				echo "Sie haben ein falsches Passwort oder einen falschen Username eingegeben </br></br>";
			}
	}
}
function login($username, $password ){
        $verbindung = mysqli_connect("localhost", "notaewuerger" , "123", "notaewuerger")
        or die("Verbindung zur Datenbank konnte nicht hergestellt werden");
        $abfrage = "SELECT password FROM user WHERE username = '$username'";
        $ergebnis = mysqli_query($verbindung, $abfrage);        
        $row = mysqli_fetch_object($ergebnis);
        if($row) {                
			echo "hallo1";
            if(password_verify ($password, $row->password))
            {
				echo"hallo";
                $_SESSION['$username'] = $username;
                $_SESSION['$benutzerid']= $id;
				return true;
				
            } 
	}        
}
function Loginseite(){
	
		if(isset($_SESSION['$username'])){ 
			echo "  <form method=\"post\" id=\"loginform\">
						<input class=\"buttons\" type=\"submit\" name=\"logoutsubmit\" class=\"login\" value=\"Ausloggen\"/>
					</form>";
		}
		else{
			echo "  <form action=\"index.php?site=Login\" method=\"post\" id=\"loginform\">
						<label for=\"username\">Username: </label><input type=\"text\" name=\"username\" id=\"username\" class=\"login\" placeholder=\"Username\"  required/><br /><br />
						<label for=\"password\">Passwort: </label><input type=\"password\" name=\"password\" id=\"password\" class=\"login\" placeholder=\"Passwort\" required />  <br /><br />
						<input class=\"buttons\" type=\"submit\" name=\"submitlogin\" class=\"login\" value=\"Einloggen\"/>
					</form>";
        }        
	
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
        <nav class="navindex">
		
            <div id="rundung"></div>
            <div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(9)" class="Menuindex" id="home"><div class="symbol homesymbol"></div><span class="navtext">Home</span></div>
			<div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(1)" class="Menuindex" id="wuerger"><div class="symbol wuergersymbol"></div><span class="navtext">Notäwürger</span></div>
            <div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(2)" class="Menuindex" id="mitglied"><div class="symbol mitgliedsymbol"></div><span class="navtext">Neumitglied werden</span></div>
            <div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(3)" class="Menuindex" id="tour"><div class="symbol toursymbol"></div><span class="navtext">Tour</span></div>
            <div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(4)" class="Menuindex" id="sound"><div class="symbol soundsymbol"></div><span class="navtext">Sound</span></div>
            <div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(5)" class="Menuindex" id="fotos"><div class="symbol fotossymbol"></div><span class="navtext">Fotos</span></div>
            <div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(6)" class="Menuindex" id="chaosgala"><div class="symbol chaossymbol"></div><span class="navtext">Chaos Gala</span></div>
            <div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(7)" class="Menuindex" id="links"><div class="symbol linkssymbol"></div><span class="navtext">Links</span></div>
           <div onmouseover="moveindex(this)" onmouseout="movebackindex(this)" onclick="nextsiteindex(8)" class="Menuindex" id="kontakt"><div class="symbol kontaktsymbol"></div><span class="navtext">Kontakt</span></div>
    
</nav>
        
        <content>
		<div class="inhalt">
		<img id="homebild" src="logo.jpg" alt="Selfhtml">
		<h2 class="titelblack">Willkommen</h2>
		<p class="text">Herzlich Willkommen auf unserer Website. Wir feiern dieses Jahr unser 30. Jubiläum.</br> Wenn du fragen hast, schreibe uns auf </br> Facebook oder über die Kontakseite.</p>
		</div>
            <?php
                Loginseite();
            ?>
            
        </content>
        <footer>
        </footer>
        
    </body>  
 </html>   