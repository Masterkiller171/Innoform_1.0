<?php include 'Functions.php';
           ?>
  <html lang =en>
   <head>
       
    <title>Post-Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Post-page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="right_floater">
        <?php button($conn, $id) ?></div>
    
    <div class="filler"></div>

    <?php navbar()?>
    <div class="filler two"></div>
    <div class="left-filler"></div>
    <div class="container">
        <ul>
<?php echo  all_post() ?>
       
        </ul>
               
</div>
            
</body>
</html>