<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="resources/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="vendors/css/ionicons.min.css" type="text/css">
    <link rel="stylesheet" href="vendors/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="vendors/css/grid.css" type="text/css">
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
    <link rel="stylesheet" href="resources/css/queries.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <title>Mariusz Stanosz | Portfolio</title>
</head>
<body>
   
<!--   header -->
    <header id="home">
        <nav>
            <div class="row">
               <a href="#home"><img class="logo" src="resources/img/white-logo.png" alt="logo"></a>
               <a href="#home"><img class="logo-black" src="resources/img/black-logo.png" alt="logo"></a>
                
                <ul class="main-nav js-main-nav">
                    <li><a href="#about">O mnie</a></li>
                    <li><a href="#skills">Umiejętności</a></li>
                    <li><a href="#projects">Projekty</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li class="separator">|</li>
                    <li><a href="index.php">Eng</a></li>
                    <li><a href="index-pl.php">Pl</a></li>
                    <li class="separator">|</li>
                    <li><a href="https://github.com/PampuchSkrytozerca" target="_blank"><i class="icon ion-social-github"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/mariuszstanosz" target="_blank"><i class="icon ion-social-linkedin"></i></a></li>
                </ul>
                <a class="mobile-nav-icon js-nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
        <div class="text-box">
            <h1>Hello World... <br><span>Nazywam się Mariusz i chcę zostać Junior Front-End Developerem</span></h1>
            <a class="btn btn-full js-scroll-to-about" href="#">O mnie</a>
            <a class="btn btn-ghost js-scroll-to-projects" href="#">Projekty</a>
        </div>
   </header>
   
<!--   About Section   -->
   <section class="section-about js-section-about" id="about">
      <div class="row">
          <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
          <p class="long-copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima eum, aliquid exercitationem voluptas veniam sed, illo, nisi commodi laudantium consequuntur officia esse suscipit temporibus in. Distinctio, iste porro repudiandae quaerat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum fugit soluta neque est ipsam ad porro autem qui temporibus, impedit aspernatur tenetur commodi quis animi nisi voluptatem, id. Eligendi, rem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis animi totam praesentium dignissimos illo perferendis alias dolorum ipsum culpa commodi est quam, similique reiciendis tempora eum excepturi, voluptates possimus. Officia.lorem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima eum, aliquid exercitationem voluptas veniam sed, illo, nisi commodi laudantium consequuntur officia esse suscipit temporibus in. Distinctio, iste porro repudiandae quaerat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
   </section>
   
   <!--   Skills Section  -->
   <section id="skills">
       <div class="row">
          <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
       </div>
       <div class="row" id="js-wp-1">
           <div class="col span-1-of-3 box">
              <img class="image" src="resources/img/HTML_Logo.png" alt="HTML5-logo">
           </div>
           <div class="col span-1-of-3 box">
               <img class="image" src="resources/img/CSS3_logo.png" alt="CSS3-logo">
           </div>
           <div class="col span-1-of-3 box">
               <img class="image" src="resources/img/JS_logo.png" alt="JavaScript-logo">
           </div>
       </div>
       <div class="row" id="js-wp-2">
           <div class="col span-1-of-3 box">
              <img class="image" src="resources/img/GitHub_logo.png" alt="GitHub-logo">
           </div>
           <div class="col span-1-of-3 box">
               <img class="image" src="resources/img/jQuery_logo.png" alt="jQuerry-logo">
           </div>
           <div class="col span-1-of-3 box">
               <img class="image" src="resources/img/bootstrap_logo.png" alt="bootstrap-logo">
           </div>
       </div>
   </section>
   
