<?php
require ("Functions.php");
?>
<html lang="en">
<head>
    <title>Logboek </title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Logboek.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: lightblue;">

    <h4><?php button() ?></h4><br><br> 
<!-- Function for navbar /PHP/Libary.php -->
    <nav>
     <ul>
       <li class="sub-menu-parent"><a href="../index.php" style='<?php echo $_SESSION['dec'] ?>'> Home</a>
       </li>
     <li class="sub-menu-parent">
       <a style='<?php echo $_SESSION['dec'] ?>'> Posts</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Post-page.php" style='<?php echo $_SESSION['dec'] ?>'>New Posts</a></li>
         <li><a href="../PHP/Post-page.php" style='<?php echo $_SESSION['dec'] ?>'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="Post-input.php" class="sub-menu-parent" style='<?php echo $_SESSION['dec'] ?>'>Create post</a>
     <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>' >Projects</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Projects.php" style='<?php echo $_SESSION['dec'] ?>'>New Projects</a></li>
         <li><a href="../PHP/Projects.php" style='<?php echo $_SESSION['dec'] ?>'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>'>Support</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Rules.php" style='<?php echo $_SESSION['dec'] ?>'>Rules</a></li>
         <li><a href="../PHP/Contact.php" style='<?php echo $_SESSION['dec'] ?>'>Contact</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>'>History</a>
       <ul class="sub-menu">
         <li><a href="../PHP/" style='<?php echo $_SESSION['dec'] ?>'>Post History</a></li>
         <li><a href="../PHP/" style='<?php echo $_SESSION['dec'] ?>'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>'>About us</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Aboutus.php" style='<?php echo $_SESSION['dec'] ?>'>Our project</a></li>
         <li><a href="../PHP/" style='<?php echo $_SESSION['dec'] ?>'>Background story</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a style='<?php echo $_SESSION['dec'] ?>'>logboek</a>
       <ul class="sub-menu">
         <li><a href="Stappenplan.php" style='<?php echo $_SESSION['dec'] ?>'>Verslag</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>';
    <div id="wrapperr">
    <div class="body" style="height: auto;">
        <strong><h1>Logboek</h1></strong>
        <table>
            <tr>
                <th><h3>Datum:</h3></th>
            <th><h3>Wat ik heb gedaan:</h3></th>
            <th><h3>Problemen:</h3></th>
            <th><h3>Hoeveel uur/minuten:</h3></th>
           </tr>
           <tr>
            <td>1 -Sep 2017</td> 
            <td>*Begonnen met visio web te creeren</td>
            <td>Geen</td>
            <td>2 uur</td>
           </tr>
             <tr>
            <td>4 - Sep 2017</td> 
            <td>*Verder gegaan met visio</td>
            <td>Geen</td>
            <td>1 uur</td>
             </tr>
           <tr>
            <td>8 - Sep 2017</td> 
            <td>*Verder gegaan met visio</td>
            <td>Geen</td>
            <td>1 uur</td>
           </tr>
           <tr>
            <td>10 - Sep 2017</td> 
            <td>*Visio is klaar en begonnen met schetsen van pagina's</td>
            <td>Geen</td>
            <td>2.5 uur</td>
           </tr>
           <tr>
            <td>11 - Sep 2017</td> 
            <td>*Ben begonnen met het uitbedenken van de website</td>
            <td>Geen</td>
            <td>3 uur</td>
           </tr>
           <tr>
            <td>12 - Sep 2017 tot 22 - Sep 2017</td> 
            <td>*Ben begonnen met een cursus the volgen</td>
            <td>Geen</td>
            <td>26 uur</td>
           </tr>
           <tr>
            <td>15 - Sep 2017</td> 
            <td>*Start van poject aanmaak in github</td>
            <td>Geen</td>
            <td>1 uur</td>
           </tr>
           <tr>
            <td>16 - Sep 2017</td> 
            <td>*Heb een navbar gemaakt en de index pagina</td>
            <td>Geen</td>
            <td>1.5 uur</td>
           </tr>
           <tr>
            <td>18 - Sep 2017</td> 
            <td>*Heb het skelet van Register en Login en post pagina</td>
            <td>Geen</td>
            <td>70 Minuten</td>
           </tr>
           <tr>
            <td>18 - Sep 2017</td> 
            <td>*Skelet verder uitgewerkt</td>
            <td>Geen</td>
            <td>1.5 uur</td>
           </tr>
           <tr>
            <td>19 - Sep 2017</td> 
            <td>*fixed sign-up link on login page.<br>
                *added new file for login<br>
