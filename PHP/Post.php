<?php include "Functions.php";
$postid = $_GET['id'];
$postdt = $conn -> query("SELECT post_topic, post_detail, post_date FROM `topic_data` WHERE post_id='$postid'");
$sql = $postdt  -> fetch_assoc();

if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(isset($_POST['comment'])){
        $cmmntid = $_SESSION['id'];
        if(isset($cmmntid)){                         
        $Comment = mysql_real_escape_string($_POST['cmmnt']);
        $datetime = date("d/m/y");
        $conn -> query("INSERT INTO `comments`(`cmmnt_Comment`, `cmmnt_date`, `user_id`) VALUES ('$Comment','$datetime','$cmmntid') ");
        }else{
            $_SESSION['message'] = 'Please login to perform this action';
            header("Location: Login.php");
        }
    }
}
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
       <textarea name="cmmnt" placeholder="Comment on <?php echo $sql['post_topic'] ?>" style="width: 70%; height: 10%;"></textarea>
       <input type="submit" value="Comment" style="width: 20%; height: 10%; float: right;" name="comment">
       </form>
    </div>
    <?php echo cmmnt()?>
    </div>
    </body>
</html>