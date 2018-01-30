<?php
include 'Functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     if($_POST["inputiet"] == ''){
            header("location: ../Recover/Recovery.php");
    }else{
        $_SESSION['Email'] = $_POST["inputiet"];
        $conn -> query("UPDATE `userinfo` SET `Email` = '". $_POST["inputiet"] ."' WHERE id= ". $_SESSION['id'] ."");
    
  }
}
?>
<html lang="en">
<head>
    <title>Verify - Innoform</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body onload="disabled()">
    <div class="filler"></div>
    <form method="post">
    <div class="login-box" style="height: 15%;">
        <text-align-cent>
            <div class="u-form">
    <p3>You're almost done!</p3>
    
    <?php echo '<p3>Is this: '. $_SESSION['Email'] .' your email?</p3>';?>
    <br>
    <label for="no">No</label>
    <input type="checkbox" name="check" class="subject-list" value="no" id="no">
    <input type="text" id="outmail" name="inputiet" />
<script type="text/javascript">
          $('.subject-list').on('change', //Checking if checkbox is checked
            function() {
               $('.subject-list').not(this).prop('checked', false);  //And so when it is checked there can only be one checked
		});
                
        document.getElementById('no').onchange = function() {
        document.getElementById('outmail').disabled = !this.checked;
              };
                    
function disabled(){
        document.getElementById('outmail').disabled = true;
} 
        </script>
    <br>
  <button type ="submit" class="button buttonc" style="width: calc(50% - 22px);" id="submit" required>Verify!</button>
            </div>
    </text-align-cent>
            </div>
    </form>
</body>
</html>