<?php
include "../PHP/Functions.php";
$Recovery1 = rand(1000,9999);
$Recovery2 = rand(1000,9999); 
$Recovery3 = rand(1000,9999);
$Recovery4 = rand(1000,9999);

if($_SERVER['REQUEST_METHOD']== 'POST'){
$_SESSION['message'] = "";   
        // We have a match, activate the account
        $_SESSION['message'] = 'Your account has been activated, you can now login';
            $time = date('d-m-Y');//Setting time since account creation
            $_SESSION['time'] = $time;
            $Username =  $_SESSION['Username'];
            //$_SESSION['Avatar'] = $picture_path;  
            $Name      = $_SESSION['Name'];
            $Surname   = $_SESSION['Surname'];  
            $Email     = $_SESSION['Email'];
            $Password  = $_SESSION['Password'];
            $Comment   = $_SESSION['Comment'];
            $Gender    = $_SESSION['Gender'];
            $Specialty = $_SESSION['Specialty'];
            $Website   = $_SESSION['Website'];
            $days      = $_SESSION['days'];
            $month     = $_SESSION['month'];
            $year      = $_SESSION['year'];
            $id        = $_SESSION['id'];
            $perm      = $_SESSION['perm'];
            $Recode = $Rec1.$Rec2.$Rec3.$Rec4;
            $_SESSION['active'] = 1;
            if(isset($Recode)){
            
            $sql  = "INSERT INTO userinfo (Username, Name, Surname, Email, Password, Comment, Gender, Specialty, days, month, year, time, Website, id, Perm, Recode)"
            . "VALUES ('$Username', '$Name', '$Surname', '$Email', '$Password', '$Comment', '$Gender', '$Specialty', '$days', '$month', '$year', '$time', '$Website', '$id', '$perm','$Recode')";
            $sqlol = "INSERT INTO following (id) VALUES ('$id')";
            $conn -> query('UPDATE userinfo SET Online="1"');
            $conn -> query($sqlol);
            $conn -> query($sql);
        $_SESSION['Login'] = '<a href="Login.php">Continue to login page</a>';
        header("Location: ../PHP/Profile.php");
            }
}
        ?>
<html lang="en">
<head>
    <title>Verify - Innoform</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="filler"></div>
    <form method="post">
    <div class="login-box" style="height: auto; opacity: 0.8;">
        <text-align-cent>
            <div class="u-form">
                <h3>You're almost done!</h3><br>
                <p>This is your recovery code. When you loose your password you may retreive your password by using this code on the Login Page.<br><br>
                    <strong>Please copy it</strong> if you don't you can still get it on your profile page under recovery code.</p>
                </div>
   <p> <?php Echo $Recovery1.'-'.$Recovery2.'-'.$Recovery3.'-'.$Recovery4?></p><br>  
        <p><button type="submit" style="width: 60%; color: black; opacity: 0.9;">Accept</button> </p>
            </text-align-cent>
        </div>
        </form>
</body>
</html>
        