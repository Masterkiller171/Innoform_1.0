<?php

?>
<?php
require ("../../PHP/Functions.php");
?>
<html lang="en">
<head>
    <title>Logboek </title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Logboek.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Stappen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: lightblue;">

    <h4><?php button() ?></h4><br><br> 
<!-- Function for navbar /PHP/Libary.php -->
    <nav>
     <ul>
       <li class="sub-menu-parent"><a href="../../PHP/index.php" style='<?php echo $_SESSION['dec'] ?>'> Home</a>
       </li>
     <li class="sub-menu-parent">
       <a style='<?php echo $_SESSION['dec'] ?>'> Posts</a>
       <ul class="sub-menu">
         <li><a href="../../PHP/Post-page.php" style='<?php echo $_SESSION['dec'] ?>'>New Posts</a></li>
         <li><a href="../../PHP/Post-page.php" style='<?php echo $_SESSION['dec'] ?>'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="Post-input.php" class="sub-menu-parent" style='<?php echo $_SESSION['dec'] ?>'>Create post</a>
     <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>' >Projects</a>
       <ul class="sub-menu">
         <li><a href="../../PHP/Projects.php" style='<?php echo $_SESSION['dec'] ?>'>New Projects</a></li>
         <li><a href="../../PHP/Projects.php" style='<?php echo $_SESSION['dec'] ?>'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>'>Support</a>
       <ul class="sub-menu">
         <li><a href="../../PHP/Rules.php" style='<?php echo $_SESSION['dec'] ?>'>Rules</a></li>
         <li><a href="../../PHP/Contact.php" style='<?php echo $_SESSION['dec'] ?>'>Contact</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>'>History</a>
       <ul class="sub-menu">
         <li><a href="../../PHP/" style='<?php echo $_SESSION['dec'] ?>'>Post History</a></li>
         <li><a href="../../PHP/" style='<?php echo $_SESSION['dec'] ?>'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>'>About us</a>
       <ul class="sub-menu">
         <li><a href="../../PHP/Aboutus.php" style='<?php echo $_SESSION['dec'] ?>'>Our project</a></li>
         <li><a href="../../PHP/" style='<?php echo $_SESSION['dec'] ?>'>Background story</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>'>logboek</a>
       <ul class="sub-menu">
             <li><a href="logboek.php" style='<?php echo $_SESSION['dec'] ?>'>Logboek</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>';
    <div id="wrapperr">     
    <div class="body" style="height: auto;">
        <h1>Stappenplan</h1>
        <strong><p>In 2017 voor de zomer vakantie moesten ik en Tijmen een onderwerp gaan uitkiezen voor ons profielwerkstuk.
            Daar kwam al snel informatica naar voren. En dus begonnen ik (youri) en tijmen samen na te denk over ons onderwerp.
            We kwamen al snel op het idee om een website te maken, maar we wisten nog niet waarover. En dus toen kwam Tijmen met het idee
            om een website te maken over specialisten die hulp nodig hebben. Een soort reddit-achtige form, waar specialisten elkaar
            kunnen helpen. En dus begonnen we met het in elkaar zetten van onze schetsen.</p></strong>
               <h2>Fase 1: Plannen</h2> 
               <p>Youri had een programma dat hete: visio. Visio is vaak gebruikt bij het in elkaar zetten van een website.<br>
                   Visio is een soort programma waar je webstelsel kan ontwerpen en dus onderwerp aan elkaar verbinden die bij elkaar horen,<br>
                   en is gemaakt door microsoft. </p><a href="https://1drv.ms/u/s!ApiDcsM1j2yCgeZ8E700sc2EmXMz1A" ><img src="../../Images/Visio.JPG" style="width: 80%; height: 300px;"></a>
               <p style="font-size: 80%;">*Als u op het plaatje klikt word u naar de website geleid waarop de file staat*</p>
               <p>Zoals u ziet is dit het "woordweb" van de website. Op deze punten hebben gelet voor het maken van deze website<br>
                   Het begint natuurlijk bij de kern: de website. En daar uit groeien drie takken: <table>
                   <tr><li>tabs</li>
                       <li>Layout</li>
                       <li>En informatie</li>
               </tr>
               </table>
                     En daaruit groeien dan weer takken die meer gespecialiseerd zijn voor elk onder werp. </p>
                   <h2>Fase 2: Schetsen</h2>
                   <p>Bij de tweede fase zijn is youri begonnen met het schetsen van de website en layout. Hierdoor kunnen we zien hoe de website een beetje er uit gaat zien.<br>
                   Hier zijn de schetsen die we toen hadden gemaakt:</p>
                   <img src="../../Images/schets.jpg" style="width: 99%;">
                   <p style="font-size: 80%;">*De schetsen zijn groter in de Images folder*</p>
                   <p><table><tr>
                       <li>Als u kan zien heeft youri aardig wat schetsen van de website.</li>
                       <li>De eerste schets is voor de welcome page dit is de pagina waar alle gebruiker op kunnen zien hoe de website in elkaar zit.</li>
                       <li>De tweede schets is voor de post pagina hier op kunnen alle gebruikers die ingelogt zijn posten plaatsen en bekijken.</li>
                       <li>De derde schets is voor de post pagina zelf en hier is te zien dat de gebruiker een capatcha moet invoeren die bepaald of de gebruiker een robot is of niet.</li>
                       <li>De vierde schets is voor de contact pagina hierop staan allemaal gegevens waar mensen contact kunnen opnemen met de support.</li>
                       <li>De vijfde schets is voor de create a post page hierop kunnen gebruikers een post plaatsen met een titel, hun baan en hun probleem.</li>
                       <li>De zesde tot en met de elfde schets is voor de alle pagina's met login en register knop.</li>
                       </tr></table>
                   </p>
                   <h2>Fase 3: Skelet maken</h2> 
                   <p>Het begon allemaal met de welcome page die er nog toen heel basic eruit zag. Met een lelijke navbar en geen achtergrond<br>
                   Zo zag de website eruit toen het skelet klaar was van de welcome pagina:</p>
                   <img src="../../Images/Begin.jpg" style='width: 90%; height: 400px;'>
                   <p>Zo zag de website eruit op 26 September 2017.<br> 
                       Vergeleken met nu is dit een gigantische verandering, maar de layout is ongeveer hetzelfde gebleven.<br>
                       Hetzelde geld voor de profile pagina.<br>
                       De layout van het profiel is ongeveer hetzelfde gebleven, maar hier zijn wel nog veel dingetjes toegevoegt.<br>
                       U Kunt alle files, op github, hier terug vinden: <a href="https://github.com/Masterkiller171/School_Project_webs">Tot en met 26 September 2017</a> | <a href="https://github.com/Masterkiller171/School_prjct">Vanaf 27 September 2017</a>.
                       
                   </p>
                   <h2>Fase 3: Beginnen met server sided programming (PHP)</h2> 
                   <p>Youri begon met de registratie pagina en na dat is hij verder gegaan met de login.
                       Daarna is het alle data op het profiel gekomen (met veel moeite).
                       Hier is ook de meeste frustratie uitgekomen, maar ook de meeste vreugde. Ik kan nog herineren dat ik de registratie per se wilde af maken.
                       Ik zat gewoon blijheid te lachen en van al die moeite die naar een werkend systeem heeft gebracht. Een groot probleem dat ik tegen begon te komen was
                       het feit dat er geen data van de database naar mijn pagina's wilde komen. </p>
                   <h3>Probleem oplossingen</h3> 
                    <h2>Fase 4: Updaten van alle pagina's, visueel</h2> 
                    <p>Na een enige tijd was het toch tijd om de pagina's een mooier uiterlijk gegeven en dus begonnen met het updaten van de navbar.<br>
                    Van een un-dynamic en zero aligned navbar, naar een navbar met dropdowns en dynamic viewports</p>
                    <h2>Fase 5: Debugging van alle PHP, Jquery en JS code</h2>
                    <p>Het meeste debugging heb ik gedaan toen ik de code schreef, maar na uren testen, komen er altijd weer bugs naar boven. En die moeten opgelost worden.<br>
                        Bijvoorbeeld: ik had een probleem veroorzaakt dat alle namen van ingeloggde personen vermist waren.<br>
                    De reden voor dat was een comma die verkeerd was geplaatst in de Reg.php pagina.</p>
    </div> </div>
</body>
</html>
    

