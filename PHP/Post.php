<?php include "Functions.php";
$_SESSION['message'] = '';
$postid = $_GET['id'];
$postdt = $conn -> query("SELECT author_name, post_topic, post_detail, post_date FROM `topic_data` WHERE post_id='$postid'");
$sql = $postdt  -> fetch_assoc();
$conn -> query("UPDATE topic_data SET post_views = post_views + 1 WHERE post_id='$postid'");
$usernam = $sql['author_name'];
$conn -> query("UPDATE userinfo SET total_views = total_views + 1 WHERE Username='$usernam'");
if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(isset($_POST['cmmnt'])){
        $Comment = $_POST['cmmnt'];
        if(isset($Comment) && !empty($Comment)){ 
        if(isset($_SESSION['id'])){                         
          $cmmntid =  $_SESSION['id'];
        $datetime = date("d/m/y");
        $conn -> query("INSERT INTO `comments`(`cmmnt_Comment`, `cmmnt_date`, `user_id`, `post_id`) VALUES ('$Comment','$datetime','$cmmntid','$postid') ");
        }else{
            $_SESSION['message'] = 'Please login to perform this action';
            header("Location: Login.php");
        }
        
    }else{
            $_SESSION['message'] = 'Please write a comment!';
        }
    }
    if(isset($_POST['upvote'])){
        if($_SESSION['active'] >= 1){
        $id =  $_SESSION['id'];
        $postnum = $_POST['postnum'];
        $usernum = $_POST['usernum'];
        $conn -> query("UPDATE comments SET cmmnt_point = cmmnt_point + 1 WHERE cmmnt_id='$postnum'");
        $conn -> query("UPDATE userinfo SET My_points = My_points + 1 WHERE id='$usernum'");
        }else{
            $_SESSION['message'] = 'Please login to perform that action';
            header("Location: Login.php");
        }
    }
    if(isset($_POST['downvote'])){
        if($_SESSION['active'] >= 1){
        $postnum = $_POST['postnum'];
        $usernum = $_POST['usernum'];
        $conn -> query("UPDATE comments SET cmmnt_point = cmmnt_point - 1 WHERE cmmnt_id='$postnum'");
        $conn -> query("UPDATE userinfo SET My_points = My_points + 1 WHERE id='$usernum'");
        }else{
            $_SESSION['message'] = 'Please login to perform that action';
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
       <h3 style="font-size: 160%;"><?php echo $sql['post_topic'] ?> - <?php echo $sql['author_name'] ?></h3>
       <p><?php echo $sql['post_detail'] ?></p>
       <p style="text-align: right;"><?php echo $sql['post_date'] ?></p>
       <hr>
       <p style="color: red;"><?php if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
} ?></p>
       <br>
       <form method="post">
       <textarea name="cmmnt" placeholder="Comment on <?php echo $sql['post_topic'] ?>" style="width: 70%; height: 10%;"></textarea>
       <input type="submit" value="Comment" style="width: 20%; height: 10%; float: right;" name="comment">
       </form>
    </div>
    <?php echo cmmnt()?>
    </div>
    </body>
</html>