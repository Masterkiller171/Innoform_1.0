<?php
include "Libary.php";
include "Connector.php";
session_start();
//Declaring message session
$_SESSION['message'] = '';
//Setting default time to greenwich time
date_default_timezone_set('GMT');
//Getting today's date (current UK greenwich time)
$_SESSION['nowtime'] = date("F j, Y, g:i a");
//Defining all variables whom'st were not defined
$Username = $Name = $Surname = $Password = $Passwordrpt = $Comment = $Email = $gender = $id = $Specialty = $str = $mysqli = $jobs = $match="";

//Setting default time to greenwich time
date_default_timezone_set('Europe/Amsterdam');

//Getting today's date (current UK greenwich time)
$_SESSION['nowtime'] = date("F j, Y, g:i a");

//Checking if function button already exists
if (!function_exists('button')) {  
//Function for button on login
function button(){ 
global $conn;

    //Getting $butreg from PHP/Libary.php
    global $butreg;

    //Getting $butout from PHP/Libary.php
    global $butout;
    
  //style for registration button
  $regbutt= '<a href ="PHP/Login.php" style="'.$butreg.' class="href"> Login/Register</a>';

  //Profile
  $probutt= '<a href ="PHP/Profile.php" style="'.$butreg.' class="href"> My Profile</a>';

   //logout
  $outbut= '<a href ="PHP/Logout.php" style="'. $butout .' float: left;""> Logout</a>';
if(isset($_SESSION['id'])){
$id= $_SESSION['id'];
$quary = $conn -> query("SELECT * FROM userinfo WHERE id='$id'");
$sql = mysqli_fetch_array($quary, MYSQLI_ASSOC);
if(!empty($sql)){
      echo $probutt, $outbut;
 } 
}else{
  echo $regbutt;
}  
}
}

//Checking if user has admin permissions or not
if (!function_exists('navbar')) {
function navbar(){
    global $navbaradmin; //Getting navbar for superior human beings from Libary.php
    global $navbar; //Getting navbar for normies from Libary.php
    global $conn;
    if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
$quary = $conn -> query("SELECT * FROM userinfo WHERE id='$id'");
$sql = mysqli_fetch_array($quary, MYSQLI_ASSOC);
if($sql['Perm'] == 2){
        echo $navbaradmin;
   }else{
       echo $navbar;
   }
}else{
       echo $navbar;
   }
}
}
//creating a loop untill 12 months 
if (!function_exists('month_loop')) {
function month_loop(){
    $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec");
    $counter = count($months);
    for ($month = 0; $month < $counter; $month++){
        echo '<option value="' . $months[$month] . '" name="mon' . $months[$month] . ' " id="mon' . $months[$month] . '" required>'. $months[$month] .'</option>';
  }
 }
}
 //creating a loop from current year - 117 to current year
if (!function_exists('year_loop')) {
 function year_loop(){
    for ($year = date("Y") - 117; $year <= date("Y"); $year++){
        echo '<option value="' . $year . '" name="year' . $year . ' " id="year' . $year . '" required>'.$year.'</option>';
    } 
  }
}
          
//Creating a loop for the amount of days in a month
if (!function_exists('days_loop')) {
 function days_loop(){ 
  for ($days = 1; $days <=31; $days++){
        echo '<option value="'. $days .'" name="day' . $days . ' " required>'.$days.'</option>';
  }
 }
}
//function for myposts on profile page --only usefull when posts are finished
function my_posts(){
    global $conn;
    $id = $_SESSION['id'];
    $mas = $conn -> query("SELECT MAX(post_id) AS post_id FROM `topic_data` WHERE author='$id'");
    $mass = $mas -> fetch_assoc();
    $max = $mass['post_id'];//$mass['post_topic'];
    $count = 1;
    while($count <= $max){
      $data = $conn -> query("SELECT post_topic, post_detail, post_date FROM `topic_data` WHERE author='$id' AND post_id='$count'");
      $sql = $data -> fetch_assoc();
      $count++;
        if($sql !== NULL){ 
        echo
         '
         <div class="box2 shadow" style="background-color: #d6ebf2;"> 
         <div class="left-filler"></div><h2 style="float: left;">'.$sql["post_topic"].'</h2> <br> <p>'.$sql["post_detail"].'</p> 
         <br> <h6>'.$sql["post_date"].' </h6></div>';
        }else{
            $count++;
        }
        
  }
    
    
}