*Fixed large box on post-page<br>
*Established connection php to MySQL<br>
*Added basic Profile</td>
            <td>Geen</td>
            <td>70 Minuten</td>
           </tr>
           <tr>
            <td>20 - Sep 2017</td> 
            <td>*Started with an basic post-creator</td>
            <td>Geen</td>
            <td>1.5 uur</td>
           </tr>
           <tr>
            <td>24 - Sep 2017</td> 
            <td>*Made all pages into php</td>
            <td>*caused problem with registerpage not loading</td>
            <td>0.5 uur</td>
           </tr>
           <tr>
            <td>25 - Sep 2017</td> 
            <td>*Fixing registration</td>
            <td>*Caused problems with uploading to database<br>
            *Heb via stackoverflow opgezocht en zo proberen het probleem op te lossen</td>
            <td>0.5 uur</td>
           </tr>
           <tr>
            <td>26 - Sep 2017</td> 
            <td>*fixed registration and put restrictions on register.<br>
                -You can only have 200 or less characters in Comment<br>
                -passwords must match</td>
            <td>Geen</td>
            <td>5 uur</td>
           </tr>
           <tr>
            <td>28 - Sep 2017</td> 
            <td>*Reworked navigation bar<br>
                *Finalized register page<br>
*working on female/ male checkbox</td>
            <td>Geen</td>
            <td>5 uur</td>
           </tr>
            <tr>
            <td>29 - Sep 2017</td> 
            <td>*Created aboutus page<br>
                *Improved contact.php<br>
*Added the new page to the navbar </td>
            <td>Geen</td>
            <td>1 uur</td>
           </tr>
           <tr>
            <td>1 - Oct 2017</td> 
            <td>*set up an email bot<br>
               *set up login </td>
            <td>Geen</td>
            <td>4 uur</td>
           </tr>
           <tr>
            <td>7 - Oct 2017</td> 
            <td>*added date of birth to registration<br>
                *fixed login page<br>
                *re/lg button changes when active = 1, so only when the user is logged in it will change to my profile<br>
                *created an email bot<br>
*created an email verify page </td>
            <td>En dan weer Login kapot gemaakt</td>
            <td>1.5 uur</td>
           </tr>
           <tr>
            <td>8 - Oct 2017</td> 
            <td>*Improved main page<br>
               *started working on profile editing </td>
            <td>Geen</td>
            <td>1.5 uur</td>
           </tr>
           <tr>
            <td>10 - Oct 2017</td> 
            <td>*added Javascript folder<br>
                *Added javascript function file<br>
                *Added javascript visuals file<br>
*working on a query for jobs on reg page </td>
            <td>Geen</td>
            <td>30 Minuten</td>
           </tr>
           <tr>
            <td>11 - Oct 2017</td> 
            <td>*Added post box on profile<br>
                *Created file editprof<br> 
            *Added edit page for profile</td>
            <td>Geen</td>
            <td>30 Minuten</td>
           </tr>
           <tr>
            <td>12 - Oct 2017</td> 
            <td>*Added support for weebsite url on reg page<br>
*Added logout button</td>
            <td>*Ben in problemen gelopen met suggestion systeem en dus ben naar mijn vader gegaan voor help</td>
            <td>3 uur</td>
           </tr>
           <tr>
            <td>14 - Oct 2017</td> 
            <td>*Finally added a working AJAX suggestion query 
            </td>
            <td>Geen</td>
            <td>2 uur</td>
           </tr>
           <tr>
            <td>16 - Oct 2017</td> 
            <td>*Improved query for jobs<br>
                *Added input textfields on editprof<br>
                *Added functions for updating userinfo
            </td>
            <td>Geen</td>
            <td>30 Minuten</td>
           </tr>
           <tr>
            <td>18 - Oct 2017</td> 
            <td>*Added a working database<br>
                *Working on moving jobs to database
            </td>
            <td>Geen</td>
            <td>20 Minuten</td>
           </tr>
           <tr>
            <td>19 - Oct 2017</td> 
            <td>*Got a working suggestion from a php file<br>
                *Removed the js link on most pages<br>
                *optimised the reg.php code
            </td>
            <td>Geen</td>
            <td>90 Minuten</td>
           </tr>
           <tr>
            <td>28 - Oct 2017</td> 
            <td>*Added password buttons<br>
    -show button (shows password)<br>
    -hide button (hides password)<br>
