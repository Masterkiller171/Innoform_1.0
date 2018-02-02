<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Post-input.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Form- <?php echo $Username?></title>
    
</head>
      
<body>
    <!-- Function for navbar /PHP/Libary.php -->
    <?php navbar()?>
    
    <text-align-cent>
        <div class="post-box">

            <div class="filler"></div>
            <p1>Title</p1>
            <form class="signup" id="Post_edit" action="Edit_topic.php">
                
                <div class="u-form">
                    <input type="title" placeholder="Title..." style="margin-left: 121px; margin-top: 13px; width: 575px;">
                </div>
                <p1>Title</p1>
                <div class="u-form">
                    <input type="title" placeholder="Title...", id="post_topic", style="height: 47px; width: 574px; margin-left: 124px; margin-top: 13px;">
                </div>
                <p1>Title</p1>
                <div class="u-form">
                    <textarea name="textarea" placeholder="Explain your problem", id="post_detail", style="margin-left: 126px; margin-top: 62px; width: 572px; height: 193px;"></textarea>
                </div>
                <button type="submit"  class="button buttonc" style="margin-top: 2px; margin-left: 129px; width: 568px;">Edit...</button>  
            </form>
        </div>
    </text-align-cent>





</body>