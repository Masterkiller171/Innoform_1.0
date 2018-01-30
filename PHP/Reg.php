<?php
include "Functions.php";
include "Jobs.php";
$_SESSION['message'] = "";
if($_SERVER['REQUEST_METHOD']== 'POST'){
$_SESSION['Specialtytmp'] = $_POST["Job"];      
$_SESSION['Websitetmp']   = $_POST['Website'];  
$_SESSION['yeartmp']      = $_POST['year'];
$_SESSION['monthtmp']     = $_POST['month'];           
$_SESSION['Commenttmp']   = $_POST['Comment'];     
$_SESSION['Usernametmp']  = $_POST['Username'];      
$_SESSION['Nametmp']      = $_POST['Name'];        
$_SESSION['Surnametmp']   = $_POST['Surname'];
$_SESSION['Emailtmp']     = $_POST['Email'];
$_SESSION['passtmp']      = $_POST['password'];
$_SESSION['passrpttmp']   = $_POST['Passwordrpt'];
    if(isset($_POST['password']) === isset($_POST['Passwordrpt']))//Checking if passwords are the same
        {   
$Username = $conn-> real_escape_string($_POST['Username']);
$Name = $conn-> real_escape_string($_POST['Name']);
$Surname = $conn-> real_escape_string($_POST['Surname']);
$Email = $conn-> real_escape_string($_POST['Email']);
$password = $_POST['password'];
$Password = md5($password);
$days = $_POST['days'];
$month = $_POST['month'];
$year = $_POST['year'];
$id = rand(0,9999999999);
$perm = 1;
    $counter = count($Password);
   if($counter > 4 && $counter < 12){
   $countuser =  count($Username); 
   if($countuser > 4 && $countuser < 16){
   $countname =  count($Name);          
   if($countname > 2 && $countname < 16){  
            
if(isset($yearname) == false){
    
if(isset($monthname) == false){
    
if(isset($daysname) == false){
    
//Checking if Job is filled in
if(!empty($_POST["Job"]))
{
    $Specialty = $_POST["Job"] ;
}
else
{
    $Specialty =  "" ;
}

//Putting a new job into an array (work in progress)
//if(in_array($job,$jobs )){
//    return $job;
//}else{
//    array_push($jobs,"$job");
//}

//Defining variables for input and comparing 
if(isset($_POST['Website']) == TRUE){
$string_url= $_POST['Website'];
$reg_exp = "/^(http(s?):\/\/)?(www\.)+[a-zA-Z0-9\.\-\_]+(\.[a-zA-Z]{2,3})+(\/[a-zA-Z0-9\_\-\s\.\/\?\%\#\&\=]*)?$/";

//Checking if it's a valid url
  if(preg_match($reg_exp, $string_url) == TRUE){      
    $Website = $string_url;
    
      if(preg_match($reg_exp, $string_url) == FALSE){
         $_SESSION['message'] = "Website is invalid";
         $Website = '';
}}} 
//Checking if comment contains less than 200 characters
if(200 >= strlen($_POST['Comment'])){
$Comment = $conn-> real_escape_string($_POST['Comment']);    
//Checking if gender equals male or female
if(count($_POST['gender']) == 1){
  $Gender = $_POST['gender'];

/*Checking if the file is an actual picture (temporarly disabled*/
//print_r($_FILES);
//if(isset($_FILES['avatar'])){
//$picture_path = 'images/'.$_FILES['avatar']['name']; //Getting avatar and name of avatar in images file
  //  if (preg_match ("!image!",$_FILES['avatar']['type'])){  //Checking whether image file is allowed
        //Copying image file from images directory
      //  if(copy($_FILES['avatar']['tmp_name'], $picture_path)){


  $quary1 = $conn -> query("SELECT * FROM userinfo WHERE Username= '$Username'");
        if ($quary1 -> num_rows == 0){
                
  $quary2 = $conn -> query("SELECT * FROM userinfo WHERE Name= '$Name'");
        if ($quary2 -> num_rows == 0){
                
  $quary3 = $conn -> query("SELECT * FROM userinfo WHERE Surname= '$Surname'");
        if ($quary3 -> num_rows == 0){
                
  $quary4 = $conn -> query("SELECT * FROM userinfo WHERE Email= '$Email'");
        if ($quary4 -> num_rows == 0){
                
  $quary5 = $conn -> query("SELECT * FROM userinfo WHERE Password= '$Password'");
        if ($quary5 -> num_rows == 0){
            
           /*Creating sessions for all data */
            $_SESSION['Username'] = $Username; 
            //$_SESSION['Avatar'] = $picture_path;  
            $_SESSION['Name']= $Name; 
            $_SESSION['Surname'] = $Surname; 
            $_SESSION['Email'] = $_POST['Email'];
            $_SESSION['Password'] = $password;
            $_SESSION['Comment'] = $Comment;
            $_SESSION['Gender'] = $Gender;
            $_SESSION['Specialty'] = $Specialty;
            $_SESSION['Website'] = $Website;
            $_SESSION['days'] = $days;
            $_SESSION['month'] = $month;
            $_SESSION['year'] = $year;
            $_SESSION['id'] = $id;
            $_SESSION['perm'] = $perm;
            
           if(isset($_SESSION['Username']) 
                   && isset($_SESSION['Name']) 
                   && isset($_SESSION['Surname']) 
                   && isset($_SESSION['Email']) 
                   && isset($_SESSION['Password'])
                   && isset($_SESSION['Comment']) 
                   && isset($_SESSION['Gender']) 
                   && isset($_SESSION['Specialty']) 
                   && isset($_SESSION['days']) 
                   && isset($_SESSION['month']) 
                   && isset($_SESSION['year'])
                   && isset($_SESSION['id']) 
                   && isset($_SESSION['perm'])){
            header("Location: Verify-Page.php"); 
                    }
  //   $conn->close(); print_r('test');
//}else{
//     $_SESSION['message'] = "File Upload Failed!";
//     }              
//}else{
//     $_SESSION['message']= "Please only upload JPG, GIF or PNG images!";
//     }
//}else{
//     $_SESSION['message']= "Please upload an avatar";
//     }
}else{
     $_SESSION['message'] = 'Please create another password!<br>';
     }
}else{
     $_SESSION['message'] = 'Email already exists, Please create another Email! Or login!<br>';    
     }
}else{
     $_SESSION['message'] = 'Surname already exists, Please create another Surname! Or login!<br>';    
     }        
}else{
     $_SESSION['message'] = 'Name already exists, Please create another Name! Or login!<br>';     
     }
}else{
     $_SESSION['message'] = 'Username already exists, please create another Username<br>!';     
     } 
}else{
     $_SESSION['message'] = "Please select a gender!";
     } 
}else{
     $_SESSION['message'] = 'Please keep your story below 200 characters please!<br>';    
     }
}else{
     $_SESSION['message'] = "Please choose a day<br>";    
     }
}else{
     $_SESSION['message'] = "Please choose a month<br>";    
     }
}else{
     $_SESSION['message'] = "Please choose a year<br>";
     }
}else{
     $_SESSION['message'] = "Name must contain atleast 2 characters and max 16<br>";
     }
}else{
     $_SESSION['message'] = "Username must contain atleast 4 characters and max 16<br>";
     }
}else{
     $_SESSION['message'] = "Password must be between 4 and 10 characters long<br>";
     }
}else{
     $_SESSION['message'] = "The two given passwords don't match!<br>";
     }     
}

