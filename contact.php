<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/grid.css" rel="stylesheet" type="text/css" />
    <title>Project</title>
</head>
<body>
<header class="sticky">
      <h1 class="hidden">Portfolio</h1>
      <h2 class="hidden">Shon Sojan</h2>
      <div class="logo">
        <img id="logo" src="images/logo.svg" alt="logo" />
      </div>
      <nav>
        <ul class="nav-list">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav>

      <button id="hamburger">&#9776;</button>
      <div id="menu" class="overlay">
        <button id="close">&times;</button>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="index.php#contact">Contact</a></li>
          </ul>
        </nav>
>
    </header>

    <main>

        <section id="contact" class="grid-con">

            <div class=" col-span-full m-col-start-3 m-col-end-11">
            <h2 class="line-separator">CONTACT</h2>

            
            </div>

            <div id="form" class="contact-container col-span-full m-col-start-3 m-col-end-11">

    

                <form method="post" action="includes/send_mail.php">

                <label for="first_name"></label>
                <input type="text" name="first_name" required placeholder="First Name" id="first_name">

         

                <label for="last_name"></label>
                <input type="text" name="last_name" required placeholder="Last Name" id="last_name">

               

                <label for="email"></label>
                <input type="text" name="email" required placeholder="E-mail" id="email">

            

                <label for="comments"></label>
                <textarea name="comments" placeholder="Enter your message, comments or concerns here..."  id="comments"></textarea>
           

                <input type="submit" value="send">
            </form>

            </div>

        </section>




    </main>

    <footer id="footer">

        <section class="grid-con">

        <div id="quicklinks" class="col-start-1 col-end-3 m-col-start-2 m-col-end-7">
            <h3>QUICKLINKS</h3>
            <a href="home.php">HOME</a>
            <a href="projects.php">PROJECTS</a>
            <a href="aboutme.php">ABOUT ME</a>
            <a href="contact.php">CONTACT</a>
        </div>

        <div id="contact-info" class="col-start-3 col-end-5 m-col-start-7 m-col-end-12">
            <h3>CONTACT INFO</h3>
            <p>Email - sainiparam947@gmail.com</p>
            <p>Phone - 1234567890</p>
        </div>

        <div class="col-start-1 col-end-5 m-col-start-2 m-col-end-12 line-separator"></div>
        </div>

    </section>

    <section class="grid-con">
        <h2 class="hidden">lower footer</h2>

        <div id="lower-footer" class="col-start-1 col-end-5 m-col-start-2 m-col-end-12">
        <div id="icons" >
        
                <a href="www.google.com"><li class="fa fa-facebook"></li></a>
                <a href=""><li class="fa fa-linkedin"></li></a>
                <a href=""><li class="fa fa-github"></li></a>
                <a href=""><li class="fa fa-instagram"></li></a>
        
        </div>

        <div id="rights">
            <p>© 2023 akamjot singh. All right reserved.</p>
        </div>

    </div>
    </section>

    </footer>
    <script src="js/main.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    
</body>
</html>