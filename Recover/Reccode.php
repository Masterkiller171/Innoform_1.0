<?php
include "../PHP/Functions.php";
?>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <br>
    <?php navbar() ?>
        <div class="filler"></div>
    <form method="post">
    <div class="login-box" style="height: auto; opacity: 0.9;">
        <text-align-cent>
            <p style="color: red;"> <?php echo $_SESSION['message'] ?> </p>
                <h2> <?php echo $_SESSION['Recode']; ?></h2>
    
            <p><a href="../PHP/Profile.php"class="button" style="border-radius: 10px; opacity: 0.8; background-color: #5FF85F; color: black;">Go back to profile</a></p>
        </text-align-cent> 
        </div>
    </form>
</body>
</html>