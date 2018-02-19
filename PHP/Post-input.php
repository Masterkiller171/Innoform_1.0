<?php include "../PHP/Functions.php";
 if($_SERVER['REQUEST_METHOD']== 'POST'){
    $author = $_SESSION['id'];
     $author_name = $_SESSION['Name'];
    //define variables and put them into table
	
	 $post_topic = $_POST['post_topic'];
     $post_detail = $_POST['post_detail'];      
          
     $datetime = date("d/m/y");
     
     if(isset($post_detail) && isset($post_topic) && isset($author) && isset($author_name)){
    //Insert variables into table
     $sqls ="INSERT INTO topic_data (post_topic, post_detail, post_date, author, author_name) VALUES ('$post_topic', '$post_detail','$datetime', '$author', '$author_name')";
     $result = $conn -> query($sqls);
         
      $conn -> query("UPDATE userinfo SET My_posts = My_posts + 1 WHERE id = $author");
      $conn -> query("UPDATE userinfo SET My_points = My_points + 1 WHERE id='$author'");
      header("Location: ../index.php");
     }else{
         $_SESSION['message'] = 'Please fill in the required fields';
     }
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Post-input.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Form - <?php echo $_SESSION['Username']?></title>
    
</head>

<body>
    <!-- Function for navbar /PHP/Libary.php -->
    <?php navbar()?>
    
    <text-align-cent>
        <div class="post-box">
<p><?php echo $_SESSION['message']; ?></p>
            <div class="filler"></div>
            
            <form class="signup" method="post">
                <p1>Title</p1>
                <div class="u-form">
                    <input type="title" placeholder="Title..." name="post_topic" style="margin-left: 121px; margin-top: 13px; width: 575px;" required/>
                </div>
                <p1>Question</p1>
                <div class="u-form">
                    <textarea placeholder="Explain your problem" name="post_detail" style="margin-left: 126px; margin-top: 62px; width: 572px; height: 193px;" required></textarea>
                </div>
                <button type="submit" class="button buttonc" style="margin-top: 2px; margin-left: 129px; width: 568px;">Post...</button>  
            </form>
        </div>
    </text-align-cent>





</body>
</html>