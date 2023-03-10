<?php
//get Tim stats from js
/*
$health_tim = $_GET["health_tim"];
$strength_tim = $_GET["strength_tim"];
$defense_tim = $_GET["defense_tim"];
$speed_tim = $_GET["speed_tim"];
$luck_tim = $_GET["luck_tim"];

//get Evil stats from js

$health_evil = $_GET["health_evil"];
$strength_evil = $_GET["strength_evil"];
$defense_evil = $_GET["defense_evil"];
$speed_evil = $_GET["speed_evil"];
$luck_evil = $_GET["luck_evil"];*/

/*
$health_tim = rand(70,100);
$strength_tim = rand(70,80);
$defense_tim = rand(45,55);
$speed_tim = rand(40,50);
$luck_tim = rand(10,30);

$health_evil = rand(70,100);
$strength_evil = rand(70,80);
$defense_evil = rand(45,55);
$speed_evil = rand(40,50);
$luck_evil = rand(25,40);
$damage_evil = 0;
$damage_tim = 0;*/


//get Tim stat bars
/*
$health_tim_hp = $_GET["health_tim_hp"];
$strength_tim_hp = $_GET["strength_tim_hp"];
$defense_tim_hp = $_GET["defense_tim_hp"];
$speed_tim_hp = $_GET["speed_tim_hp"];
$luck_tim_hp = $_GET["luck_tim_hp"];

//get Evil stat bars
$health_evil_hp = $_GET["health_evil_hp"];
$strength_evil_hp = $_GET["strength_evil_hp"];
$defense_evil_hp = $_GET["defense_evil_hp"];
$speed_evil_hp = $_GET["speed_evil_hp"];
$luck_evil_hp = $_GET["luck_evil_hp"];*/
/*
$attacker = $_GET["attacker"];
$round = $_GET["round"];*/
/*
$healthHPTim = $_GET["healthHPTim"];
$healthHPEvil = $_GET["healthHPEvil"];
$round = $_GET["round"];*/

/*
function Tim_attacks() {
    global $luck_evil, $damage_evil, $strength_tim, $defense_evil, $health_evil, $healthHPEvil;
    $missfactor = rand(0,100);
    if ($missfactor >= 0 && $missfactor <= $luck_evil) {
        // you missed
    } else {

        $banana_strike = rand(0,100);
        if ($banana_strike <= 10) {
            // banana strike is used
            $damage_evil = ($strength_tim - $defense_evil) * 2;
            $health_evil -= $damage_evil;
            $healthHPEvil = ($health_evil/100)*225;
        } else {
            $damage_evil = $strength_tim - $defense_evil;
            $health_evil -= $damage_evil;
            $healthHPEvil = ($health_evil/100)*225;
        }


    }
    
}

function Evil_attacks() {
    global $luck_tim, $damage_tim, $health_tim, $healthHPTim, $strength_evil, $defense_tim;
    $missing = rand(0,100);
    if($missing >= 0 && $missing <= $luck_tim) {
        //missed
    } else {
        $damage_tim = $strength_evil - $defense_tim;
        $health_tim -= $damage_tim;
            $healthHPEvil = ($health_tim/100)*225;
    }


}

function attack_action() {
    global $attacker;
    if ($attacker == 0) {
        Tim_attacks();
    }
    if ($attacker == 0) {
        Evil_attacks();
    }
}

if ($round <= 20) {

    attack_action();
    $round++;
}*/

$health_tim = $_GET["health_tim"];

//  HEALTH (for tim)
$strength_tim = $_GET["strength_tim"];


// DEFENSE
$defense_tim = $_GET["defense_tim"];


// SPEED
$speed_tim = $_GET["speed_tim"];


// LUCK
$luck_tim = $_GET["luck_tim"];


echo "$health_tim";
echo " $strength_tim";
echo " $defense_tim";
echo " $speed_tim";
echo " $luck_tim";

?>