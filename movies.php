<?php
session_start();

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
            <a href="movies.php"class="Menu2a"><div class="Menu2" id="movies"><span class="navtext2">Movies</span></div></a>
			<?php
					if(isset($_SESSION['$username']))
						{
							echo" <a href=\"intern.php\" class=\"Menu2a\"><div class=\"Menu2\" id=\"intern\"><span class=\"navtext2\">Intern</span></div></a>";
						}else
						{
						}
			
						?>
		</div>
        <content id="soundcontent">
            <div class="inhalt">
            <p class="ueberschrift">Hier findest du aktuelle Videos von uns - den jeweiligen Filmemachern ein riesies Dankeschön! Weitere findest du in unserem Youtube-Kanal. Viel Spass!</p><br /> <br />
<p class="text"><b>Bligg: Bligg - I'd kill for you</b></p>
<p><iframe width="560" height="315" src="http://www.youtube.com/embed/cUWGVy-6njk?list=PLonYRMXrotMTjRvkxrGf9LgK24j_xIXMk" frameborder="0" allowfullscreen=""></iframe></p>
<p class="text"><b>Schaffä: Amerie - Gotta Work</b></p>
<p><iframe width="560" height="315" src="http://www.youtube.com/embed/RdJk-EW-TEs?list=PLonYRMXrotMTjRvkxrGf9LgK24j_xIXMk" frameborder="0" allowfullscreen=""></iframe></p>
<p class="text"><b>Laufä: Foo Fighters - Walk</b></p>
<iframe width="560" height="315" src="http://www.youtube.com/embed/B5HTZMIhFyg?list=PLonYRMXrotMTjRvkxrGf9LgK24j_xIXMk" frameborder="0" allowfullscreen=""></iframe>
<p class="text"><b>Roxet: Roxette - Things will be never be the same</b></p>
<iframe width="560" height="315" src="http://www.youtube.com/embed/jCi2p4lVF9c?list=PLonYRMXrotMTjRvkxrGf9LgK24j_xIXMk" frameborder="0" allowfullscreen=""></iframe>
<p class="text"><b>Madonna - Madonnae feat. Timberland - 4 Minutes</b></p>
<iframe width="560" height="315" src="http://www.youtube.com/embed/3kBtlKH-tIA?list=PLonYRMXrotMTjRvkxrGf9LgK24j_xIXMk" frameborder="0" allowfullscreen=""></iframe>
  </video>
            </div>
        </table>
        </content>
        <footer>
        </footer>
        
    </body>