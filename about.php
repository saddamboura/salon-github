<?php
ob_start()
?>
    <section class="about1" id="about">
      <div><h1>About</h1></div>
    </section>
    <!-- ================================== -->

    <section class="about" id="about">
      <div class="about-img">
        <img src="./assets/images/about.jpg" alt="" />
      </div>
      <div class="about-content">
        <h3>NOTRE SALON DE BEAUTE</h3>
        <p>
          Beauté du corps & Beauté du visage, Beauté des cheveux & coiffure,
          Massage & Detente et Onglerie & Epilation. Notre salon de beauté
          propose bien plus que ce qu'on vient de citer ci-dessus. Choisissez la
          prestation qui vous plaît et faites place au plaisir des sens.
        </p>
        <!-- <a href="#" class="btn">Read more</a> -->
      </div>
    </section>

    <!-- ============================engagement======================== -->

    <section class="sect">
      <h1>Les Engagements du Salon</h1>
      <div class="content">
        <div>
          <h2>Professionnalisme</h2>
          <p>
            Notre salon de beauté, à une équipe expérimentée au service de votre
            bien-être Des esthéticiennes passionnées s'occupent de vous selon
            vos besoins.
          </p>
        </div>

        <div>
          <h2>Qualité</h2>
          <p>
            Nous assurons une qualité optimale dans toutes nos prestations de
            beauté, mais également concemant les produits utiles.
          </p>
        </div>

        <div>
          <h2>Accueil</h2>
          <p>
            Nous vous accueillons dans un cadre de relaxation unique et
            entièrement dédié aux soins afin de vous offrir une expérience de
            détente, hors du temps.
          </p>
        </div>

        <div>
          <h2>Hygiène</h2>
          <p>
            Notre salon de beauté vous accueille dans un lieu propre et
            hygiénique afin de garantir le bien-être de tous. Peignoirs,
            serviettes et claquettes sont fournis.
          </p>
        </div>
      </div>
    </section>
<?php
$title = "A propos";
$css = "about.css";
$content = ob_get_clean();
require './include/template.php'
?>

 