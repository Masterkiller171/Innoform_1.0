<?php
$dec = 'style="text-decoration: none;" color: #705090;';

$butreg = '
    color: #705090;
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    float: right;
    display: absolute;';

$butout = '
    color: #705090;
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    float: left;
    display: absolute;';

//Loop on profile page for posts

//Link to login page
$Login ='<a href ="../PHP/Reg.php"> Please Login</a>';

//Link to Create Post page
$Create ='<a href="../PHP/Post-input.php">Create post</a>';

$navbar =' 
    <nav style="font-size: 140%; background-color: white;">
    <div class="left-filler"></div>
   <ul>
       <li class="sub-menu-parent"><a href="../index.php" '. $dec .'> Welcome</a>
       </li>
     <li class="sub-menu-parent">
       <a '. $dec .'> Posts</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Post-page.php" '. $dec .'>New Posts</a></li>
         <li><a href="../PHP/Post-page.php" '. $dec .'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="../PHP/Post-input.php" class="sub-menu-parent" >Create post</a>
     <li class="sub-menu-parent"><a '. $dec .'>Projects</a>
       <ul class="sub-menu">
         <li><a href="#" '. $dec .'>New Projects</a></li>
         <li><a href="#" '. $dec .'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a '. $dec .'>Support</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Rules.php" '. $dec .'>Rules</a></li>
         <li><a href="../PHP/Contact.php" '. $dec .'>FAQ</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>History</a>
       <ul class="sub-menu">
         <li><a href="#" '. $dec .'>Post History</a></li>
         <li><a href="#" '. $dec .'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>About us</a>
       <ul class="sub-menu">
         <li><a href="PHP/Aboutus.php" '. $dec .'>Our project</a></li>
       </ul></li>
   </ul>
   
 </nav>
    <div class="filler"></div>';
//The navbar for (almost) every page
$navbar =' 
    <nav style="font-size: 140%; background-color: white;">
    <div class="left-filler"></div>
   <ul>
     <li class="sub-menu-parent">
       <a '. $dec .'> Posts</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Post-page.php" '. $dec .'>New Posts</a></li>
         <li><a href="../PHP/Post-page.php" '. $dec .'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="../PHP/Post-input.php" class="sub-menu-parent" >Create post</a>
     <li class="sub-menu-parent"><a '. $dec .'>Projects</a>
       <ul class="sub-menu">
         <li><a href="#" '. $dec .'>New Projects</a></li>
         <li><a href="#" '. $dec .'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a '. $dec .'>Support</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Rules.php" '. $dec .'>Rules</a></li>
         <li><a href="../PHP/Contact.php" '. $dec .'>FAQ</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>History</a>
       <ul class="sub-menu">
         <li><a href="#" '. $dec .'>Post History</a></li>
         <li><a href="#" '. $dec .'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>About us</a>
       <ul class="sub-menu">
         <li><a href="PHP/Aboutus.php" '. $dec .'>Our project</a></li>
       </ul></li>
   </ul>
   
 </nav>
    <div class="filler"></div>';

$navbaradmin =' <nav style="font-size: 120%; background-color: white; font-family: Verdana, Geneva, sans-serif;">
<div class="left-filler"></div>
     <ul>
       <li class="sub-menu-parent"><a href="../index.php" '. $dec .'> Welcome</a>
       </li>
     <li class="sub-menu-parent">
       <a '. $dec .'> Posts</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Post-page.php" '. $dec .'>New Posts</a></li>
         <li><a href="../PHP/Post-page.php" '. $dec .'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="../PHP/Post-input.php" class="sub-menu-parent" '. $dec .'>Create post</a>
     <li class="sub-menu-parent"><a '. $dec .'>Projects</a>
       <ul class="sub-menu">
         <li><a href="#" '. $dec .'>New Projects</a></li>
         <li><a href="#" '. $dec .'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a '. $dec .'>Support</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Rules.php" '. $dec .'>Rules</a></li>
         <li><a href="../PHP/Contact.php" '. $dec .'>FAQ</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>History</a>
       <ul class="sub-menu">
         <li><a href="../PHP/" '. $dec .'>Post History</a></li>
         <li><a href="../PHP/" '. $dec .'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>About us</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Aboutus.php" '. $dec .'>Our project</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>logboek</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Stappenplan.php" '. $dec .'>Stappenplan</a></li>
             <li><a href="../PHP/logboek.php" '. $dec .'>Logboek</a></li>
       </ul></li>
   </ul>
 </nav>
 <div class="filler"></div>';

//$logout = ' <A href="" style="color: Blue;
//    padding: 5 1%;
//    text-align: center;
//    text-decoration: none;
//    display: inline-block;
//    background-color: lightblue;" onclick=" '. logout($conn)  . ' " >
//    Logout</A>';