*Fixed ccs files not loading in<br>
*Reset on user permission<br>
*Started working on permissions<br>
*Going to start on admin control
            </td>
            <td>Geen</td>
            <td>80 Minuten</td>
           </tr>
           <tr>
            <td>6 - Nov 2017</td> 
            <td>*Added input disabled onload on verify-page<br>
*Removed email bot<br>
*Changed location on Reg.php from welcome.php to Profile.php<br>
*Added editprof<br>
*Fixed all editprof apply buttons<br>
*Fixed error messages on profile.php<br>
*Added checking if function already exist in Functions.php<br>
            </td>
            <td>Geen</td>
            <td>80 Minuten</td>
           </tr>
             <tr>
            <td>7 - Nov 2017</td> 
            <td>*Cleaned js functions file<br>
*Added session for id<br>
*Added button style for show hide on reg.php<br>
*Working on sessions for reg.php
            </td>
            <td>Geen</td>
            <td>15 Minuten</td>
           </tr>
           <tr>
            <td>8 - Nov 2017</td> 
            <td>*Created libary file<br>
*Added navbar as a variable in libary<br>
*Fixed permission errors<br>
*Removed js links<br>
*Fixed profile mysql selectors
            </td>
            <td>Geen</td>
            <td>15 Minuten</td>
           </tr>
           <tr>
            <td>13 - Nov 2017</td> 
            <td>*Added file for logboek<br>
*Added sessions for email and password<br>
*Added admin account<br>
  -Admin account has acces to logboek<br>
 -Admin active number is 2
            </td>
            <td>Geen</td>
            <td>65 Minuten</td>
           </tr>
           <tr>
            <td>18 - Nov 2017</td> 
            <td>*Added a lot of comments on Reg.php<br>
*Improved index.php<br>
*Added admin account<br>
*fixed admin navbar
            </td>
            <td>Geen</td>
            <td>70 Minuten</td>
           </tr>
           <tr>
            <td>20 - Nov 2017</td> 
            <td>*Working on adding an avatar upload to Reg.php<br>
*Creating sessions for all user data<br>
 -Id is done<br>
 -Username is done
            </td>
            <td>Geen</td>
            <td>30 Minuten</td>
           </tr>
           <tr>
            <td>21 - Nov 2017</td> 
            <td>*All info on reg.php now displays on account page<br>
*Adjusted login.php
            </td>
            <td>Geen</td>
            <td>60 Minuten</td>
           </tr>
           <tr>
            <td>22 - Nov 2017</td> 
            <td>*Solved issue causing verify page not to reload<br>
*Fixed verify page redirecting to Profile.php<br>
 *When logged in account on main and every other page now displays my profile
            </td>
            <td>Geen</td>
            <td>70 Minuten</td>
           </tr>
           <tr>
            <td>23 - Nov 2017</td> 
            <td>*All data can now be added to database<br>
*Created new database called "innofurm"<br>
*working on login page
            </td>
            <td>*All sessions work only on profile.php</td>
            <td>120 Minuten</td>
           </tr>
           <tr>
            <td>27 - Nov 2017</td> 
            <td>*fixed login page to not update data in database<br>
*optimised code in Login.php<br>
*Added lost of new comments in Login.php
            </td>
            <td>Geen</td>
            <td>50 Minuten</td>
           </tr>
           <tr>
            <td>29 - Nov 2017</td> 
            <td>*Changed month numbers to month names
            </td>
            <td>Geen</td>
            <td>20 Minuten</td>
           </tr>
           <tr>
            <td>30 - Nov 2017</td> 
            <td>*Fixed broken pages
            </td>
            <td>*Id session is still a problem</td>
            <td>20 Minuten</td>
           </tr>
            <tr>
            <td>7 - Dec 2017</td> 
            <td>*Added Login.css<br>
*Reworking Login.php<br>
*Fixed sessions on login and function.php<br>
*Partialy fixed avatar upload.
            </td>
            <td>(De avatars willen niet in een $_SESSION blijven zitten)</td>
            <td>20 Minuten</td>
           </tr>
           <tr>
            <td>10 - Dec 2017</td> 
            <td>*Updated Login to a more professional look
            </td>
            <td>Geen</td>
            <td>40 Minuten</td>
           </tr>
           <tr>
            <td>12 - Dec 2017</td> 
            <td>*Finished the login page<br>