?>
<html lang='en'>
<head>
   <title>Register</title>
    <link rel="stylesheet" href="../CSS/Reg.css"> 
    <link rel="stylesheet" href="../CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <div class="login-box">
   <div class="lb-header">
            <p3>Or if you already have an account:</p3>
            <a href="Login.php" class="active" id="login-box-link">Login</a></div>
            <div class="lb-header">
            <p3>Or if you want to go back:</p3>
            <a href="index.php" class="active" id="login-box-link">Go Back</a>
        </div>
        <p style="color: red; text-align: center; white-space: nowrap;"><?php  
        echo  $_SESSION['message']   ?></p> 
        <div class="filler-small"></div>
        <form name="form1" class="signup" method="post" autocomplete="off" enctype="multipart/form-data" action="Reg.php">
            <div class="u-form">
<p3>What's your gender?</p3>
<input type="checkbox" name="gender" value="female" class="subject-list"  id="fem" /> Female 
<input type="checkbox" name="gender" value="male" class="subject-list"  id="mal"  /> Male

    <script type="text/javascript">
	    $('.subject-list').on('change', //Checking if checkbox is checked
            function() {
		    $('.subject-list').not(this).prop('checked', false);  //And so when it is checked there can noly be one checked
		});
                
            function require(){ 
             var require1 = document.getElementById('fem').checked; //Getting value from female input
             var require2 = document.getElementById('mal').checked; //Getting value from male input
        
             /* Will check if there is only one checked */
             if(require1 && require2 === false){  
                 document.getElementById("mal, fem").required = true; //And if not it will change to true
             }
        }
    </script>
            </div>
   
            
                                <p3>When were you born?</p3>
                                <select name="days">
                                    <option value="dayemp" name="dayemp" id="dayemp" required>---</option>
                                    <?php days_loop() //Loop from Funtions.php wich will output 30 days?>

                                </select>
                                
                                <select name="month">
                                    <option value="monthemp" name="monthemp" id="monthemp" required>---</option>
                                   <?php month_loop() //Loop from Funtions.php wich will output 12 months?>

                                </select>
                                
                                <select name="year">
                                    <option value="yearemp" name="yearemp" id="yearemp" required>------</option>
                                    <?php year_loop() //Loop from Funtions.php wich will output current-117 (117 because the oldest human was 117) ?>

                                </select>
                            
    <div class="u-form">
                                        <br>
                                        <input type="username" placeholder="Username..." name="Username"value="<?php 
                                        if(isset($_SESSION['Usernametmp']) == TRUE){
                                           echo $_SESSION['Usernametmp'];
                                        }
                                                ?>" autocomplete="on" required/>
            </div>
            <div class="u-form">
                <input type="name" placeholder="Name..."name='Name' autocomplete="on" value="<?php  
                if(isset($_SESSION['Nametmp']) == TRUE){
                  echo  $_SESSION['Nametmp'];
                }
                ?>" required/>
            </div>
            <div class="u-form">
                <input type="sirname" placeholder="Surname..." name='Surname' value="<?php 
                if(isset($_SESSION['Surnametmp']) == TRUE){
                 echo   $_SESSION['Surnametmp'];
                    }?>" autocomplete="on" required/>
                
            </div>
            
            <div class="u-form">
                <input type="email" placeholder="Email..." name='Email' autocomplete="on"  value="<?php 
                if(isset($_SESSION['Emailtmp']) == TRUE){
                  echo  $_SESSION['Emailtmp'];
                     }?>"required/> 
               
            </div>
            <div class="u-form">
                <input type="website" placeholder="www.yourwebsite.com (not required)" name='Website' value="<?php
                if(isset($_SESSION['Websitetmp']) == TRUE){ 
                echo $_SESSION['Websitetmp'];
                } ?>" autocomplete="on"/>
            </div>
             <div class="u-form">   
                 <input type="text" name='Job' id="searchBox" placeholder="Your job..." autocomplete="on" value="<?php  
                 if(isset($_SESSION['Specialtytmp']) == TRUE){ 
                 $_SESSION['Specialtytmp'];
                 } ?>"required/>
                 
                 <ul id="searchResults"></ul>
