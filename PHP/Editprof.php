<?php
include 'Functions.php'; 
   $id = $_SESSION['id'];
$query = $conn ->query("SELECT * FROM userinfo WHERE id= '$id'");
$sql = mysqli_fetch_array($query, MYSQLI_ASSOC);
$Usersel = $sql['Username'];
$Namesel = $sql['Name'];
$Surnamesel = $sql['Surname'];
$Specialtysel = $sql['Specialty'];
$Emailsel = $sql['Email'];
$Commentsel = $sql['Comment'];
$daysel = $sql['days']; 
$monthsel = $sql['month'];
$yearsel = $sql['year'];

if($_SERVER['REQUEST_METHOD']== 'POST'){

if(isset($_POST["Username"])){
    //User update
$User = $_POST["Username"];
$conn ->query("UPDATE userinfo SET Username= ". $User . " WHERE id = '$id'"); 
$_SESSION['Username'] = $User;
}


if(isset($_POST["Name"])){
    //Name update
$Name = $_POST["Name"];
$conn ->query("UPDATE userinfo SET Name = ". $Name . " WHERE id = '$id'");
$_SESSION['Name'] = $_POST["Name"];
}

if(isset($_POST["Surname"])){
    //Surname update
$Surname = $_POST["Surname"];
$conn ->query("UPDATE userinfo SET Surname = ". $Surname . " WHERE id = '$id'"); 
$_SESSION['Surname'] = $_POST["Surname"];

 }


if(isset($_POST["Specialty"])){  
//Specialty update
$Specialty = $_POST["Specialty"];
$conn ->query("UPDATE userinfo SET Specialty = ". $Specialty . " WHERE id = '$id'"); 
$_SESSION['Specialty'] = $_POST["Specialty"];
}

if(isset($_POST["gender"])){
//Gender update
$Gender = $_POST["gender"];
$conn ->query("UPDATE userinfo SET Gender = ". $Gender . " WHERE id = '$id'"); 
$_SESSION['Gender'] = $Gender; 
}


if(isset($_POST["Email"])){
//Email update
$Email = $_POST["Email"];
$conn ->query("UPDATE userinfo SET Email = ". $Email . " WHERE id = '$id'"); 
$_SESSION['Email'] = $Email;
}




if(isset($_POST["Comment"])){
    //Comment update
$Comment = $_POST["Comment"];
$conn ->query("UPDATE userinfo SET Comment = ". $Comment . " WHERE id = '$id'"); 
$_SESSION['Comment'] = $_POST["Comment"];
}





if(isset($_POST["days"])){
    //Days update
$days = $_POST["days"];
$conn ->query("UPDATE userinfo SET days = ". $days . " WHERE id = '$id'"); 
$_SESSION['days'] = $_POST["days"];
}


if(isset($_POST["month"])){
//Month update
$month = $_POST["month"];
$conn ->query("UPDATE userinfo SET month = ". $month . " WHERE id = '$id'"); 
$_SESSION['month'] = $_POST["month"];
}



if(isset($_POST["year"])){
    //Year update
$year = $_POST["year"];
$conn ->query("UPDATE userinfo SET year = ". $year . " WHERE id = '$id'"); 
$_SESSION['year'] = $_POST["year"];
}
}

?>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Profile.css"> 
    <link rel="stylesheet" href="../CSS/Main.css"> 
    <link rel="stylesheet" href="../CSS/Reg.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <A href="edit.html" >Logout</A>
       
  <!-- Function for navbar /PHP/Libary.php -->
    <?php navbar()?>
     <div class="container">
      <div class="row">
      <div class="col-md-5  toppad">
      </div>
          
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title"><h3> <?php  echo $names =$conn-> query("Username FROM userinfo WHERE id='".$id."'" );?></h3>
            </div>
            <div class="panel-body">
              <div class="row">                                              
                <div class=" col-md-9 col-lg-9" style="background-color: white; border-radius: 10px; opacity: 0.8;">                    
                   <h3 style="text-align: center;">Change your profile here</h3> 
                    <form method="post">
                  <table class="table table-user-information">
                      
                    <tbody>
                        <tr> 
                        <td>Username</td>
                        <td><input type="text" name="Username" value="<?php echo $Usersel ?>" style="width:250px;"></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><input type="text" name="Name" value="<?php echo $Namesel ?>"style="width:250px;"></td>
                      </tr>
                      <tr>
                        <td>SurName</td>
                        <td><input type="text" name="SurName" value="<?php echo $Surnamesel ?>"style="width:250px;"></td>
                      </tr>
                      <tr>
                        <td>Department:</td>
                        <td><input type="text" name="Department" value="<?php echo $Specialtysel ?>"style="width:250px;"></td>
                      </tr>
                             <tr>
                        <td>Gender</td>
<td><input value="1" name="gender" class="subject-list" type="checkbox" id="fem">Female 
<input value="2" name="gender" class="subject-list" type="checkbox" id="mal"> Male</td>
    <script type="text/javascript">
	    $('.subject-list').on('change', 
            function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
             
    </script>
                             </tr>
			 <tr><p3>When were you born?</p3>
                                <span><select name="days">
                                        <option value="dayemp" name="dayemp" id="dayemp" required><?php echo $daysel?></option>
                                    <?php days_loop() //Loop from Funtions.php wich will output 30 days?>

                                </select></span>
                                
                                <span><select name="month">
                                    <option value="monthemp" name="monthemp" id="monthemp" required><?php echo $monthsel?></option>
                                   <?php month_loop() //Loop from Funtions.php wich will output 12 months?>

                                </select></span>
                                
                                <select name="year">
                                    <option value="yearemp" name="yearemp" id="yearemp" required><?php echo $yearsel?></option>
                                    <?php year_loop() //Loop from Funtions.php wich will output current - 117 (117 because the oldest human was 117) ?>

                                </select>
                      <tr>
                        <td>Email</td>
                        <td><input type="email" name="Username" value="<?php echo $Emailsel ?>" style="width:250px;"></td>
                      </tr>
                       <tr>
                        <td>Comment</td>
                        <td><textarea name="textarea" style="width:250px;height:150px;" name="Comment"><?php echo $Commentsel ?></textarea></td>
                     </tr>                  
                      </tbody> 
                     </table>                                          <
                     div style="padding: 0 0 20px 30%;">
                    <button type="submit" class="button" style="background-color: #21ec0c; width:250px; color: black; border-radius: 10px;">Apply</button>
                    </div> 
                      </form>
                                     
                    
      </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    </body>
</html>

