<?php
include '../PHP/Functions.php';
$_SESSION['message'] = '';
$follow = $_SESSION['userUsername'];
$Following = $conn -> query("SELECT Following FROM userinfo WHERE Username='$follow'");
foreach($Following as $out){
   $following =  implode($out);
}
/* Getting all information from  follower */
$quary = $conn -> query("SELECT * FROM userinfo WHERE Username='$following'");

$sqlll = mysqli_fetch_array($quary, MYSQLI_ASSOC); //Splicing all data from from
$name = $sqlll['Name'];
$surname = $sqlll['Surname'];
$ccomment = $sqlll['Comment'];
$comlen = strlen($ccomment);
if($comlen > 20){
  $comment =  substr($ccomment, 20);
}else{
    $comment = '...'.$sqlll['Comment'] ;
}

$online = $conn -> query("SELECT Online FROM userinfo WHERE Username='$following'");
 if(isset($online)){
 if($online == '1'){
     $ofnile = "Online";
     $offn = ' 
               <div class="fllwinbox" style="background-color:#7fff7f"><div class="fllwtxt">           
                         <input type="submit" value="  '.$following.'- '.$ofnile.'" name="fllws" style="background: transparent; border: none;">
                         <br>'.$name.",".$surname.'?>  
                         <div class="hidden"> '.$comment.'<br> 
                        </div>
                     </div></div>';
 }else{
     $ofnile = "Offline";
     $offn = '
                 <div class="fllwinbox" style="background-color:#ff7f7f"><div class="fllwtxt">           
                         <input type="submit" value=" '. $following.'- '.$ofnile .'"  name="fllws" style="background: transparent; border: none;"/>
                         <br>'.$name.",".$surname.'
                         <div class="hidden">'. $comment.'<br> </div>
                         </div></div>';
 }
 }
