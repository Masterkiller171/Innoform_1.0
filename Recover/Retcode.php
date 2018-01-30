<?php
include "../PHP/Functions.php";
 if($_SERVER['REQUEST_METHOD']== 'POST'){
$email = $conn -> escape_string($_POST['mail']);
$pass = $conn -> escape_string($_POST['pass']);
$result = $conn -> query("SELECT * FROM userinfo WHERE Email='$email' AND Password='$pass'");

if ($result -> num_rows == 0){ // User doesn't exist
    $_SESSION['message'] = "User with that email and recovery code doesn't exist!";
}else{
    $sql = $result -> fetch_assoc();
    $_SESSION['Recode'] = $sql['Recode'];
    header("Location: Reccode.php");
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
            <p style="color: red;"> <?php echo $_SESSION['message'] ?> </p>
            <div class="u-form">
                <span><p>Enter your Email:</p></span>
                <input type="text" name="mail" /><br><br>
                <span><p>Enter your pass:</p></span>
                <input type="password" name="pass" /><br><br>
                </div>
    
        <p><button class="button" type="submit" style="border-radius: 10px; opacity: 0.8; background-color: #5FF85F; color: black;">Continue</button></p>
        </text-align-cent> 
        </div>
    </form>
</body>
</html>