<script type="text/javascript">
var job = <?php echo json_encode($jobs)?>;
 
//Defining all variables
var input = document.getElementById("searchBox"),
    order = document.getElementById("searchResults"),
    jobs, jobsArray, prej, jobc, results, sortedResults;
    
//Function for searching the array for jobs
var search = function() {
  jobs = input.value.toLowerCase();
  results = [];
  jobsArray = jobs.split(" ");
  prej = jobsArray.length === 1 ? "" : jobsArray.slice(0, -1).join(" ") + " ";
  jobc = jobsArray[jobsArray.length -1].toLowerCase();
  
//Checking length of string    
for (var i = 0; i < job.length; i++) {
    var a = job[i].toLowerCase(),
        t = a.indexOf(jobc);
    
    if (t > -1) {
      results.push(a);
    }
  }
  
  evaluateResults();
};

//Evualiting results on length(input)
var evaluateResults = function() {
  if (results.length > 0 && jobs.length > 0 && jobc.length !== 0) {
    sortedResults = results.sort(sortResults);
    oder();
  } 
  else {
    clearResults();
  }
};
//Sorting on results from input
var sortResults = function (a,b) {
  if (a.indexOf(jobc) < b.indexOf(jobc)) return -1;
  if (a.indexOf(jobc) > b.indexOf(jobc)) return 1;
  return 0;
};
    
