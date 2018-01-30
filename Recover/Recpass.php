<?php
include "Functions.php";
 if($_SERVER['REQUEST_METHOD']== 'POST'){
$email = $conn->escape_string($_POST['mail']);
$recover = $conn->escape_string($_POST['recover']);
$result = $conn->query("SELECT * FROM userinfo WHERE Email='$email' AND Recode='$recover'");

$_SESSION['Mail'] = $email;
$_SESSION['Recover'] = $recover;
if ($result->num_rows == 0){ // User doesn't exist
    $_SESSION['message'] = "User with that email and recovery code doesn't exist!";
}else{
    header("Location: Chanpass.php");
}
 }
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
            <p style="color: red;"> <?php $_SESSION['message'] ?> </p>
            <div class="u-form">
                <span><p>Enter your Email:</p></span>
                <input type="text" name="mail" /><br><br>
                <span><p>Enter your Recovery Code:</p></span>
                <input type="text" name="recover" /><br><br>
                </div>
    </text-align-cent> 
        <div class="padder"><button class="button" type="submit" style="border-radius: 10px; opacity: 0.8; background-color: #5FF85F;">Get password</button></div>  
        </div>
    </form>
</body>
</html>