*Added a background for main page<br>
*Fixed hide/show button on login page
            </td>
            <td>(De images zorgde voor lag)</td>
            <td>80 Minuten</td>
           </tr>
           <tr>
            <td>13 - Dec 2017</td> 
            <td>*Improved index page
            </td>
            <td>Geen</td>
            <td>60 Minuten</td>
           </tr>
           <tr>
            <td>14 - Dec 2017</td> 
            <td>*Improved main page by moving login into the navbar<br>
                *removed lines below the posts in the right box on main page<br>
                *Improved login page
            </td>
            <td>Geen</td>
            <td>40 Minuten</td>
           </tr>
           <tr>
            <td>16 - Dec 2017</td> 
            <td>*Removed picture uploading<br>
                *improved navbar<br>
                *Decreased loading time on reg.php
            </td>
            <td>Geen</td>
            <td>120 Minuten</td>
           </tr>
           <tr>
            <td>17 - Dec 2017</td> 
            <td>*Added Logout.php<br>
*Now able to logout<br>
*Improved navbar<br>
*Sessions no longer getting destroyed on page reload
            </td>
            <td>Geen</td>
            <td>40 Minuten</td>
           </tr>
             <tr>
            <td>18 - Dec 2017</td> 
            <td>*Still working on Login.php<br>
*Improved editprof.php<br>
*Improved navbar<br>
*Almost finished editprof.php
            </td>
            <td>Geen</td>
            <td>30 Minuten</td>
           </tr>
             <tr>
            <td>19 - Dec 2017</td> 
            <td>*Website now fully functional!<br>
*Improved Profile.php<br>
*Added specific time to Profile page<br>
*Working on Admin Role
            </td>
            <td>Geen</td>
            <td>230 Minuten</td>
           </tr>
            <tr>
            <td>20 - Dec 2017</td> 
            <td>*Added Logboek.php<br>
                *Added Verslag.php<br>
                *Filled in all of the info on Logboek.php<br>
                *Added an admin account<br>
                -Only the admin can acces this page<br>
                *Fixed navbar on <br>
                *Added automatic database make script<br>
                *Added button on index.php to create an admin account
            </td>
            <td>Te veel vrije tijd</td>
            <td>250 Minuten</td>
           </tr>
           <tr>
            <td>22 - Dec 2017</td> 
            <td>*Users can no longer create infinite accounts with the same information<br>
                *Data on registration will now be in the input of the input fields of Reg.php
            </td>
            <td>Geen</td>
            <td>120 min</td>
           </tr>
           <tr>
            <td>24 - Dec 2017</td> 
            <td>*Fixed data in input fields on Reg.php when there was no previous input.
            </td>
            <td>Geen</td>
            <td>30 min</td>
           </tr>
           <tr>
            <td>25 - Dec 2017</td> 
            <td>*Added a return to homepage button on Reg.php<br>
                *Added refill of input on Reg.php for passwords<br>
               *Fixed repeating background on Reg.php
            </td>
            <td>Geen</td>
            <td>30 min</td>
           </tr>
           <tr>
            <td>28 - Dec 2017</td> 
            <td>*Created Mialver.php<br>
                *Created Verify.php<br>
                *Started working on email verification.
            </td>
            <td>Problemen met mail server</td>
            <td>60 min</td>
           </tr>
           <tr>
            <td>8 - Jan 2018</td> 
            <td>-Removed the mailer (for now)<br>
                *Added a working recovery code generator<br>
                *User will be able to use the recovery code to retrieve lost pass words
            </td>
            <td>Geen</td>
            <td>120 min</td>
           </tr>
           <tr>
            <td>9 - Jan 2018</td> 
            <td>*Recovery code generator now fully works.<br>
                *Added redirect on Verify-Page to Recovery.<br>
                *All data will now be uploaded from Recovery.php and not from Reg.php as before.<br>
                *Added Recovery in colom in database
            </td>
            <td>Geen</td>
            <td>90 min</td>
           </tr>
                      <tr>
            <td>10 - Jan 2018</td> 
            <td>*Added Chanpass.php<br>
