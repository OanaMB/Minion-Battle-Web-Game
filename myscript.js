// define global variables
var stats = document.getElementsByClassName('stats');
var bottomRow = document.getElementById('bottomRow');
var middlerow = document.getElementById('middlerow');
var textRow = document.getElementById('textRow');
var buttonfight = document.getElementById('buttonfight');
var reloadbutton = document.getElementById('reloadbutton');

/* Tim's status bars */
var health_evil_hp = document.getElementById('health_evil_hp');
var strength_evil_hp = document.getElementById('strength_evil_hp');
var defense_evil_hp = document.getElementById('defence_evil_hp');
var speed_evil_hp = document.getElementById('speed_evil_hp');
var luck_evil_hp = document.getElementById('luck_evil_hp');

/* Evil Guy's status bars */
var health_tim_hp = document.getElementById('health_tim_hp');
var strength_tim_hp = document.getElementById('strength_tim_hp');
var defense_tim_hp = document.getElementById('defence_tim_hp');
var speed_tim_hp = document.getElementById('speed_tim_hp');
var luck_tim_hp = document.getElementById('luck_tim_hp');

/* Tim's status computing */

document.getElementById("health_tim").innerHTML = Math.floor(Math.random()*(100-70+1))+70;
document.getElementById("strength_tim").innerHTML = Math.floor(Math.random()*(80-70+1))+70;
document.getElementById("defence_tim").innerHTML = Math.floor(Math.random()*(55-45+1))+45;
document.getElementById("speed_tim").innerHTML = Math.floor(Math.random()*(50-40+1))+40;
document.getElementById("luck_tim").innerHTML = Math.floor(Math.random()*(30-10+1))+10;

/* Evil's status computing */

document.getElementById("health_evil").innerHTML = Math.floor(Math.random()*(90-60+1))+60;
document.getElementById("strength_evil").innerHTML = Math.floor(Math.random()*(90-60+1))+60;
document.getElementById("defence_evil").innerHTML = Math.floor(Math.random()*(60-40+1))+40;
document.getElementById("speed_evil").innerHTML = Math.floor(Math.random()*(60-40+1))+40;
document.getElementById("luck_evil").innerHTML = Math.floor(Math.random()*(40-25+1))+25;

/* Initiate status bars for Evil */

var healthHPBarwidthEvil = (document.getElementById("health_evil").innerHTML/100) * 225;
health_evil_hp.style.width = healthHPBarwidthEvil + "px";

var strengthHPBarwidthEvil = (document.getElementById("strength_evil").innerHTML/100) * 225;
strength_evil_hp.style.width = strengthHPBarwidthEvil + "px";

var defenseHPBarwidthEvil = (document.getElementById("defence_evil").innerHTML/100) * 225;
defense_evil_hp.style.width = defenseHPBarwidthEvil + "px";

var speedHPBarwidthEvil = (document.getElementById("speed_evil").innerHTML/100) * 225;
speed_evil_hp.style.width = speedHPBarwidthEvil + "px";

var luckHPBarwidthEvil = (document.getElementById("luck_evil").innerHTML/100) * 225;
luck_evil_hp.style.width = luckHPBarwidthEvil + "px";

/* Initiate status bars for Tim */

var healthHPBarwidthtim = (document.getElementById("health_tim").innerHTML/100) * 225;
health_tim_hp.style.width = healthHPBarwidthtim + "px";

var strengthHPBarwidthtim = (document.getElementById("strength_tim").innerHTML/100) * 225;
strength_tim_hp.style.width = strengthHPBarwidthtim + "px";

var defenseHPBarwidthtim = (document.getElementById("defence_tim").innerHTML/100) * 225;
defense_tim_hp.style.width = defenseHPBarwidthtim + "px";

var speedHPBarwidthtim = (document.getElementById("speed_evil").innerHTML/100) * 225;
speed_tim_hp.style.width = speedHPBarwidthtim + "px";

var luckHPBarwidthtim = (document.getElementById("luck_evil").innerHTML/100) * 225;
luck_tim_hp.style.width = luckHPBarwidthtim + "px";

/* Initiate variables where data about the game is kept */

var round = 1;
var times_banana_strike_used = 0;
var times_umbrella_shield = 0;
var is_banana_used = 0; //0-no,1-yes
var winner = 0;
var loser = 0;
var winner_health = 0;
var loser_health = 0;
var battleid = 0;



var attacker = 2; //0-Tim; 1-Evil
if (document.getElementById("speed_tim").innerHTML > document.getElementById("speed_evil").innerHTML) {
    attacker = 0;
} else if (document.getElementById("speed_tim").innerHTML < document.getElementById("speed_evil").innerHTML) {
    attacker = 1;
} else if (document.getElementById("speed_tim").innerHTML == document.getElementById("speed_evil").innerHTML) {
    if (document.getElementById("luck_tim").innerHTML < document.getElementById("luck_evil").innerHTML) {
        attacker = 1;
    } else if (document.getElementById("luck_tim").innerHTML > document.getElementById("luck_evil").innerHTML) {
        attacker = 0;
    } 
}


