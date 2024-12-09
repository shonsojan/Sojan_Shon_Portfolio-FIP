<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/grid.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <title>Shon Sojan</title>

    <script defer src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script defer src="js/main.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

<script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

    <?php
//connect to the running database server and the specific database
require_once('includes/connect.php');



//create a query to run in SQL
$query = 'SELECT projects.id AS project, image, image1, image2, image3, image4 FROM projects, media WHERE projects.id = project_id;';


//run the query to get back the content
$results = mysqli_query($connect,$query);

?>


  </head>
  <body>
    
    <header>
      <h1 class="hidden">Portfolio</h1>
      <h2 class="hidden">Shon Sojan</h2>
      <div class="logo">
        <img id="logo" src="images/logo.svg" alt="logo" />
      </div>
      <nav>
        <ul class="nav-list">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <button id="hamburger">&#9776;</button>
      <div id="menu" class="overlay">
        <button id="close">&times;</button>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
</div>
    </header>

    <main>
    <div id="shonprogress"></div>
      <!-- PROFILE -->

      <section class="full-width-grid-con col-span-full black-bg">
        <div class="col-span-full profile">
          <h3 class="col-span-full">Namaste, I'm <span>Shon</span></h3>
          <p class="col-span-full">
            a Creative Front-End Developer with a passion for blending code and
            creativity. I craft interactive, visually engaging web experiences
            that are as functional as they are beautiful. With a focus on
            responsive design and user-friendly interfaces, I bring a unique
            touch to every project by merging the art of design with the power
            of development.
          </p>
        </div>
        <div class="col-span-full" id="tech">
          <p>Technologies I Master:</p>

          <ul id="tool">
            <li><img src="images/tool1.svg" /></li>
            <li><img src="images/tool2.svg" /></li>
            <li><img src="images/tool3.svg" /></li>
            <li><img src="images/tool4.svg" /></li>
            <li><img src="images/tool5.svg" /></li>
            <li><img src="images/tool6.svg" /></li>
          </ul>
        </div>
      </section>

      <!-- VIDEO -->

      <div class="grid-con">
        <section id="player-container" class="col-span-full">
          <video
            class="player"
            controls
            preload="metadata"
            poster="images/video.jpg"
          >
            <source src="video/Demo-reel.mp4" type="video/mp4" />
            <p>Ooops, something went wrong...</p>
          </video>
        </section>
      </div>


      <!-- WORKS -->

      <section class="full-width-grid-con col-span-full yellow-bg">
        <h2 class="col-span-full">SELECETED<br />PROJECTS</h2>
        <div class=".project col-span-full grid-con">

        
        <?php

        while($row = mysqli_fetch_array($results)) {

        

$cell = 0;

for($i = 0; $i < 1; $i++) {
    if($cell == 3) {
        $cell=1;
    }else{
        $cell++;
    }
    

    echo '<a href="details.php?id=' . $row['project'] . '">';

if($cell == 1) {
    echo '<div class="col-start-1 col-span-4">';
}else if($cell == 2){
    echo '<div class="col-start-5 col-span-4">';
}else{
    echo '<div class="col-start-9 col-span-4">';
}


echo '<img src="images/' . $row['image'] . '"></div>';
echo'</a>';
}

        }


?>
        </div>
      </section>

      <!-- CONTACT -->

      <section id="contact" class="full-width-grid-con col-span-full white-bg">
        <h2 class="col-span-full">
          LET'S WORK<br />
          <span>TOGETHER</span>
        </h2>
        <div class="center col-span-full grid-con">
          <form class="col-span-full" method="post" action="sendmail.php">

    <label for="first_name">First Name: </label>
    <input type="text" name="first_name" id="first_name">

<br><br>

    <label for="last_name">Last Name: </label>
    <input type="text" name="last_name" id="last_name">

    <br><br>

    <label for="email">Email: </label>
    <input type="text" name="email" id="email">

    <br><br>

    <label for="message">Message: </label>
    <textarea name="message" id="message">comment here</textarea>

    <br><br>

    <input type="submit" value="send">
</form>
        </div>
      </section>
    </main>
    <!-- Footer -->
    <footer>
      <p>&copy;2024 All rights reserved</p>
      <div id="media">
        <a href="https://www.linkedin.com/in/shon-sojan-87b83928a/"
          ><img src="images/media1.svg" alt="socialmedia-icon"
        /></a>
        <a href="https://github.com/shonsojan"
          ><img src="images/media2.svg" alt="socialmedia-icon" />
        </a>
      </div>
    </footer>

  </body>
</html>
