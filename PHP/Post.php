<?php include "Functions.php";
$postid = $_GET['id'];
$postdt = $conn -> query("SELECT post_topic, post_detail, post_date FROM `topic_data` WHERE post_id='$postid'");
$sql = $postdt  -> fetch_assoc();
?>
<html>
   <head>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Logboek.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sql['post_topic'] ?></title>
</head>
<body>
    <?php echo button()?>
    <div class="filler"></div>
    <?php echo navbar() ?>
    <div class="filler two"></div>
    <div id="wrapperr">
    <div class="body">
       <h3 style="font-size: 160%;"><?php echo $sql['post_topic'] ?></h3>
       <p><?php echo $sql['post_detail'] ?></p>
       <p style="text-align: right;"><?php echo $sql['post_date'] ?></p>
       <hr><br>
       <form method="post">
       <textarea name="cmmnt" placeholder="Comment on <?php echo $sql['post_topic'] ?>"></textarea>
       <input type="submit" value="Comment">
       </form>
    </div>
    </div>
    </body>
</html>