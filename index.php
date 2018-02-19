<?php include 'PHP/Functions.php'; 
if($_SERVER['REQUEST_METHOD']== 'POST'){
if(isset($_POST['userquer'])){
$username = $_POST['userquer'];
$quary = $conn -> query("SELECT * FROM userinfo WHERE Username='$username'");
$sqlll = mysqli_fetch_array($quary, MYSQLI_ASSOC); //Splicing all data from from

$_SESSION['userUsername'] = $sqlll['Username'];
$_SESSION['userName'] = $sqlll['Name'];
$_SESSION['userSurname'] = $sqlll['Surname'];
$_SESSION['userEmail'] = $sqlll['Email'];
$_SESSION['userSpecialty'] = $sqlll['Specialty'];
$_SESSION['userDays'] = $sqlll['days'];
$_SESSION['userMonth'] = $sqlll['month'];
$_SESSION['userYear'] = $sqlll['year'];
$_SESSION['userGender'] = $sqlll['Gender'];
$_SESSION['userTime'] = $sqlll['time'];
$_SESSION['userComment'] = $sqlll['Comment'];
if(isset($sqlll['Website'])){
$_SESSION['userWebsite'] = $sqlll['Website'];
}
    header("Location: Userprofile/customuser.php");
}
}

?>
<html lang="en">

<head>
    <title>Hello - <?php if(isset($_SESSION['Name'])){ echo $_SESSION['Name'];}else{ echo 'User';} ?></title>
    <link rel="stylesheet" type="text/css" href="CSS/Main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <h4><?php button() ?></h4><br><br>
<!-- Function for navbar /PHP/Libary.php -->
    <?php navbar() ?>
    <div id="wrapper">
        <div class="right_box">        
            <br>
        <th>
       <form method="post">
           <input type="text" name="userquer" placeholder="Find other users" style="width: 90%; height: 30px; border-radius: 5px; border: 1px solid;"/><br>
           <input type="submit" value="Find user" style="width: 90%; height: 30px; border-radius: 5px; background-color: white; font-size: 110%; border: none;  opacity: 0.8;" />
      </form>
        </th>
        <p><?php echo $_SESSION['message']; ?></p>
        </div>
    <div class="left-filler"></div>
    <div class="body" style="height: 85%;">
        <strong><h1>Welcome To<bold> Innoform</bold></h1></strong>

            <br>
            <h5>  
            <strong> Hallo en welkom op Innoform.</strong> Deze website is gemaakt voor de mensen onder ons die hulp nodig hebben bij het maken voor project.
            Mensen die hulp nodig hebben voor een onderzoek. Hier kunt u dus die help krijgen voor dat onderzoek. Iedereen op deze website,
            heeft of geeft hulp aan andere mensen. 
            </h5>
            <h5>  
             Laten we beginnen met het opzetten en het registratreren van uw profiel. Om te beginnen met het registreren van uw account.
             Om te beginnen klikt u op Registratie/ login als u hierop klikt krijgt u de login pagina op uw scherm. Om verder te gaan naar
             naar de registratie, klikt u op de registratie knop boven aan het login scherm. Als u hier op klikt word u naar de registratie geleid.
            Als u eenmaal bent aangekomen op de registratie pagina kunt uw gegevens invullen en een kort stukje schrijven over uw baan.
            Zorg dat u alles invult want als dat niet zo is word u terug geleid naar de registratie pagina. Maar dat is geen probleem want
            als u per ongeluk de pagina herlaad dan word alle informatie in de goede vakken voor u ingevult en dus geen zorgen hoeft te maken.            
            </h5>
            <h5>
            Als u al uw informatie heeft ingevuld word u naar de verify pagina geleid. Hier staat uw email. En vraagt de website of dit uw email is.
            Als het uw email is dan is het geen probleem en ook als het niet zo is want u kunt gewoon uw email invullen en  verify klikken. 
            U krijgt dan nog een keer de verify pagina te zien maar dan met u verbeteerde email adress. Als u dan nog een keer op de knop klikt 
            dan word u verder geleid.
            </h5>
            <h5>
                U word dan verder geleid naar de recovery pagina. Op deze pagina krijgt u een code te zien. Onthoud deze code goed want op dit moment
                is er geen mogelijkheid om opnieuw te krijgen. En dus zu ik het ergens bewaren op uw computer voor het geval dat.
                Deze code kunt u dan weer gebruiken als u uw wachtwoord vergeten bent. Want dan kunt u klikken op forgot password 
                en dan kunt u uw email en de code invullen en dan krijgt u uw wachtwoord en email terug.
            </h5>
            <h5>
                Als u dit allemaal heb voldaan kan u uw profiel bekijken. Hierop staat alle data die u net heeft ingevult of gaat invullen.
                Al deze dat is veilig op geslagen in onze database en het wachtwoord is vertaald tot een hash string via een md5 encryptie.
                Dus al uw data word veilig opgeslagen en is veilig bewaard tegen hackers.
            </h5>
            <h5>
                En nu dat u uw profiel heeft kunt u naar andere gebruikers hun profiel bekijken. Deze gebruikers kunt u volgen en komen dan 
                in uw followings tab terecht. Op dit moment kunt u 1 iemand volgen. Als u iemand volgt kunt u nu ook via uw profiel naar die gebruiker
                zijn of haar profiel door op hun naam te klikken.
                En deze gebruikers kunnen ook u volgen en die komen dan in de followers tab terecht. Hier kunt u het zelfde doen als in de followings tab.
                U kunt naar het profiel gaan maar ook de comment lezen van de gebruiker lezen en hun naam. De comment is alleen te zien als u uw cursor er overheen
                gaat.
                
            </h5>
</div>
    </div>
   
    <div class="filler two">
    </div>
    <div class="footer">
        <h1> Made by Youri Bontekoe</h1>
    </div>
</body>

</html>
