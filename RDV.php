
<?php 
ob_start()
?>

    <!-- ==========================section_rvd1=============================== -->

    <section class="rdv1" id="reserve">
      <div>
        <h1>Rendez-Vous</h1>
        
        <p>
          Salon de beauté vous répond à tous vos questions, N'hésitez pas à
          faire faire votre rendez-vous. Une question sur votre soin.
          <br />Contactez-nous en remplissant le formulaire ci-dessous.<br />
          <a href="./list.php" class="btn">Voir la liste des reservations</a>
        </p>
      </div>
    </section>

    <!-- ======================APPOINTMENT=============================== -->

    <section class="section appoin" id="appointment" aria-label="appointment">
      <div class="container">
        <div class="appoin-card">
          <figure
            class="card-banner img-holder"
            style="--width: 250; --height: 774"
          >
            <img
              src="./assets/images/appoin-banner-1.jpg"
              width="250"
              height="774"
              loading="lazy"
              alt=""
              class="img-cover"
            />
          </figure>

          <div class="card-content">
            <h2 class="h2 section-title">Prendre un Rendez-Vous</h2>

            <p class="section-text">
              Il est très important de remplir tous ces champs, pour bien éviter
              un message d'erreur au moment de la validation.
            </p>

            <form action="insert.php" method="POST" class="appoin-form">
              <div class="input-wrapper">
                <input
                  type="text"
                  name="nom"
                  placeholder="Nom et Prénom"
                  required
                  class="input-field"
                />

                <input
                  type="email"
                  name="mail"
                  placeholder="Votre mail"
                  required
                  class="input-field"
                />
              </div>

              <div class="input-wrapper">
                <input
                  type="number"
                  name="phone"
                  placeholder="Votre numéro de téléphone"
                  required
                  class="input-field"
                />

                <select name="categorie" class="input-field">
                  <option value="Select category">Catégorie</option>
                  <option value="Beauté du Corps">Beauté du Corps</option>
                  <option value="Body massage">Body massage</option>
                  <option value="Beauté du Visage">Beauté du Visage</option>
                  <option value="Coiffure">Coiffure</option>
                  <option value="Massage">Massage</option>
                  <option value="Onglérie & Epilation">
                    Onglérie & Epilation
                  </option>
                </select>
              </div>

              <input
                type="date"
                name="date"
                required
                class="input-field date"
              />

              <input
                type="time"
                name="time"
                required
                class="input-field date"
              />

              <textarea
                name="message"
                placeholder="Vous pouvez nous écrire ici"
                required
                class="input-field"
              ></textarea>

              <button type="submit" class="form-btn">
                <span class="span">Valider maintenant</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>
            </form>
          </div>

          <figure
            class="card-banner img-holder"
            style="--width: 250; --height: 774"
          >
            <img
              src="./assets/images/appoin-banner-2.jpg"
              width="250"
              height="774"
              loading="lazy"
              alt=""
              class="img-cover"
            />
          </figure>
        </div>
      </div>
    </section>

    <!-- ========================Footer Design========================= -->
    <?php
    $title ="RDV";
$css = "RDV.css";
$content = ob_get_clean();
require './include/template.php'
?>
