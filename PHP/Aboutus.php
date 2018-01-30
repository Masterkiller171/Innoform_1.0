<?php

?>
<html>
<head>
    <title>InnoForm</title>
    <?php include 'Functions.php';?>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="right_floater">
        <h4><a href="../PHP/Reg.php" 
    style="<?php echo$butreg ?>">
    <?php button($conn, $id) ?></a></h4></div>
    <div class="filler"></div>
    <!-- Function for navbar /PHP/Libary.php -->
    <?php navbar()?>
    <div class="filler two"></div>
    <div class="left-filler"></div>
    <div class="body">
        <strong><h1>About us</h1></strong>
    </div>


</body>
</html>