// function for reloading the page

function reloadPage() {
    window.location.reload();  
}

// animations trigger

let y = document.getElementById('buttonfight');
let z = document.getElementById('buttonfight');
let Timtoggle = document.getElementById('Timimage');
let Eviltoggle = document.getElementById('Evilimage');

function beginbattle() {
 for (var x = 0; x < stats.length; x++) {
  stats[x].style.visibility = "visible";
 }
    if (attacker == 0) {
        textRow.innerHTML = "<br>Tim is the first to attack!<br>"
    }   else {
        textRow.innerHTML = "<br>Evil Guy is the first to attack!<br>"
    }

    y.addEventListener('click', shaketimimage);
    z.addEventListener('click', shakeevilimage);
    Eviltoggle.addEventListener('animationend',shakeevilimage);
    Timtoggle.addEventListener('animationend',shaketimimage);
}
 
function shaketimimage() {
    document.getElementById('Timimage').classList.toggle('shake');
}

function shakeevilimage() {
    document.getElementById('Evilimage').classList.toggle('shakeevil');
}

// function which decides who is the one who attacks

function attack_action(health_tim, strength_tim, defense_tim, speed_tim, luck_tim, health_evil, strength_evil, defense_evil, speed_evil, luck_evil, healthHPTim, healthHPEvil, attacker) {
    
    if (attacker == 0) {
        Tim_attacks( luck_evil, strength_tim, health_evil, defense_evil, healthHPEvil);
        
    }
    if (attacker == 1) {
        Evil_attacks(luck_tim, health_tim, healthHPTim, strength_evil, defense_tim);

    }
}

// Evil attacks
function Evil_attacks(luck_tim, health_tim, healthHPTim, strength_evil, defense_tim) {
    
    var missing = Math.floor(Math.random()*(100-0+1))+0;
    var damage_tim= 0;
    if(missing >= 0 && missing <= luck_tim) {
        //Evil missed
        textRow.innerHTML = "<br>Round " + round +": Evil Guy missed his shot!<br>"

    } else {
        var umbrella_shield_usage =  Math.floor(Math.random()*(100-0+1))+0;
        if (umbrella_shield_usage >= 0 && umbrella_shield_usage<=20) {

        // Tim is lucky and uses umbrella shield, meaning that only half of the damage is made
        times_umbrella_shield++;
        damage_tim = Math.floor((strength_evil - defense_tim) / 2);
        health_tim -= damage_tim;
        if(health_tim <= 0) {
            health_tim = 0;
        }
        textRow.innerHTML = "<br>Round " + round +": Evil Guy attacked! Tim used Umbrella Shield! Evil Guy hit Tim with a basic attack, doing " + damage_tim + " damage. Tim now has " + health_tim + " HP left. <br>"
        document.getElementById("health_tim").innerHTML = health_tim;
        healthHPTim = (health_tim/100)*225;
        health_tim_hp.style.width = healthHPTim + "px";

        if (health_tim == 0) {
            middlerow.innerHTML = "<br> Evil Guy has defeated you!:(<br><button onClick='reloadPage();'>PLAY AGAIN?</button>";
            buttonfight.style.visibility = "hidden";
            winner = "Evil Guy";
            loser = "Tim";
            winner_health =  document.getElementById("health_evil").innerHTML;
            loser_health = health_tim;
            add_to_database( winner, loser, winner_health, loser_health, round, times_banana_strike_used, times_umbrella_shield);

        }
        } else {
            // Evil attacks normally
            damage_tim = strength_evil - defense_tim;
            health_tim -= damage_tim;
            if(health_tim <= 0) {
            health_tim = 0;
            }
            textRow.innerHTML = "<br>Round " + round +": Evil Guy hit Tim with a basic attack, doing " + damage_tim + " damage. Tim now has " + health_tim + " HP left. <br>"
            document.getElementById("health_tim").innerHTML = health_tim;
            healthHPTim = (health_tim/100)*225;
            health_tim_hp.style.width = healthHPTim + "px";
    
            if (health_tim == 0) {
                middlerow.innerHTML = "<br> Evil Guy has defeated you!:(<br><button onClick='reloadPage();'>PLAY AGAIN?</button>";
                buttonfight.style.visibility = "hidden";
                winner = "Evil Guy";
                loser = "Tim";
                winner_health = document.getElementById("health_evil").innerHTML;
                loser_health = health_tim;
                add_to_database( winner, loser, winner_health, loser_health, round, times_banana_strike_used, times_umbrella_shield);

            }
    }


}}

