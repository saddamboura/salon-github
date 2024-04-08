<?php 
ob_start()
?>

    <!-- ====================section home============================================= -->

    <section class="home" id="home">
      <div class="home-content">
        <h3>Bonjour, C'est Notre</h3>
        <h1>Salon de Beauté</h1>
        <h3>Pour Tout le Monde : <span class="multiple-text"></span></h3>
        <p>
          Vous étes à la recherche d'une salon de beauté pour passer un moment
          agréable tout en prennant soin de vous ? Bienvenue au salon de beauté,
          Votre salon de beauté se situe à Diégo Suarez aux alentours de
          l'université. Un salon de beauté qui a toutes les prestations
          d'esthétiques pour vous faire vivre un moment de détente unique.
        </p>
        <div class="social-media">
          <a href="https://web.facebook.com/"
            ><i class="bx bxl-facebook"></i
          ></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
        <a href="./RDV.php" class="btn">Je Réserve Mon soin</a>
      </div>
      <div class="home-img">
        <img src="./logo2.svg" alt="" />
      </div>
    </section>

    <!-- ==========================Choix de votre style================== -->

    <section class="styles" id="home">
      <h1 class="heading">Choix de votre styles</h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="./image/style-1.jpg" alt="" />
          </div>
          <div class="content">
            <h3 class="title">Coupe De Cheveux De Mariage</h3>
            <p>
              C'est pour tous le Mari, la Mariée et aussi pour les participants.
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="./image/style-2.jpg" alt="" />
          </div>
          <div class="content">
            <h3 class="title">Coiffure De Soirée</h3>
            <p>Pour tout les personnes qui aiment faire les soirées.</p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="./image/style-3.jpg" alt="" />
          </div>
          <div class="content">
            <h3 class="title">Coiffure De Fête</h3>
            <p>
              Pour tout les personnes qui aiment faire et amuser pendent la
              fête, c'est ici votre salon de beauté.
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="./image/style-4.jpg" alt="" />
          </div>
          <div class="content">
            <h3 class="title">Coiffure D'affaires</h3>
            <p>
              Le look compte beaucoup dans le monde professionnelle, Voulez-vous
              avoir du bvon look, c'est ici pour le rendez-vous.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================fin du section choix=================== -->

    <!-- ====================Forfait=================================== -->

    <section class="pricing" id="home">
      <h1 class="heading">Offre et Prix</h1>
      <div class="box-container">
        <div class="box">
          <h3 class="title">basic</h3>
          <div class="price">
            <span class="amount">10</span>
            <span class="currency">Ar</span>
          </div>
          <ul>
            <li><i class="fas fa-check"></i> Simple haircut</li>
            <li><i class="fas fa-check"></i> hair plugs</li>
            <li><i class="fas fa-check"></i> styling</li>
            <li><i class="fas fa-check"></i> braiding</li>
          </ul>
          <a href="./RDV.php"><button>Réserver</button></a>
        </div>

        <div class="box">
          <h3 class="title">stanard</h3>
          <div class="price">
            <span class="amount">20</span>
            <span class="currency">Ar</span>
          </div>
          <ul>
            <li><i class="fas fa-check"></i> Simple haircut</li>
            <li><i class="fas fa-check"></i> hair plugs</li>
            <li><i class="fas fa-check"></i> styling</li>
            <li><i class="fas fa-check"></i> braiding</li>
          </ul>
          <a href="./RDV.php"><button>Réserver</button></a>
        </div>

        <div class="box">
          <h3 class="title">Premium</h3>
          <div class="price">
            <span class="amount">30</span>
            <span class="currency">Ar</span>
          </div>
          <ul>
            <li><i class="fas fa-check"></i> Simple haircut</li>
            <li><i class="fas fa-check"></i> hair plugs</li>
            <li><i class="fas fa-check"></i> styling</li>
            <li><i class="fas fa-check"></i> braiding</li>
          </ul>
          <a href="./RDV.php"><button>Réserver</button></a>
        </div>
      </div>
    </section>

    <!-- ================================fin Forfait============== -->
<?php
$title="Home";
$css = "style.css";
$content = ob_get_clean();
require './include/template.php'
?>
