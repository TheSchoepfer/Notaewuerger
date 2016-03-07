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
			<h1 class="titel">Auf der Suche nach neuen Mitgliedern...</h1>
			<h2 class="ueberschrift">Hallo! Wir sind die Notäwürger!</h2>
			<p class="text">
			Gerne stellen wir dir an dieser Stelle unseren Verein näher vor:
			</p>
			<h2 class="ueberschrift">Verein</h2>
			<p class="text">Unser aufgestellter und engagierter Verein hat immer Interesse an neuen Mitgliedern, welche Freude an der Musik haben und gerne neue Leute kennenlernen möchten.</p>

			<h2 class="ueberschrift">Fasnächtliches Treiben</h2>
			<p class="text">Während der Fasnachtszeit spielen wir an verschiedenen Fasnachtsanlässen in der ganzen Schweiz und haben dabei eine gute Zeit zusammen. <a href="tour.php" class="linksneumitglied">Unser Tourplan verrät dir, wo wir jeweils spielen.</a></p>
			
			<h2 class="ueberschrift">Probe - Musik </h2>
			<p class="text">Um uns optimal auf die Auftritte vorzubereiten, proben wir von Ende August bis Anfangs Januar jeden Montagabend um 19.30 Uhr in unserem Proberaum im AHV-Gebäude in Schwyz. Unser Repertoir findest du hier. Ebenso findest du hier auch aktuelle <a href="sound.php"  class="linksneumitglied">Videos von unseren Auftritten.</a>

			Das Resultat unseres Probeaufwandes haben wir erst kürzlich auf einer CD festgehalten,<a href="sound.php"  class="linksneumitglied">hier kannst du reinhören.</a></p>

			<h2 class="ueberschrift">Chaos Gala - unser legendärer Anlass</h2>
			<p class="text">Während der Fasnachtszeit führen wir auch unseren legendären Fasnachtsanlass die Chaos Gala durch, welche jeweils in der Turnhalle des Schulhauses Rubiswil stattfindet. Die Turnhalle, die auch immer mottogerecht dekoriert ist, befinden sich dann mehrere Bars, eine grosse Bühne für die Guggenauftritte und ein DJ, der mit guter Musik zu coolen Lichteffekten für Stimmung sorgt. Im Aussenbereich befindet sich dann auch ein Kaffee-Zelt, welches zum gemütlichen Zusammensitzen einlädt. Auch der Hunger kann jederzeit am Grillstand gestillt werden. Ein grosser Aufwand, der sich aber jederzeit lohnt. Weitere Infos gibts hier.</p>

			<h2 class="ueberschrift">Sommerfest und weitere Anlässe unter dem Jahr</h2>
			<p class="text">Im Sommer findet dann unser Grillfest statt und lädt alle Helfer der Chaos Gala sowie Mitglieder ein.<br><br>

			Auch unter dem Jahr versuchen wir mit "ausserfasnächtlichen" Anlässen den Zusammenhalt im Verein zu fördern. So nehmen wir zum Beispiel an Grümpel-Turnieren teil oder sind an Gemeinde-Aktivitäten oder Aktivitäten von anderen Vereinen anwesend mit einem Stand.</p>
			</p>
			<h2 class="ueberschrift">Melde dich!</h2>
			<p class="text">Falls wir dich "gluschtig" gemacht haben, dann besuche uns doch mal während einer Probe, um einen ersten Eindruck von uns zu erhalten. <a href="" class="linksneumitglied">Melde dich mittels diesem Kontaktformular.</a></p>

			<h2 class="ueberschrift">Weitere Informationen - Impressionen</h2>
			<p class="text">Bilder findest du hier.<br><br>

			Weitere Informationen findest du auch auf unserer Facebook-Site.</p>

			<h2 class="ueberschrift">Tritt mit uns in Kontakt!</h2>
			<p class="text">Bist du interessierst und möchtest weitere Infos, melde dich bitte per E-Mail an info(at)notaewuerger.ch.

			Falls du auch gleich ein Anmeldeformular ausfüllen möchtest, kannst du das jetzt auch online ausfüllen - hier :-)<br><br>

			Wir freuen uns, von dir zu hören :-) <br><br>
			
			Deine Guggenmusik Notäwürger Seewen.</p>
		</div>
        </content>
        <footer>
        </footer>
        
    </body>