// Tim attacks
function Tim_attacks( luck_evil, strength_tim, health_evil, defense_evil, healthHPEvil) {
    
    var missfactor = Math.floor(Math.random()*(100-0+1))+0;
    var damage_evil = 0;

    if ((missfactor >= 0) && (missfactor <= luck_evil)) {
        // you missed
        textRow.innerHTML = "<br>Round " + round +": Tim missed his shot!<br>"
        
    } else {
        var banana_strike = Math.floor(Math.random()*(100-0+1))+0;
        if (banana_strike <= 10) {
            // banana strike is used, meaning it;s his turn again       

            is_banana_used = 1;
            times_banana_strike_used++;

            damage_evil = strength_tim - defense_evil;
            health_evil -= damage_evil;
            if(health_evil <= 0) {
                health_evil = 0;
            }
            textRow.innerHTML = "<br>Round " + round +": Tim used banana strike! Tim hit Evil Guy with a basic attack, doing " + damage_evil + " damage. Evil Guy now has " + health_evil + " HP left. It's Tim's turn again! <br>"
            document.getElementById("health_evil").innerHTML = health_evil;
            healthHPEvil = (health_evil/100)*225;
            health_evil_hp.style.width = healthHPEvil + "px";
            if (health_evil == 0) {
                middlerow.innerHTML = "<br> You have defeated the Evil Guy! Congratulations!<br><button onClick='reloadPage();'>PLAY AGAIN?</button>"
                buttonfight.style.visibility = "hidden";
                winner = "Tim";
                loser = "Evil Guy";
                winner_health = document.getElementById("health_tim").innerHTML;
                loser_health = health_evil;
                add_to_database( winner, loser, winner_health, loser_health, round, times_banana_strike_used, times_umbrella_shield);
            }
            attacker = 1;
            shaking = 0;
           
        } else {
            // normal attack
            damage_evil = strength_tim - defense_evil;
            health_evil -= damage_evil;
            if(health_evil <= 0) {
                health_evil = 0;
            }
            console.log(health_evil);
            textRow.innerHTML = "<br>Round " + round +": Tim hit Evil Guy with a basic attack, doing " + damage_evil + " damage. Evil Guy now has " + health_evil + " HP left.<br>"
            document.getElementById("health_evil").innerHTML = health_evil;
            healthHPEvil = (health_evil/100)*225;
            health_evil_hp.style.width = healthHPEvil + "px";
           
            if (health_evil == 0) {
                middlerow.innerHTML = "<br> You have defeated the Evil Guy! Congratulations!<br><button onClick='reloadPage();'>PLAY AGAIN?</button>"
                buttonfight.style.visibility = "hidden";
                winner = "Tim";
                loser = "Evil Guy";
                winner_health = document.getElementById("health_tim").innerHTML;
                loser_health = health_evil;
                add_to_database( winner, loser, winner_health, loser_health, round, times_banana_strike_used, times_umbrella_shield);
            }
        
        }


    }
    
}

// main function attack, where number of rounds are counted

function attack() {
    
var health_tim = document.getElementById("health_tim").innerHTML;
var strength_tim = document.getElementById("strength_tim").innerHTML;
var defense_tim = document.getElementById("defence_tim").innerHTML;
var speed_tim = document.getElementById("speed_tim").innerHTML;
var luck_tim = document.getElementById("luck_tim").innerHTML;

var health_evil = document.getElementById("health_evil").innerHTML;
var strength_evil = document.getElementById("strength_evil").innerHTML;
var defense_evil = document.getElementById("defence_evil").innerHTML;
var speed_evil = document.getElementById("speed_evil").innerHTML;
var luck_evil = document.getElementById("luck_evil").innerHTML;

var healthHPTim = healthHPBarwidthtim;
var healthHPEvil = healthHPBarwidthEvil;


if (round <= 20) {
    attack_action(health_tim, strength_tim, defense_tim, speed_tim, luck_tim, health_evil, strength_evil, defense_evil, speed_evil, luck_evil, healthHPTim, healthHPEvil, attacker);  
} else {
    if (health_tim > health_evil) {
    middlerow.innerHTML = "<br> You have defeated the Evil Guy! Congratulations!<br><button onClick='reloadPage();'>PLAY AGAIN?</button>";
    buttonfight.style.visibility = "hidden";
    winner = "Tim";
    loser = "Evil Guy";
    winner_health = document.getElementById("health_tim").innerHTML;
    loser_health = health_evil;
    add_to_database(winner, loser, winner_health, loser_health, round, times_banana_strike_used, times_umbrella_shield);
    } else {
        middlerow.innerHTML = "<br> Evil Guy has defeated you!:(<br><button onClick='reloadPage();'>PLAY AGAIN?</button>";
        buttonfight.style.visibility = "hidden";
        winner = "Evil Guy";
        loser = "Tim";
        winner_health = document.getElementById("health_evil").innerHTML;
        loser_health = health_tim;
        add_to_database( winner, loser, winner_health, loser_health, round, times_banana_strike_used, times_umbrella_shield);
    }
}
    round++;
if(attacker == 0) {
    attacker = 1;
} else {
    attacker = 0;
}

}

// function that adds to database

function add_to_database( winner, loser, winner_health, loser_health, round, times_banana_strike_used, times_umbrella_shield) {

    // ajax used
    const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "addtobattlehistory.php?winner=" + winner + "&winner_hb=" + winner_health + "&loser=" + loser + "&loser_hb=" + loser_health + "&round=" + round + "&no_usage_banana_strike=" + times_banana_strike_used + "&no_usage_umbrella_shield=" + times_umbrella_shield, true);
  xhttp.send();

}