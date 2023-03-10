<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MINIONS' BATTLE ROYALE</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
          crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Coiny&display=swap');
    </style>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="stiluri.css" />
   
  </head>
  
  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
    <!--NAVBAR IMPLEMENTATION-->
   
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-danger rounded-bottom py-3 w-50 ms-auto mb-2 mb-lg-0">
        <div class="container">
        <a href="#" class="navbar-brand mb-0 h1 fw-bold" style="color:yellow">    
            <img class="d-inline-block align-top" src="minion.jpg" width="55" height="30">
            MBR
        </a>
        <button type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        class="navbar-toggler"
        aria-controls="navbarNav"
        aria-controls="false"
        aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span>    
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item active">
                    <a href="#section1" class="nav-link active">About</a>
                </li>
                <li class="nav-item dropdown active">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Characters
                    </a>      
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="#section4" class="dropdown-item">Tim</a></li>
                        <li><a href="#section4" class="dropdown-item">Evil Guy</a></li>
                    </ul>        
                </li>
                <li class="nav-item active">
                  <a href="#section2" class="nav-link active">Powers</a>
                </li>
                <li class="nav-item active">
                    <a href="#section7" class="nav-link active">History</a>
                </li>
            </ul>
        </div>

        
        <form class="d-flex">
            <input type="text" class="form-control me-2" >
            <button type="submit" class="btn btn-outline-light">Search</button>  
        </form>
    </div>
    </nav>

    <!--CAROUSEL IMPLEMENTATION (HOME)-->

    <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" 
                  style="filter: invert(50%);"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2" style="filter: invert(50%);"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3" style="filter: invert(50%);"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3" aria-label="Slide 4" style="filter: invert(50%);"></button>
        </div>
        
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="minion_battle.jpg" alt="Minions' Battle Royal" class="d-block w-100 min-vw-100">
            <div class="carousel-caption">
              <h1 class="animate__animated animate__bounceInRight" 
              style="color:red;padding-bottom: 400px;padding-right:20px;">MINIONS' BATTLE ROYALE</h1>
            </div>
            <div class="carousel-caption d-none d-md-block" style="padding-bottom:370px">
              <form class="d-flex animate__animated animate__bounceInUp">
                <button type="button" class="btn btn-danger btn-rounded btn-lg mx-auto" onclick="beginbattle();">
                  <a href="#section6" class="nav-link active">Play<i class="bi bi-play"></i></a></button> 
            </form> 
            </div>       
          </div>
          <div class="carousel-item">
            <img src="minion_characters.jpg" alt="minion_characters" class="d-block w-100 min-vw-100">
            <div class="carousel-caption">
              <h1 class="animate__animated animate__bounceInRight" 
              style="color:black;padding-bottom: 400px;padding-right:20px;">MINIONS' BATTLE ROYALE</h1>
            </div>
            <div class="carousel-caption d-none d-md-block" style="padding-bottom:370px">
              <form class="d-flex animate__animated animate__bounceInUp">
                <button type="button" class="btn btn-danger btn-rounded btn-lg mx-auto" onclick="beginbattle();">
                  <a href="#section6" class="nav-link active">Play<i class="bi bi-play"></i></a></button>  
            </form>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="minions-abbey-road.jpg" alt="minions_goodguys" class="d-block w-100 min-vw-100">
            <div class="carousel-caption">
              <h1 class="animate__animated animate__bounceInRight" 
              style="padding-bottom: 400px;padding-right:20px;">MINIONS' BATTLE ROYALE</h1>
            </div>
            <div class="carousel-caption d-none d-md-block" style="padding-bottom:370px">
              <form class="d-flex animate__animated animate__bounceInUp">
                <button type="button" class="btn btn-danger btn-rounded btn-lg mx-auto" onclick="beginbattle();">
                  <a href="#section6" class="nav-link active">Play<i class="bi bi-play"></i></a></button>  
            </form>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="purple_guys.jpg" alt="Bad guys" class="d-block w-100 min-vw-100">
            <div class="carousel-caption">
              <h1 class="animate__animated animate__bounceInRight" 
              style="padding-bottom: 400px;padding-right:20px;">MINIONS' BATTLE ROYALE</h1>
            </div>
            <div class="carousel-caption d-none d-md-block" style="padding-bottom:370px">
              <form class="d-flex animate__animated animate__bounceInUp">
                <button type="button" class="btn btn-danger btn-rounded btn-lg mx-auto" onclick="beginbattle();">
                  <a href="#section6" class="nav-link active">Play<i class="bi bi-play"></i></a></button>  
            </form>
            </div>   
          </div>
        </div>
        
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" style="filter: invert(50%);">
          <span class="carousel-control-prev-icon " aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" style="filter: invert(50%);">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    

    <!--GAME LAYOUT IMPLEMENTATION-->

    <div id="section6" class="container-fluid bg-danger text-white" style="height:1175px;">
      
       <div id="contain">
          <div id="firstRow">
          <div id="topRow">
            
            <!--TIM STATS TABLE-->
            <table class="stats">
             <tbody>
              <tr>
                <th class="healthLabel">HEALTH</th>
              </tr>
              <tr>  
                <td>
                  <div id="TimStats" class="stats"> 
                    <div class="hpBorder">
                      <div id="health_tim_hp" class="hpBar"></div>
                    </div>
                  </div>
                </td> 
                  <td id="health_tim">70</td>       
              </tr>
              <tr>
                <th class="healthLabel">STRENGTH</th>
              </tr>
              <tr>  
                <th>
                  <div id="TimStats" class="stats"> 
                    <div class="hpBorder">
                      <div id="strength_tim_hp" class="hpBar"></div>
                    </div>
                  </div>
                </th> 
                  <th id="strength_tim">70</th>       
              </tr>
              <tr>
                <th class="healthLabel">DEFENSE</th>
              </tr>
              <tr>  
                <th>
                  <div id="TimStats" class="stats"> 
                    <div class="hpBorder">
                      <div id="defence_tim_hp" class="hpBar"></div>
                    </div>
                  </div>
                </th> 
                  <th id="defence_tim">70</th>       
              </tr>
              <tr>
                <th class="healthLabel">SPEED</th>
              </tr>
              <tr>  
                <th>
                  <div id="TimStats" class="stats"> 
                    <div class="hpBorder">
                      <div id="speed_tim_hp" class="hpBar"></div>
                    </div>
                  </div>
                </th> 
                  <th id="speed_tim">70</th>       
              </tr>
              <tr>
                <th class="healthLabel">LUCK</th>
              </tr>
              <tr>  
                <th>
                  <div id="TimStats" class="stats"> 
                    <div class="hpBorder">
                      <div id="luck_tim_hp" class="hpBar"></div>
                    </div>
                  </div>
                </th> 
                  <th id="luck_tim">70</th>       
              </tr>
              </tbody>
            </table>

            <!--PICTURES-->
            <div id="Tim">
              <img id="Timimage" src="fighting_stuart.jpg" style="width:125%;height:50%;border:2px solid black;">
            </div>

            <div id="Evil">
              <img id="Evilimage" src="evil_guy_fighting.jpg" style="width:100%;height:50%;border:2px solid black;">
            </div>

            <!--EVIL GUY STATS TABLE-->
            <table class="stats">
              <tbody>
               <tr>
                 <th class="healthLabel">HEALTH</th>
               </tr>
               <tr>  
                 <th>
                   <div id="EvilStats" class="stats"> 
                     <div class="hpBorder">
                       <div id="health_evil_hp" class="hpBar"></div>
                     </div>
                   </div>
                 </th> 
                   <th id="health_evil">70</th>       
               </tr>
               <tr>
                 <th class="healthLabel">STRENGTH</th>
               </tr>
               <tr>  
                 <th>
                   <div id="EvilStats" class="stats"> 
                     <div class="hpBorder">
                       <div id="strength_evil_hp" class="hpBar"></div>
                     </div>
                   </div>
                 </th> 
                   <th id="strength_evil">70</th>       
               </tr>
               <tr>
                 <th class="healthLabel">DEFENSE</th>
               </tr>
               <tr>  
                 <th>
                   <div id="EvilStats" class="stats"> 
                     <div class="hpBorder">
                       <div id="defence_evil_hp" class="hpBar"></div>
                     </div>
                   </div>
                 </th> 
                   <th id="defence_evil">70</th>       
               </tr>
               <tr>
                 <th class="healthLabel">SPEED</th>
               </tr>
               <tr>  
                 <th>
                   <div id="EvilStats" class="stats"> 
                     <div class="hpBorder">
                       <div id="speed_evil_hp" class="hpBar"></div>
                     </div>
                   </div>
                 </th> 
                   <th id="speed_evil">70</th>       
               </tr>
               <tr>
                 <th class="healthLabel">LUCK</th>
               </tr>
               <tr>  
                 <th>
                   <div id="EvilStats" class="stats"> 
                     <div class="hpBorder">
                       <div id="luck_evil_hp" class="hpBar"></div>
                     </div>
                   </div>
                 </th> 
                   <th id="luck_evil">70</th>       
               </tr>
               </tbody>
             </table>
 
            
          </div>


          <!--BATTLE BUTTON-->
          <div id="middlerow">
            <button id="buttonfight" type="button" class="btn btn-danger stats btn-rounded btn-lg mx-auto" onclick="attack();">
              <a href="#section6" class="nav-link active" >BATTLE<i class="bi bi-play"></i></a></button> 
                
          </div>

          <!--INFO TEXT-->
          <div id="textRow">
             </div>
          </div>

          <div id="bottomRow" style="text-align: center;">
           <h1>Welcome to the Battle Arena!</h1>
           <p>You are Tim facing off against Evil Guy</p>
           <button id="fight_button" class="btn btn-dark btn-rounded btn-lg mx-auto" onclick="beginbattle();">
            <a href="#section6" class="nav-link active">
            Play<i class="bi bi-play"></i></a></button>  
           </div>

        </div>
    
    
    </div>

    <!--ABOUT SECTION-->
    <div id="section1" class="container-fluid bg-light text-white" style="padding-bottom:5px;">
      <h1 style="color:black;text-align:center;padding-top: 50px;">About</h1>
      <h4 style="padding-top: 50px;color:crimson"> WELCOME TO MINIONS' BATTLE ROYAL</h4>
      <p>Once upon a time there was a great minion, called Tim, with some strengths and weaknesses, as all minions have.</p>
      <p>As Tim walks the digital space of Gameloft, he encounters an evil with unprecedented powers.</p>
      <p>The minigame's rules are simple: your quest is to fight along Tim, the good minion,</p> 
      <p>in his mission to stop the purple evil minion to conquer the Gameloft World and spread his evilness.</p>
      <p>Each character takes its turn to attack or defend itself from the opponent.</p>
      <p>The first attack is done by the minion with the higher speed.</p>
      <p>If both minions have the same speed, then the attack is carried on by the minion with the highest luck.</p>
      <p> After an attack, the minions switch roles: the attacker now defends and the defender now attacks.</p>
      <p> The game ends when one of the minions remains without health or the number of turns reaches 20.</p>
    </div>

    <!--INFO ABOUT THE OPPONENETS-->
    <div id="section4" class="container-fluid bg-danger text-white" >
          <h1 style="color:white;text-align:center;padding-top: 50px;">Characters</h1>
         <div class="row">
          <div class="column" style="float:left;
          width:50%;
          padding:5px;">
         <div class="container" style="position: relative;
         width: 50%;">
         <img src="tim_good_guy.jpg" class="rounded mx-auto d-block image" alt="tim" style="height:600px;width:420px;">
          <div class="overlay">
            <div class="text">
              <h3>Initial Stats:</h3>
              <p>Health: 70-100</p>
              <p>Strength: 70-80</p>
              <p>Defense: 45-55</p>
              <p>Speed: 40-50</p>
              <p>Luck: 10%-30% (0%-no luck, 100%-forever lucky)</p>
            </div>
          </div>
          <h1 style="padding-left:0px">TIM</h1>
        </div>
          </div>
          <div class="column" style="float:left;
          width:50%;
          padding:5px;">
          <div class="container" style="position: relative;
           width: 50%;">
          <img src="evil_guy.jpg" class="rounded mx-auto d-block image" alt="evil_guy" style="height:600px;width:420px;">
          <div class="overlay">
            <div class="text">
              <h3>Initial Stats:</h3>
              <p>Health:  60-90</p>
              <p>Strength: 60-90</p>
              <p>Defense: 40-60</p>
              <p>Speed: 40-60</p>
              <p>Luck: 25%-40% (0%-no luck, 100%-forever lucky)</p>
            </div>
          </div>
          <h1 style="padding-left:100px">EVIL GUY</h1>
          </div>
          </div>
         </div>
    </div>

    <!-- INFO ABOUT THE SKILLS THAT ARE USED -->
    <div id="section2" class="container-fluid bg-light text-white" style="padding:100px 20px;">
      <h1 style="color:black;text-align:center">Powers</h1>
        <img src="banana_strike.jpg" alt="" class="mx-auto d-block border border-4" style="height:300px;width:400px;">
        <h4>Banana Strike:</h4>
        <p>Strike twice while it's his turn to attack; 
           there's a 10% chance he'll use this skill every time he attacks</p>
           <img src="umbrella_shield.jpg" alt="" class="mx-auto d-block border border-4" style="height:300px;width:400px;">
        <h4>Umbrella shield:</h4>
        <p>Takes only half of the usual damage when an enemy attacks; there's a 20% change he'll use this skill every time he defends
        </p>
       </div>


    <!--TABLE INCLUDING HISTORY OF PREVIOUS GAMES-->
    <div id="section7" class="container-fluid bg-warning text-white" style="padding-bottom:5px;">
    
    <h1>History of battles</h1>

    <div id="table-scroll">
    <table id="battles">
      <thead>
      <tr>
        <th>Game_id</th>
        <th>Winner</th>
        <th>Winner_health</th>
        <th>Loser</th>
        <th>Loser_health</th>
        <th>Number_of_rounds</th>
        <th>Times_banana_strike_used</th>
        <th>Times_umbrella_shield_used</th>
      </tr></thead>
      <tbody>

      <!--USED PHP FOR FETCHING THE DATA FROM THE MYSQL DATABASE-->
      <?php 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "minions'_battle_royale";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM all_battles_data_history ORDER BY id DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td> ". $row["id"] ." </td><td> ". $row["winner"]. " </td><td> ". $row["winner_health"]. " </td><td> " . $row["loser"] ."</td><td>". $row["loser_health"] . " </td><td> " . $row["no_of_rounds"] . " </td><td> " . $row["no_usage_banana_strike"] . " </td><td> " . $row["no_usage_umbrella_shield"] ."</td></tr>";
        }
      } else {
        echo "0 results";
      }
    
    $conn->close();
      ?>
      </tbody>
    </table>
    </div>
    </div>
    </div>

    <!--FOOTER-->

    <footer class="page-footer font-small bg-danger" style="display:table-row;">
        <div class="container">
            <!-- Grid row-->
            <div class="row">
        
              <!-- Grid column -->
              <div class="col-md-12 py-2">
                <div class="mb-5 flex-center">
        
                  <!-- Facebook -->   
                  <a class="fb-ic">  
                    <i class="bi bi-facebook" style="font-size: 40px;padding-left: 500px;padding-right: 15px"> </i>
                  </a>
                  <!-- Twitter -->
                  <a class="tw-ic">
                    <i class="bi bi-twitter" style="font-size: 40px;padding-right: 15px"> </i>
                  </a>
                  <!-- Google -->
                  <a class="gplus-ic">
                    <i class="bi bi-google" style="font-size: 40px;padding-right: 15px"> </i>
                  </a>
                  <!--Linkedin -->
                  <a class="li-ic">
                    <i class="bi bi-linkedin" style="font-size: 40px;padding-right: 15px"> </i>
                  </a>
                  <!--Instagram-->
                  <a class="ins-ic">
                    <i class="bi bi-instagram" style="font-size: 40px;padding-right: 15px"> </i>
                  </a>
                </div>
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
        
          </div>


        <!-- Copyright -->
        <div class="footer-copyright text-center py-1">
          <div id="section3" class="container-fluid">
          © 2022 Copyright:
          <a href="/"  style="color:yellow"> Oana Maria Bacaran_@3DUPB</a></div>
        </div>
        <!-- Copyright -->
      
      </footer>

      <script src="myscript.js"></script>
      
  </body>
</html>