<?php
include "Functions.php";

$point = $conn -> query("SELECT cmmnt_point FROM COMMENTS WHERE user_id=".$_SESSION['id']."");
$points = $point  -> fetch_assoc();


function points(){ 
if($points <= 50){
      $rank =  "new";
      $point = $points;
      $maxrank = 49;
      $minrank = 0;
    return $rank, $point, $maxrank, $minrank;
}
    if($points > 50 && $points <= 115){
      $rank = "Starter";
      $point = $points;
      $maxrank = 115;
      $minrank = 50;
    return $rank, $point, $maxrank, $minrank;
    }
    
    if($points > 115 && $points <= 180){
      $rank = "Starterhelp";
      $point = $points;
      $maxrank = 180;
      $minrank = 115;
    return $rank, $point, $maxrank, $minrank;
    }
    
    if($points > 180 && $points <= 250){
      $rank = "Helper";
      $point = $points;
      $maxrank = 250;
      $minrank = 180;
    return $rank, $point, $maxrank, $minrank;
    }
    
    if($points > 250 && $points <= 325){
      $rank = "Helper+";
      $point = $points;
      $maxrank = 325;
      $minrank = 250;
    return $rank, $point, $maxrank, $minrank;
    }
    
    if($points > 325 && $points <= 405){
      $rank = "Helper++";
      $point = $points;
      $maxrank = 405;
      $minrank = 325;
    return $rank, $point, $maxrank, $minrank;
    }
    
    if($points > 405 && $points <= 490){
      $rank = "Trustworthy";
      $point = $points;
      $maxrank = 490;
      $minrank = 405;
    return $rank, $point, $maxrank, $minrank;
    }
    
    if($points > 490 && $points <= 580){
      $rank = "Master";
      $point = $points;
      $maxrank = 580;
      $minrank = 490;
    return $rank, $point, $maxrank, $minrank;
    }
    
    if($points > 580 && $points <= 675){
      $rank = "Helpmaster";
      $point = $points;
      $maxrank = 580;
      $minrank = 490;
    return $rank, $point, $maxrank, $minrank;
    }
    if($points > 675){
      $rank = "Helpmaster+";
      $point = $points;
      $maxrank = 99999999;
      $minrank = 675;
    return $rank, $point, $maxrank, $minrank;
    }
}