//Odering results under input
var oder = function () {
  clearResults();
  
  for (var i=0; i < sortedResults.length && i < 5; i++) {
    var ol = document.createElement("ol"),
        result = prej 
          + sortedResults[i].toLowerCase().replace(jobc, "<strong>"
          + jobc 
          +"</strong>");
  
    ol.innerHTML = result;
    order.appendChild(ol);
  }
};
    
// deleting histroy of type characters
var clearResults = function() {
  order.innerHTML = "";
};
 
//An event listener for onkeyup
input.addEventListener("keyup", search, false); 
</script>
             </div>
            <div class="u-form">
                <span><input class="password" type="password" placeholder="Password..." name='password' id="pass2" autocomplete="on" value="<?php if(isset($_SESSION['passtmp']) == TRUE){
                                           echo $_SESSION['passtmp'];
                                        }?>" required/></span>
                <span><input type="button" class="buttonf" value="show" id="showHide"  onclick="change()"/></span>
            </div>
            <div class="u-form">
                <span><input class="Passwordrpt" type="password" placeholder="Confirm Password..." name='Passwordrpt'id="rpt" autocomplete="on" value="<?php if(isset($_SESSION['passrpttmp']) == TRUE){
                                           echo $_SESSION['passrpttmp'];
                                        }?>" required/></span>
                <span><input type="button" class="buttonf" id="hideShow" value="show" onclick="changerpt()"/></span>

<script type="text/javascript">
 $(document).ready(function() {
  $("#showHide").click(function() { //Checking the button has been pressed
    if ($(".password").attr("type") === "password"){ //Checking if text field is password
      $(".password").attr("type", "text"); //If imput is password it will change to text(visible)

    } else {
      $(".password").attr("type", "password"); //And if its already on text it will change to password
    }
  });
 });

 $(document).ready(function() {
  $("#hideShow").click(function() {  //Checking the button has been pressed
    if ($(".Passwordrpt").attr("type") === "password") {  //Checking if text field is password
      $(".Passwordrpt").attr("type", "text"); //If imput is password it will change to text(visible)

    } else {
      $(".Passwordrpt").attr("type", "password"); //And if its already on text it will change to password
    }
  });
});

function change()
{
   var Check = document.getElementById("showHide").value; //Getting value from hide/show button
   
    /* will check whether check has a value of show and if not change it to show*/
   if(Check === "show"){ 
      return  document.getElementById("showHide").value = "hide";
   }else{
     return  document.getElementById("showHide").value = "show";
   }
};

function changerpt()
{
   var Check = document.getElementById("hideShow").value;//Getting value from hide/show button
    
   /* will check whether check has a value of show and if not change it to show*/
   if(Check === "show"){
      return  document.getElementById("hideShow").value = "hide";
   }else{
     return  document.getElementById("hideShow").value = "show";
   }
};
                </script>
            </div>                            
              <!--  <div class="filler-small"></div>
            <div class="avatar"><label>Select profile picture: </label> 
                <input type="file" name="avatar" accept="image/*" required/></div> -->
            <div class="u-form">
                <textarea type='textarea' name='Comment' placeholder="Tell something about yourself" style="width:250px;height:150px;" value="<?php  
                 if(isset($_SESSION['Commenttmp']) == TRUE){ 
                 $_SESSION['Commenttmp'];
                 } ?>" required/></textarea>
                <div class="u-form">
                    <button type="submit" value="register" name="register" class="buttonc button" style="width: calc(50% - 22px);" id="submit" onclick="require()" required> Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>