$user = $_SESSION['userUsername'];
$quarie = $conn -> query("SELECT * FROM userinfo WHERE Following='$user'");
$quarei = mysqli_fetch_array($quarie, MYSQLI_ASSOC); //Splicing all data from from
$followings = $quarei['Username'];
$namee = $quarei['Name'];
$surnamee = $quarei['Surname'];
$ccomments = $quarei['Comment'];
$Onlines = $quarei['Online'];
$comlens = strlen($ccomments);
if($comlen > 20){
  $comments =  '...'. substr($ccomment, 20) ;
}else{
    $comments = $quarei['Comment'] ;
}
if(isset($quarei)){
    if($Onlines == '1'){
     $ofniles = 'Online';
     $fllwrs = '<div class="fllwinbox" style="background-color:#7fff7f"><div class="fllwtxt">           
                        <input type="submit" value="  '.$followings.'- '.$ofniles.'" name="fllwrs" style="background: transparent; border: none;"/>
                        '.$namee.",".$surnamee.'  
                        <div class="hidden"> '.$comments.'<br> 
                        </div>
                    </div></div>';
 }elseif($Onlines == '0'){
     $ofniles = 'Offline';
       $fllwrs = '<div class="fllwinbox" style="background-color:#ff7f7f"><div class="fllwtxt">           
                        <input type="submit" value=" '. $followings.'- '.$ofniles .'"  name="fllwrs" style="background: transparent; border: none;"/>
                        '.$namee.",".$surnamee.'
                        <div class="hidden">'. $comments.'<br> </div>
                        </div></div>';        
}
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
if(isset($_POST['fllwrs'])){
 if(isset($followings)){
$quary = $conn -> query("SELECT * FROM userinfo WHERE Username='$followings'");
if(isset($quary) AND !empty($quary)){
$sqlll = mysqli_fetch_array($quary, MYSQLI_ASSOC); //Splicing all data from from
$_SESSION['userUsername'] = $sqlll['Username'];
$_SESSION['userName'] = $sqlll['Name'];
$_SESSION['userSurname'] = $sqlll['Surname'];
$_SESSION['userEmail'] = $sqlll['Email'];
$_SESSION['userSpecialty'] = $sqlll['Specialty'];
$_SESSION['userDays'] = $sqlll['days'];
$_SESSION['userMonth'] = $sqlll['month'];
$_SESSION['userYear'] = $sqlll['year'];
$_SESSION['userGender'] = $sqlll['Gender'];
$_SESSION['userTime'] = $sqlll['time'];
$_SESSION['userComment'] = $sqlll['Comment'];
if(isset($sqlll['Website'])){
$_SESSION['userWebsite'] = $sqlll['Website'];
$_SESSION['userFollowing'] = $sqlll['Following'];
}
if(isset($_SESSION['userUsername'])){
    header("Location: ../Userprofile/customuser.php");
}
} 
}
}
    if(isset($_POST['fllws'])){
         if(isset($following)){
$quary = $conn -> query("SELECT * FROM userinfo WHERE Username='$following'");
if(isset($quary) AND !empty($quary)){
$sqlll = mysqli_fetch_array($quary, MYSQLI_ASSOC); //Splicing all data from from
$_SESSION['userUsername'] = $sqlll['Username'];
$_SESSION['userName'] = $sqlll['Name'];
$_SESSION['userSurname'] = $sqlll['Surname'];
$_SESSION['userEmail'] = $sqlll['Email'];
$_SESSION['userSpecialty'] = $sqlll['Specialty'];
$_SESSION['userDays'] = $sqlll['days'];
$_SESSION['userMonth'] = $sqlll['month'];
$_SESSION['userYear'] = $sqlll['year'];
$_SESSION['userGender'] = $sqlll['Gender'];
$_SESSION['userTime'] = $sqlll['time'];
$_SESSION['userComment'] = $sqlll['Comment'];
if(isset($sqlll['Website'])){
$_SESSION['userWebsite'] = $sqlll['Website'];
$_SESSION['userFollowing'] = $sqlll['Following'];
}
if(isset($_SESSION['userUsername'])){
    header("Location: ../Userprofile/customuser.php");
}
} 
}
    }
    if(isset($_POST['fllw'])){
   if($_SESSION['active'] > 0){   
    //$addtabl = "ALTER TABLE `following` ADD '$follow' VARCHAR( 255 ) NOT NULL";
    $addfllwr = "UPDATE userinfo SET Following = '$follow' WHERE id='$id'";
    $conn -> query($addfllwr);
   }else{
        $_SESSION['message'] = "To perform that action you must be signed in";
       header("Location: ../PHP/Login.php");
   }
}
}
?>
<html lang="en">
    <head>
    <title>Innoform - <?php echo $_SESSION['userUsername'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Profile.css"> 
    <link rel="stylesheet" href="../CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>     
       <strong><?php button()?> </strong>
       <div class="filler"></div>
        <?php navbar()?>  
        
             <div class="fllwbox" style="width: 10%;"> 
    <strong> 
    <p style="   
    text-align: center; 
    width: 100%; 
    height: auto; 
    padding: 5px;
    background-color: #d6ebf2">Following</p></strong>
    <div class="padders">
<form method="post">
<?php 
 if(isset($offn)){
    echo $offn;
 }else{
     echo "No followings";
 }
?>
               </form>
    </div>
                </div>
            <div class="left-filler"></div>
<div class="fllwbox" style="width: 10%;">  
    <strong> <p style='
    text-align: center; 
    width: 100%; 
    height: auto; 
    padding: 5px;
    background-color: #d6ebf2'>Followers</p></strong>
    
    <div class="padders">
 <form method="post">   
<?php 
if(isset($fllwrs)){
    echo $fllwrs;
}else{
    echo "No followers";
}
?>
 </form>
    </div>
</div>  
        <div class="container" style="float: right;">
      <div class="row">
      <div class="col-md-5 toppad" style="background-color: white; border-radius: 10px; padding: 10px 50px; height: 70%">      
          <strong><h4 class="shad">Member Since:</h4></strong>         
          <br>
          <strong><h5 class="shad"><?php echo $_SESSION['userTime'] ?></h5></strong>
           <div class="boxp" style="height: 70%;">
                        <form method="post">
              <button type="submit" name="fllw"><strong>Follow <?php echo $_SESSION['userUsername']?></strong></button>
          </form>
               <div class="cover left">
               <p style="text-align: center;">My posts</p>
              <hr>
           <?php echo /*my_loop()*/ 'Not avaible'; ?>
           </div>
           </div>
      </div><div class="left-filler"></div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            
          <div class="panel panel-info">
            <div class="panel-heading">
            <div class="panel-body">
              <div class="row">
                  <div class="left-filler"></div>
                  <tabb>
                      <div class=" col-md-9 col-lg-9 " style="height: 65.5%;">
                   
                  <table class="table table-user-information">
                    <tbody>
<div class="panel-title" style="background-color: white; opacity: 0.8; border-radius: 10px; white-space: nowrap;"><h3><?php echo $_SESSION['userName'].', '.$_SESSION['userSurname'] ?></h3>
</div>
                    <hr><div class="filler"></div>
                        <tr> 
                        <td>Username</td>
                        <td><?php echo $_SESSION['userUsername'];?>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><?php echo $_SESSION['userName'];?>
                      </tr>
                      <tr>
                        <td>SurName</td>
                        <td><?php echo $_SESSION['userSurname']?>
                      </tr>
                      <tr>
                        <td>Department:</td>
                        <td><?php echo $_SESSION['userSpecialty']?>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $_SESSION['userDays']. "/" .$_SESSION['userMonth']. "/" .$_SESSION['userYear'] ?>
                      </tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $_SESSION['userGender']?>
                             </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['userEmail']?>         
                      </tr>
                       <tr>
                        <td>Comment</td>
                        <td><?php echo $_SESSION['userComment']?>
                     </tr>
                      </tbody>
                    </table>
                </div>
                  </tabb>
                </div>             
              </div> 
            </div>
          </div>
                          
        </div>
      </div>
    </div>
</body>
</html>