*You can now retrieve your password when you lost it<br>
*Implemented a fully working recovery system<br>
*Added last page visited system so when someone is not supposed to be on a certain page they will get send back (not fully implemented)
            </td>
            <td>Geen</td>
            <td>120 min</td>
           </tr>
            <tr>
            <td>11 - Jan 2018</td> 
            <td>*Reworked editprof.php<br>
*editing profile is now partially functional
            </td>
            <td>Geen</td>
            <td>90 min</td>
           </tr>
                                  <tr>
            <td>12 - Jan 2018</td> 
            <td>*Fixed recovery page<br>
*Started working on user look up

            </td>
            <td>Geen</td>
            <td>60 min</td>
           </tr>
                       <tr>
            <td>13 - Jan 2018</td> 
            <td>*Added user profile file<br>
                *Added user profile search up<br>
*Users will be redirected to custom profile page if requested (not finished yet)
            </td>
            <td>Data van andere gebruikers moesten naar een aparte session</td>
            <td>180 min</td>
           </tr>
                             <tr>
            <td>14 - Jan 2018</td> 
            <td>*Users can now look up other users their profile<br>
                *Fixed user search bar showing incorrectly on index by moving it to a separate box<br>
                *Fixed department not showing up<br>
                *Fixed clipping glitch on profile.php<br>
*working on a following/ followers system
            </td>
            <td>Data wilde niet in de sessions gaan</td>
            <td>120 min</td>
           </tr>   
           <tr>
            <td>15 - Jan 2018</td> 
            <td>*Users may now follow one person<br>
                *Fixed custom user page not loading in<br>
                *Fixed follow box clipping with time box<br>
                *Added a license to the project<br>
                *Updated readme file
            </td>
            <td>Veel following boxen clipte met het profiel</td>
            <td> 90 min</td>
           </tr> 
                      <tr>
            <td>16 - Jan 2018</td> 
            <td>*Still looking for a solution for multiple followers/following
            </td>
            <td>Ik kreeg het probleem niet opgelost en ben dan met een follower verder gegaan</td>
            <td> 120 min</td>
           </tr> 
                                 <tr>
            <td>17 - Jan 2018</td> 
            <td>*users are now be able to go to their following's their page<br>
                *Limited followings to 1 (because having more than 5 is not possible at the moment)<br>
                *Improved followers box

            </td>
            <td>Geen</td>
            <td> 180 min</td>
           </tr> 
                                 <tr>
            <td>18 - Jan 2018</td> 
            <td>*Users are now be able to see their followings followings<br>
                *User are now be able to go to their followlings followings's pages<br>
                *Added more data to the followings box<br>
                *Added footer to profile pages<br>
                *Improved footer<br>
                *Improved followings box
            </td>
            <td>Geen</td>
            <td> 150 min</td>
           </tr> 
           <tr>
         <td>19 - Jan 2018</td> 
         <td>*Users can now see if their followings are online<br>
             -The following box will turn green if online<br>
             -And red if offline<br>
             *Added followings button and followers button<br>
             *Improved followings box
            </td>
            <td>Geen</td>
            <td> 180 min</td>
           </tr> 
         <tr>
         <td>20 - Jan 2018</td> 
         <td>*Users can now see their follower followers<br>
             -Users are able to see if follow is online<br>
             *Textbox of follower and following will turn green (online) and red (Offline)<br>
             *Users are now be able to see their followings followers<br>
             *Improved profile<br>
             *Improved custom profile<br>
             *Removed footer on custom profile and profile
            </td>
            <td>De footer zorgde voor een overlapping en is dus tijdelijk weggehaald</td>
            <td> 120 min</td>
           </tr> 
                    <tr>
         <td>21 - Jan 2018</td> 
         <td>*Improved profile page<br>
             *Improved edit profile page<br>
             *Updated custom profile page<br>
             *Fixed bug showing different surnames<br>
             *Re-added footer to profile<br>
             *Re-added footer to custom profile
            </td>
            <td>De footer zorgde voor een overlapping en is dus tijdelijk weggehaald</td>
            <td> 120 min</td>
           </tr> 
           <strong><h2>Totale uren: 136 uur</h2></strong>
           
        </table>
</div>
    </div>
   
    <div class="filler two">
    </div>
    <div class="footer">
        <h1> Made by Youri Bontekoe</h1>
    </div>
</body>
</html>
