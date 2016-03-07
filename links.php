<html>
<?php
session_start();
?>
    <?php include("header.php"); ?>
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
            <div class="Menu symbol linkssymbol" id="links"></div>
            <div onmouseover="move(this)" onmouseout="moveback(this)" onclick="nextsite(8)" class="Menu symbol kontaktsymbol" id="kontakt"></div>
        </nav>
        <content id="linkcontent">
            <div class="inhalt">
				<h2 class="titelblack">Links</h2><br /><br />
                <a href="http://www.guggenmusig.ch"  class="links">www.guggenmusig.ch</a><br />
                <a href="http://www.urmi-schlegel.ch"  class="links">www.urmi-schlegel.ch</a><br />
                <a href="http://www.fluehchraeie.ch"  class="links">www.fluehchraeie.ch</a><br />
                <a href="http://www.polly-duster.com"  class="links">www.polly-duster.com</a><br />
                <a href="http://www.tschapatalpas.ch"  class="links">www.tschapatalpas.ch</a><br />
                <a href="http://www.negus.ch"  class="links">www.negus.ch</a><br />
                <a href="http://www.rampassae.ch"  class="links">www.rampassae.ch</a><br />
                <a href="http://www.arvihyler.ch"  class="links">www.arvihyler.ch</a><br />
				 <a href="http://www.birgerfaeger.ch"  class="links">www.birgerfaeger.ch</a><br />
                <a href="http://www.schloessli-schraenzer.ch"  class="links">www.schloessli-schraenzer.ch</a><br />
                <a href="http://www.dorf-faeger.ch"  class="links">www.dorf-faeger.ch</a><br />
                <a href="http://www.twwc.ch"  class="links">www.twwc.ch</a><br />
                <a href="http://www.swiss-pix.ch"  class="links">www.swiss-pix.ch</a><br />
                <a href="http://www.gaengeli.ch"  class="links">www.gaengeli.ch</a><br />
				
            </div>
        </content>
        <footer>
        </footer>
        
    </body>