<!--   Projects Section   -->
   <section class="section-projects js-section-projects" id="projects">
      <div class="row">
          <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
       </div>
       
       <div class="row">
          <div class="col span-1-of-2 box">
               <div class="project">
                <img class="project-image" src="resources/img/ms.jpg" alt="RGB Guessing Game">
                   <div class="portfolio">
                        <h4>Prywatne portfolio fotograficzne</h4>
                        <a class="btn btn-full" href="http://mariuszstanosz.com/" target="_blank">Www</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-2 box">
               <div class="project">
                  <img class="project-image" src="resources/img/RGB.JPG" alt="RGB Guessing Game">
                   <div class="portfolio">
                        <h4>RGB Guessing Game</h4>
                        <a class="btn btn-full" href="https://pampuchskrytozerca.github.io/RGB-Guessing-Game/" target="_blank">Www</a>
                        <a class="btn btn-full" href="https://github.com/PampuchSkrytozerca/RGB-Guessing-Game" target="_blank">Kod</a>
                   </div>
                </div>
            </div>
        </div>
        <div class="row">
              <div class="col span-1-of-2 box">
                   <div class="project">
                    <img class="project-image" src="resources/img/Sounds_shapes.JPG" alt="RGB Guessing Game">
                       <div class="portfolio">
                            <h4>Shapes'n'Sounds</h4>
                            <a class="btn btn-full" href="https://pampuchskrytozerca.github.io/Shapes-n-Sounds/" target="_blank">Www</a>
                            <a class="btn btn-full" href="https://github.com/PampuchSkrytozerca/Shapes-n-Sounds" target="_blank">Kod</a>
                       </div>
                    </div>
                </div>
                <div class="col span-1-of-2 box">
                   <div class="project">
                    <img class="project-image" src="resources/img/Todo.JPG" alt="RGB Guessing Game">
                       <div class="portfolio">
                            <h4>Todo List</h4>
                            <a class="btn btn-full" href="https://pampuchskrytozerca.github.io/Todo-List/" target="_blank">Www</a>
                            <a class="btn btn-full" href="https://github.com/PampuchSkrytozerca/Todo-List" target="_blank">Kod</a>
                       </div>
                    </div>
                </div>
           </div>
       </section>
   
   
<!--  Contact Section  -->
    <section id="contact">
            <div class="row">
                <h2>I'm happy to hear from you</h2>
            </div>
            
                    <?php
                    if($_GET['success'] == 1) {
                        echo "<div class=\"form-messages success\">Dziękuję! Twoja wiadomość została wysłana.</div>";
                    } if($_GET['success'] == -1) {
                        echo "<div class=\"form-messages error\">Oops! Coś poszło nie tak, Spróbuj ponownie.</div>";
                    }
                    ?>
            
            <form method="post" action="mail-pl.php" class="contact-form">
                <div class="row">
                 <div class="col span-1-of-3">
                     <label for="name">Imię</label>
                 </div>
                 <div class="col span-2-of-3">
                     <input type="text" name="name" id="name" placeholder="Twoje imię" required>
                 </div>
              </div>
              <div class="row">
                 <div class="col span-1-of-3">
                     <label for="email">Email</label>
                 </div>
                 <div class="col span-2-of-3">
                     <input type="email" name="email" id="email" placeholder="Twój adres email" required>
                 </div>
              </div>
              <div class="row">
                 <div class="col span-1-of-3">
                     <label>Napisz do mnie</label>
                 </div>
                 <div class="col span-2-of-3">
                     <textarea name="message" rows="10" placeholder="Twoja wiadomość"></textarea>
                 </div>
              </div>
              <div class="row">
                 <div class="col span-1-of-3">
                     <label>&nbsp;</label>
                 </div>
                 <div class="col span-2-of-3">
                     <input type="submit" value="Send it!">
                 </div>
              </div>
          </form>
    </section>
  
<!--  Footer  -->
   <footer>
       <div class="row">
           <div class="col span-1-of-2">
               <ul class="footer-nav">
                   <li><a href="#home">Strona główna</a></li>
                   <li><a href="#about">O mnie</a></li>
                   <li><a href="#projects">Projekty</a></li>
                   <li><a href="#skills">Umiejętności</a></li>
               </ul>
           </div>
           <div class="col span-1-of-2">
               <ul class="social-nav">
                   <li><a href="https://github.com/PampuchSkrytozerca" target="_blank"><i class="icon ion-social-github"></i></a></li>
                   <li><a href="https://www.linkedin.com/in/mariuszstanosz" target="_blank"><i class="icon ion-social-linkedin"></i></a></li>
               </ul>
           </div>
       </div>
   </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="resources/js/script.js"></script>
</body>

</html>




































