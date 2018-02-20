<?php
include "Connector.php";

$point = $conn -> query("SELECT My_points FROM userinfo WHERE id=".$_SESSION['id']."");
$pointt = $point  -> fetch_assoc();
$pointstot = $pointt['My_points'];

function points(){ 
    global $pointstot;
if($pointstot < 100){
      $rank =  "new";
      $point = $pointstot;
      $maxrank = 99;
      $minrank = 0;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
}
    if($pointstot > 100 && $pointstot <= 200){
      $rank = "Starter";
      $point = $pointstot - 100;
      $maxrank = 200;
      $minrank = 100;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
    }
    
    if($pointstot > 200 && $pointstot <= 400){
        $pointstot;
      $rank = "Starterhelp";
      $point = $pointstot - 200;
      $maxrank = 400;
      $minrank = 200;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
    }
    
    if($pointstot > 400 && $pointstot <= 800){
      $rank = "Helper";
      $point = $pointstot - 400;
      $maxrank = 800;
      $minrank = 400;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
    }
    
    if($pointstot > 800 && $pointstot <= 1600){
      $rank = "Helper+";
      $point = $pointstot - 800;
      $maxrank = 1600;
      $minrank = 800;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
    }
    
    if($pointstot > 1600 && $pointstot <= 3200){
      $rank = "Helper++";
      $point = $pointstot - 1600;
      $maxrank = 3200;
      $minrank = 1600;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
    }
    
    if($pointstot > 3200 && $pointstot <= 6400){
      $rank = "Trustworthy";
      $point = $pointstot - 3200;
      $maxrank = 6400;
      $minrank = 3200;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
    }
    
    if($pointstot > 6400 && $pointstot <= 12800){
      $rank = "Master";
      $point = $pointstot - 6400;
      $maxrank = 12800;
      $minrank = 6400;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
    }
    
    if($pointstot > 12800 && $pointstot <= 45000){
      $rank = "Helpmaster";
      $point = $pointstot - 580;
      $maxrank = 580;
      $minrank = 490;
    return array($rank, $point, $maxrank, $minrank, $pointstot);
    }
    
    if($pointstot < 45000){
      $rank = "Helpmaster+";
      $point = $pointstot;
      $maxrank = 99999999;
      $minrank = 45000;
    return array($rank, $point, $maxrank, $minrank);
    }
}