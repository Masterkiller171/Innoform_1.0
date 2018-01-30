<?php
include "../PHP/Functions.php";
if(isset($_SESSION['Mail']) && isset($_SESSION['Recover'])){
$mail = $_SESSION['Mail'];
$recover = $_SESSION['Recover'];
$pass = $conn->query("SELECT Password FROM userinfo WHERE Email='$mail' AND Recode='$recover'");
}
 if($_SERVER['REQUEST_METHOD']== 'POST'){
     $chanpass = $conn-> real_escape_string($_POST['pass']);
     if(isset($chanpass)){
         $conn -> query("UPDATE userinfo SET Password='$chanpass' WHERE Email='$mail'");
         header("Location: ../PHP/Login.php");
     }else{
         header("Location: ../PHP/Login.php");
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
            <div class="u-form">
                <p>Your email = <?php echo $_SESSION['Mail']; ?> </p>
                <p>Your Recovery = <?php echo $_SESSION['Recover']; ?> </p>
                <p>Your Password = <?php echo $pass; ?> </p>
                <input type="input" name="pass" style="height: 40px; width: 60%">
                <br>
                       <p><input type="submit" class="button" style="border-radius: 10px; height: auto; width: 60%; background-color: green;">continue</p>
                
               </div>
    

       </text-align-cent> 
        </div>
    </form>
</body>
</html>

