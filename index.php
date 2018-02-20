<?php include 'PHP/Functions.php'; 

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

    <div class="left-filler"></div>
    <div class="body" style="height: auto;">
        <strong><h1>Welcome To<bold> Innoform</bold></h1></strong>

            <br>
            <h5>  
            Greetings visitors of Innoform. Innoform is a forum built to help people develop ideas. Do you have a question about something you have no knowledge off? Ask it here to someone who has. Do you need money for materials to develop something? Place your project here so people can see it. If you want all of this, all you need to do is <a href="../PHP/Reg.php">register</a>.If you have any questions you can look them up at support or contact us. 
                <br>
                Good luck with your projects.
               - Innform team
            </h5>
</div>
    </div>
   
</body>

</html>