function all_post(){
    global $conn;
    $mas = $conn -> query("SELECT MAX(post_id) AS post_id FROM `topic_data`");
    $mass = $mas -> fetch_assoc();
    $max = $mass['post_id'];
    $count = 1;
       while($count <= $max){
    $posttop = $conn -> query("SELECT post_views, post_topic, post_detail, post_date, author_name FROM `topic_data` WHERE post_id='$count'");
          $sql = $posttop -> fetch_assoc();
           
           
        echo
    '<ol>   
        <div class="box"  style="width:1000px; border-radius: 10px;">
                    <div class="cover" style="background-color: lightgrey;">
                        <h2 class="title" style="color: black;">'.$sql["post_topic"].' - '.$sql["author_name"].' </h2>
                        <p style="color: black; font-size: 90%;">'.$sql["post_views"].' views</p>
                        <p style="color: black;">'.$sql["post_detail"].'</p>
                        <p class="date" style="color: black;">'.$sql["post_date"].'</p>
                        <form method="post">
                        <input type="hidden" value="'.$count.'" name="id"> 
                        <input type="submit" name="cmmnt" style="font-size: 130%; background-color: transparent; border: none;" value="View post"> 
                        </form>
                    </div>
                </div> 
            </ol>
            <br>';
           
           
           $count++;
       }
}

function cmmnt(){ 
    global $conn;
    $postid =  $_GET['id'];
    $mas = $conn -> query("SELECT MAX(cmmnt_id) AS cmmnt_id FROM `COMMENTS` WHERE post_id='$postid'");
    $mass = $mas -> fetch_assoc();
    $max = $mass['cmmnt_id'];
    $count = 1;
    
    
       while($count <= $max){
    $cmmnt = $conn -> query("SELECT cmmnt_Comment, cmmnt_date, cmmnt_point, user_id FROM `COMMENTS` WHERE cmmnt_id='$count' AND post_id='$postid'");
          $sqls = $cmmnt -> fetch_assoc();
         $id = $sqls["user_id"];      
    $cmmnt_user = $conn -> query("SELECT Username, Name, Surname FROM `userinfo` WHERE id='$id'");       
         $sqll = $cmmnt_user -> fetch_assoc();   
    if($max > 0){ 
        if($sqls !== NULL){ 
        echo
    '<div class="filler"></div>
    <div class="body"> 
    <h5 style="text-align: left; font-size: 110%;">'.$sqll["Username"].'</h5>
    <h5 style="text-align: left;">'.$sqll["Name"].', '.$sqll["Surname"].'</h5>
    <p style="padding: 0 80% 0 0;">'.$sqls["cmmnt_Comment"].'</p>
    
    <br>
    <form method="post">
    <p style="padding: 0 85% 0 0;">
    <table cellspacing="0" cellpadding="0" style="border:none;">
    <tr>
    <th style="border:none;">
    <input type="hidden" value="'.$count.'" name="postnum">
    <input type="hidden" value="'.$sqls["user_id"].'" name="usernum">
    <button type ="submit" name="upvote" style="background-color: transparent; border: none;"><img src="../Images/arrup.png" style="width: 19%;  title="Upvote"> </button>
    <button type ="submit" name="downvote" style="background-color: transparent; border: none;"><img src="../Images/arrdwn.png" style="width: 38%;" title="Downvote"></button></th>
    <th style="border:none;"><p>'.$sqls["cmmnt_point"].' points</p></th>
    </tr>
    </table>
    </p>
    </form> 
    </div>';
            $count++;
        }else{
            $count++;
        }
           
           
     }else{
        echo '<div class="filler"></div>
        <div class="body">
        <p> No comments yet! Be the first one to comment! </p>
        </div>';
    }
    }
}