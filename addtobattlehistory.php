<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minions'_battle_royale";

class status {
    public $winner;
    public $winner_health;
    public $loser;
    public $loser_health;
    public $no_of_rounds;
    public $no_usage_banana_strike;
    public $no_usage_umbrella_shield;

    function set_winner() {
        $this->winner = $_GET['winner'];
    }
    function set_winner_health() {
        $this->winner_health = $_GET['winner_hb'];
    }
    function set_loser() {
        $this->loser = $_GET['loser'];
    }
    function set_loser_health() {
        $this->loser_health = $_GET['loser_hb'];
    }
    function set_round() {
        $this->no_of_rounds = $_GET['round'];
    }
    function set_no_usage_banana_strike() {
        $this->no_usage_banana_strike = $_GET['no_usage_banana_strike'];
    }
    function set_no_usage_umbrella_shield() {
        $this->no_usage_umbrella_shield = $_GET['no_usage_umbrella_shield'];
    }
}


    $STATS = new status();
    $STATS->set_winner();
    $STATS->set_winner_health();
    $STATS->set_loser();
    $STATS->set_loser_health();
    $STATS->set_round();
    $STATS->set_no_usage_banana_strike();
    $STATS->set_no_usage_umbrella_shield();
    
   /* $STATS->winner = $_GET['winner'];
    $STATS->winner_health = $_GET['winner_hb'];
    $STATS->loser = $_GET['loser'];
    $STATS->loser_health = $_GET['loser_hb'];
    $STATS->no_of_rounds = $_GET['round'];
    $STATS->no_usage_banana_strike = $_GET['no_usage_banana_strike'];
    $STATS->no_usage_umbrella_shield = $_GET['no_usage_umbrella_shield'];*/

/*
$winner = $_GET['winner'];
$winner_health = $_GET['winner_hb'];
$loser = $_GET['loser'];
$loser_health = $_GET['loser_hb'];
$no_of_rounds = $_GET['round'];
$no_usage_banana_strike = $_GET['no_usage_banana_strike'];
$no_usage_umbrella_shield = $_GET['no_usage_umbrella_shield'];*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO all_battles_data_history (winner, winner_health, loser, loser_health, no_of_rounds, no_usage_banana_strike, no_usage_umbrella_shield)
VALUES ('$STATS->winner', '$STATS->winner_health' , '$STATS->loser' , '$STATS->loser_health' , '$STATS->no_of_rounds' , '$STATS->no_usage_banana_strike' , '$STATS->no_usage_umbrella_shield' )";


/*
$sql = "INSERT INTO all_battles_data_history (winner, winner_health, loser, loser_health, no_of_rounds, no_usage_banana_strike, no_usage_umbrella_shield)
VALUES ('$winner', '$winner_health' , '$loser' , '$loser_health' , '$no_of_rounds' , '$no_usage_banana_strike' , '$no_usage_umbrella_shield' )";
*/
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>
