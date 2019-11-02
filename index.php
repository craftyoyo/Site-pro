<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Yoan Savary</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css' async defer>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css' async defer>
  <link rel="stylesheet" href="/css/style.css">

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


<body>

  <!-- Header Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <header id="header">
    <div class="main_nav">
      <div class="container">
        <div class="mobile-toggle"> <span></span> <span></span> <span></span> </div>
        <nav>
          <ul>
            <!--<li><a class="smoothscroll" href="#header">Home</a></li>-->
            <li><a class="smoothscroll" href="#about">A propos</a></li>
            <li><a class="smoothscroll" href="#experience">expérience</a></li>
            <li><a href="https://cloud.comon-real.fr/index.php/s/SD8Di4ANr2ygL3j">CV</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="title">
      <div><span style="color: <?php printf( "#%06X\n", mt_rand( 0, 0xFFFFFF )); ?>;" class="typcn typcn-heart icon heading"></span></div>
      <div class="smallsep heading"></div>
      <h1 class="heading"> Yoan Savary</h1>
      <h2 class="heading">SysAdmin, IT HelpDesk</h2>
      <h2 class="heading">Le site est en cours de construction, il arrive Avant 2020!</h2>
      <a class="smoothscroll" href="#about">
        <div class="mouse">
          <div class="wheel"></div>
        </div>
      </a>
    </div>
    <a class="smoothscroll" href="#about">
      <div class="scroll-down"></div>
    </a>
  </header>

  <!-- About Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  
<section id="about">
  <div class="container">
    <div class="row">
      <h1>A propos de moi</h1>
      <div class="block"></div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptas molestiae eius quam maiores nostrum neque, dolorem repellendus ex reiciendis.</p>
    </div>
    <div class="row">
      <div class="six columns">
        <h3><span class="typcn typcn-device-desktop icon"></span>l'informatique</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div class="six columns">
        <h3><span class="typcn typcn-pen icon"></span>Le développement</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div class="row">
        <div class="six columns">
          <h3><span class="typcn typcn-cog-outline icon" title="n'es pas Pierre ;D"></span>Mes qualités et défauts ;)</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <div class="six columns">
          <h3><span class="typcn typcn-lightbulb icon"></span>Mes objectifs</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Contact experience
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <section id="experience">
    <div class="container">
      <h1>Experience</h1>
      <div class="block"></div>
      <div id="experience-timeline">

        <div class="vtimeline-point">
          <div class="vtimeline-icon"><img class="img-circle" style="max-width: 50px; height: 50px;"
              src="/images/logo_econocom.jpg"></div>

          <div class="vtimeline-block">
            <span class="vtimeline-date">juillet 2018 – septembre 2018</span>
            <div class="vtimeline-content">
              <h4><a href="https://www.econocom.com/fr">Econocom</a></h4>
              <h3>Technicien helpdesk</h3>
              <p>Lors de cette emploi chez Econocom j'ai pu mettre en pratique les points suivants.
                <ul>
                  <li>Répondre au téléphone et comprendre l’utilisateur/trice la/le rassurer.</li>
                  <li>Comprendre et traiter rapidement les problèmes de l’utilisateur/trice.</li>
                  <li>Utilisation des logiciels : Citrix director, Console Active Directory, LanDesk</li>
                  <li>Dépannage Wyse, imprimante/scanner ricoch, brother, logiciel métier banque (SAB AT, Platine,
                    Condor), DAB</li>
                </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="vtimeline-point">
          <div class="vtimeline-icon"><img class="img-circle" style="max-width: 50px; height: 50px;"
              src="/images/encom.png">
          </div>
          <div class="vtimeline-block">
            <span class="vtimeline-date">Janvier 2018 – fevrier 2018</span>
            <div class="vtimeline-content">
              <h4><a href="https://encom-conseil.fr/">Encom-Conseil</a></h3>
                <h3>Technicien Support Hotline</h3>
                <p>Pendant mon expérience chez Encom j'ai appris les points suivants.
                  <ul>
                    <li>Gestion d’un support téléphonique pour dépannage distant.</li>
                    <li>Intervention sur site pour installation & dépannage client.</li>
                    <li>Suivi de commande, gestion des tickets clients.</li>
                    <li>Dépannage d’accès internet avec analyse de trame.</li>
                  </ul>
                </p>
            </div>
          </div>
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
            <label for="exampleRecipientInput">Nom *</label>
            <input required class="u-full-width" placeholder="Doe" name="first_name" type="text">
          </div>
          <div class="six columns">
            <label for="exampleRecipientInput">Prénom *</label>
            <input required class="u-full-width" placeholder="John" name="last_name" type="text">
          </div>
        </div>
        <div class="row">
          <div class="six columns">
            <label for="exampleEmailInput">Email *</label>
            <input required class="u-full-width" placeholder="Contact@example.com" name="email" type="email">
          </div>
          <div class="six columns">
            <label for="exampleEmailInput">Tel</label>
            <input class="u-full-width" placeholder="0033712345678" name="tel" type="tel">
          </div>
        </div>
        <div class="row">
          <label for="exampleMessage">Message *</label>
          <textarea required class="u-full-width" placeholder="Bonjour..." name="message"></textarea>
          <div class="g-recaptcha" data-sitekey="6LcA9b0UAAAAAM0BGI2XASAOjiW5MgNTYXm1PuFv"></div>
          <input class="button-primary" name="submit" type="submit" value="Submit">
          <p class="button-primary">* Champs requis</p>
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
      <div class="three columns"> <a href="https://www.instagram.com/yoan.savary/"><span
            class="typcn typcn-social-instagram-circular socialIcons"></span> </a> <a
          href="https://www.linkedin.com/in/yoan-savary-011531155/"><span
            class="typcn typcn-social-linkedin-circular socialIcons"></span></a> </div>
    </div>
  </footer>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js' async defer></script>
  <script src="/js/script.js"></script>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>

</body>

</html>