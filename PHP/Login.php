<?php 
include "Functions.php";
 if($_SERVER['REQUEST_METHOD']== 'POST'){

$email = $conn->escape_string($_POST['mail']);
$result = $conn->query("SELECT * FROM userinfo WHERE Email='$email'");

if ($result->num_rows == 0){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: Login.php");
}
else { // User exists
    $sql = $result -> fetch_assoc();
    if(isset($_POST['pass']) == $sql['Password']) {
        
    $_SESSION['Username'] = $sql['Username'];
    $_SESSION['Name']     = $sql['Name'];
    $_SESSION['Surname']  = $sql['Surname'];
    $_SESSION['Password'] = $sql['Password'];
    $_SESSION['Comment']  = $sql['Comment'];
    $_SESSION['Gender']   = $sql['Gender'];
    $_SESSION['Specialty']= $sql['Specialty'];
    $_SESSION['days']     = $sql['days'];
    $_SESSION['month']    = $sql['month'];
    $_SESSION['year']     = $sql['year'];
    $_SESSION['time']     = $sql['time'];
    $_SESSION['Website']  = $sql['Website'];
    $_SESSION['id']       = $sql['id'];
    $_SESSION['Email']    = $email;  
    $_SESSION['perm']     = $sql['Perm'];
    $_SESSION['active']   = 1;
   $user =  $sql['Username'];
     $conn -> query("UPDATE userinfo SET Online='1' WHERE Username='$user'");
     header("location: Profile.php");
    }else{
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: Login.php");
    }
}
 }
?>
<html lang= en>
    <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="login">
		<div class="login-screen" style="300px;">
                    <div class="lb-header">
            <p3>Or if you already have an account:</p3>
            <a href="Reg.php" class="active" id="login-box-link">Register</a>
        </div>
			<div class="app-title">
				<h1>Login</h1>
            
			</div>
            <p style="color: red;"><?php echo $_SESSION['message']; ?></p>
       <form method="post">
			<div class="login-form">
				<div class="control-group">                               
                <input type="email" class="login-field" placeholder="Email Adress" id="login-name" name="mail" required/> 
                <input type="button" style="width: 15%; "/>                   
				</div>                        
				<div class="control-group">                                             
                <input class="Password" type="password"  placeholder="Password..." name='pass' autocomplete="on" required/> 
                <input type="button" value="show" id="showHide"  onclick="change()" style="width: 15%; "/>      
                <a href="../Recover/Recpass.php" style="text-decoration: none; display: inline-block;">Forgot Password?</a>                                      
                 </div>
                               
 <script type="text/javascript">
  $(document).ready(function() {
   $("#showHide").click(function() {  //Checking the button has been pressed
    if($(".Password").attr("type") === "password") {  //Checking if text field is password
     $(".Password").attr("type", "text"); //If imput is password it will change to text(visible)

    } else {
      $(".Password").attr("type", "password"); //And if its already on text it will change to password
    }
  });
});
 
function change(){
   var Check = document.getElementById("showHide").value; //Getting value from hide/show button
   
    /* will check whether check has a value of show and if not change it to show*/
   if(Check === "show"){ 
      return  document.getElementById("showHide").value = "hide";
   }else{
     return  document.getElementById("showHide").value = "show";
        }
};
 </script>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				
                            <button type="submit" class="btn" required/>login
        </div>
    </form>
    <br>
               <div class="lb-header">
            <p3>Or if you want to go back:</p3>
            <a href="../index.php" class="active" id="login-box-link">Go Back!</a>
        </div>
			</div>
			
    
            </div>
		</div>
</body>
</html>