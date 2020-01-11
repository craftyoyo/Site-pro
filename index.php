<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Yoan Savary</title>
  <link rel="icon" href="favicon.ico" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' async defer>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css' async defer>
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
            $('#ok').show();
            $('form').clearForm();
            //alert('form was submitted');
          }
        });

      });

    });
  </script>
</head>


<body>
<!--
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
</div>-->
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
            <li><a href="https://cloud.comon-real.fr/index.php/s/SD8Di4ANr2ygL3j" target="_blank">CV</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
            <li><a class="smoothscroll" href="#social">Instagram</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="title">
      <div><span class="typcn typcn-lightbulb icon heading"></span></div>
      <div class="smallsep heading"></div>
      <h1 class="heading"> Yoan Savary</h1>
      <h2 class="heading">SysAdmin, IT HelpDesk</h2>
      <h2 class="heading">Le site est en cours de construction, La version final arrive bientôt !</h2>
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptas molestiae eius quam maiores nostrum
          neque, dolorem repellendus ex reiciendis.</p>
      </div>
      <div class="row">
        <div class="six columns">
          <h3><span class="typcn typcn-device-desktop icon"></span>L'informatique</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
          </p>
        </div>
        <div class="six columns">
          <h3><span class="typcn typcn-pen icon"></span>Le développement</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
          </p>
        </div>
        <div class="row">
          <div class="six columns">
            <h3><span class="typcn typcn-cog-outline icon"></span>Mes qualités et défauts
            </h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo.</p>
          </div>
          <div class="six columns">
            <h3><span class="typcn typcn-lightbulb icon"></span>Mes objectifs</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo.</p>
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
              src="data:image/jpeg;base64,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"></div>

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
              src="data:image/png;base64,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">
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
      <form action="#" method="post">
        <div id="ok" style="display: none; background-color:green;color:white;padding:10px;">Votre message a bien ete
          envoyé</div>
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

  <!-- Social Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <section id="social">
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h1>Instagram</h1>
          <div class="block"></div>
          <!-- Place <div> tag where you want the feed to appear -->
          <div id="curator-feed-default-layout"><a style="color: white;" href="https://curator.io" target="_blank"
              class="crt-logo crt-tag">Powered by Curator.io</a></div>
          <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
          <script type="text/javascript">
            /* curator-feed-default-layout */
            (function () {
              var i, e, d = document,
                s = "script";
              i = d.createElement("script");
              i.async = 1;
              i.src = "https://cdn.curator.io/published/ff318108-0996-4e1c-bef0-4642511fa7bf.js";
              e = d.getElementsByTagName(s)[0];
              e.parentNode.insertBefore(i, e);
            })();
          </script>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Footer Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <footer>
    <div class="container">
      <div class="nine columns">
        <p>Created by Yoan Savary.</p>
      </div>
      <div class="three columns"> <a href="https://www.instagram.com/yoan.savary/"><span
            class="typcn typcn-social-instagram-circular socialIcons"></span> </a> <a
          href="https://www.linkedin.com/in/yoan-savary-011531155/"><span
            class="typcn typcn-social-linkedin-circular socialIcons"></span></a> 
            <!-- IPv6-test.com button BEGIN -->
<a href='http://ipv6-test.com/validate.php?url=referer'><img src='http://ipv6-test.com/button-ipv6-small.png' alt='ipv6 ready' title='ipv6 ready' border='0' /></a>
<!-- IPv6-test.com button END -->
</div>
    </div>
  </footer>
  <!-- partial -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js' async defer></script>
  <script src="/js/script.js"></script>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>

</body>

</html>