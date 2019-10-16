
<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Yoan Savary</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css'>
<link rel="stylesheet" href="./style.css">                 
<link rel="stylesheet" href="https://www.cssscript.com/demo/success-error-notification-notify/css/notification.css"/>
<script type="text/javascript" src="https://www.cssscript.com/demo/success-error-notification-notify/js/notify.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'mail.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
    </script>
  </head>

 
</head>
<body class="dark">
<!-- partial:index.partial.html -->
<!-- Header Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<header id="header">
  <div class="main_nav">
    <div class="container">
      <div class="mobile-toggle"> <span></span> <span></span> <span></span> </div>
     <nav>
        <ul>
          <li><a class="smoothscroll" href="#header">Home</a></li>
          <li><a class="smoothscroll" href="#about">A propos</a></li>
          <li><a class="smoothscroll" href="#skills">expérience</a></li>
          <li><a href="https://cloud.comon-real.fr/index.php/s/SD8Di4ANr2ygL3j">CV</a></li>
          <li><a class="smoothscroll" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="title">
    <div><span class="typcn typcn-heart-outline icon heading"></span></div>
    <div class="smallsep heading"></div>
    <h1 class="heading"> Yoan Savary</h1>
    <h2 class="heading">SysAdmin, IT HelpDesk</h2>
    <h2 class="heading">Le site est en cours de construction, il arrive Avant 2020!</h2>
    <a class="smoothscroll" href="#about">
    <div class="mouse">
      <div class="wheel"></div>
    </div>
    </a> </div>
  <a class="smoothscroll" href="#about">
  <div class="scroll-down"></div>
  </a> </header>
  
<!-- About Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <!--
<section id="about">
  <div class="container">
    <div class="row">
      <h1>About</h1>
      <div class="block"></div>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="row">
      <div class="six columns">
        <h3><span class="typcn typcn-device-desktop icon"></span>Our Process</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div class="six columns">
        <h3><span class="typcn typcn-pen icon"></span>Our Approach</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div class="row">
        <div class="six columns">
          <h3><span class="typcn typcn-cog-outline icon"></span>Our Goal</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <div class="six columns">
          <h3><span class="typcn typcn-lightbulb icon"></span>Our Mission</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Skills Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
<!--
<section id="skills">
  <div class="container">
    <h1>Services</h1>
    <div class="block"></div>
    <div class="row">
      <div class="one-third column">
        <h3>Design</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus.</p>
      </div>
      <div class="one-third column">
        <h3>Development</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus.</p>
      </div>
      <div class="one-third column">
        <h3>Marketing</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus.</p>
      </div>
    </div>
    <div class="row">
      <div class="eight columns">
        <div class="progressBar">
          <h4>HTML5</h4>
          <div class="progressBarContainer">
            <div class="progressBarValue value-90"></div>
          </div>
        </div>
        <div class="progressBar">
          <h4>CSS3</h4>
          <div class="progressBarContainer">
            <div class="progressBarValue value-80"></div>
          </div>
        </div>
        <div class="progressBar">
          <h4>Jquery</h4>
          <div class="progressBarContainer">
            <div class="progressBarValue value-30"></div>
          </div>
        </div>
        <div class="progressBar">
          <h4>WordPress</h4>
          <div class="progressBarContainer">
            <div class="progressBarValue value-70"></div>
          </div>
        </div>
      </div>
      <div class="four columns">
        <p>Lorem ipsum dolor sit amet, enim soluta consectetur adipisicing elit. Sit, eius, itaque, porro, beatae impedit officia tenetur reiciendis in quia eum autem. Enim soluta consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  

<section id="contact">
  <div class="container">
    <h1>Contact</h1>
    <div class="block"></div>
    <form action="" method="post">
      <div class="row">
        <div class="six columns">
          <label for="exampleRecipientInput">Nom</label>
          <input required class="u-full-width"  placeholder="Requis" name="first_name" type="text">
        </div>
        <div class="six columns">
          <label for="exampleRecipientInput">Prénom</label>
          <input required class="u-full-width"  placeholder="Requis" name="last_name" type="text">
        </div>
</div>
<div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Email</label>
          <input required class="u-full-width"  placeholder="Requis" name="email" type="email">
        </div>
        <div class="six columns">
          <label for="exampleEmailInput">Tel</label>
          <input class="u-full-width"  placeholder="optionnelle" name="tel" type="tel">
        </div>
      </div>
      <div class="row">
        <label for="exampleMessage">Message</label>
        <textarea  required class="u-full-width"  placeholder="Requis" name="message"></textarea>
        <div class="g-recaptcha" data-sitekey="6LcA9b0UAAAAAM0BGI2XASAOjiW5MgNTYXm1PuFv"></div>
        <input class="button-primary" name="submit" type="submit" value="Submit">
      </div>
    </form>
  </div>
</section>

<!-- Footer Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  

<footer>
  <div class="container">
    <div class="nine columns">
      <p>Created with <a style="color:white;" href="/game">love</a> by Yoan Savary.</p>
    </div>
    <div class="three columns"> <a href="https://www.instagram.com/yoan.savary/"><span class="typcn typcn-social-instagram-circular socialIcons"></span> </a> <a href="https://www.linkedin.com/in/yoan-savary-011531155/"><span class="typcn typcn-social-linkedin-circular socialIcons"></span></a> </div>
  </div>
</footer>
<!-- partial -->


<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
<script  src="./script.js"></script>
<script src='https://www.google.com/recaptcha/api.js' async defer ></script>

</body>
</html>
