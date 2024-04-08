<?php 
ob_start()
?>

    <!-- ======================section contact1=================================== -->

    <section class="contact1" id="contact">
      <div><h1>CONTACT</h1>
        <p>
          Salon de beauté vous répond à tous vos questions, N'hésitez pas à nous
          contacter. Une question sur votre soin.
          <br />Contactez-nous en remplissant le formulaire ci-dessous.
        </p>
      </div>
    </section>

    <!-- ==========================================Footer&Contact=============================== -->

    <footer
      class="footer-contact has-bg-image"
      style="background-image: url('./assets/images/footer-bg.png')"
    >
      <div class="container">
        <div class="footer-top">
          <div class="footer-brand">
            <a href="#" class="logo">
              Salon de Beauté
              <span class="span">Pour Vos Soins</span>
            </a>

            <form action="" class="input-wrapper">
              <input
                type="email"
                name="email_address"
                placeholder="Enter Your Email"
                required
                class="email-field"
              />

              <button type="submit" class="btn has-before">
                <span class="span">Subscribe Now</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>
            </form>
          </div>

         

            <ul class="footer-list">
              <li>
                <p class="footer-list-title">Contact-nous</p>
              </li>

              <li class="footer-list-item">
              <i class='bx bx-map icon' style='font-size:18px;margin-block:7px;color:white' aria-hidden="true"></i>

                <a class="contact-link" href="#">
                  Université d'Antsiranana en ESP
                </a>
              </li>

              <li class="footer-list-item">
              <i class='bx bx-phone-call icon' style='font-size:18px;margin-block:7px;color:white' aria-hidden="true"></i>

                <a href="tel:+261329934421" class="contact-link"
                  >+261 (32) 99 344 21</a
                >
              </li>

              <li class="footer-list-item">
              <i class='bx bx-time icon' style='font-size:18px;margin-block:7px;color:white' aria-hidden="true"></i>

                <span class="contact-link">Lundi - Samedi, 08h - 21h</span>
              </li>

              <li class="footer-list-item">
              <i class='bx bx-envelope icon' style='font-size:18px;margin-block:7px;color:white' aria-hidden="true"></i>
              
                <a href="ibrahimsaddam4400@gmail.com" class="contact-link"
                  >ibrahimsaddam4400@gmail.com</a
                >
              </li>

              <li class="footer-list-item">
              <i class='bx bx-envelope icon' style='font-size:18px;margin-block:7px;color:white' aria-hidden="true"></i>

                <a href="saddamboura4400@gmail.com" class="contact-link"
                  >saddamboura4400@gmail.com</a
                >
              </li>
            </ul>
          </div>
        </div>

        <!-- ===================================================== -->

<?php
$title = "Contact";
$css= "contact.css";
$content = ob_get_clean();
require './include/template.php'
?>
