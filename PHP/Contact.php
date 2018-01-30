<html lang="en">

<head>
    <title>Contact Page</title>
    <?php include 'Functions.php';?>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    
<h4><a href="Reg.php" style="<?php echo$butreg ?>">
<?php button($conn, $id) ?></a></h4>
    
<div class="filler"></div>
    <!-- Function for navbar /PHP/Libary.php -->
    <?php navbar()?>
    <div class="filler two"></div>
    <div class="left-filler"></div>
    <div id="wrapper">   
    <div class="body">
        <strong><p> Welcome to our contact page here you will find some solvation to your problems you might experience</p></strong>
        <table><li>Contact our admins for futher help and assistance</li>
            <li>Email: Notarealemail@gmail.com</li>
        </table>
Please contact one of our <strong></strong>admins for your issue.
   
    </div>
</div>

</body>

</html>
