<?php 
ob_start()
?>
    <!-- ========================section_service1=================== -->
    <section class="service1" id="services">
      <div>
        <h1>SERVICES</h1>
      </div>
    </section>
    <!-- ============================section_services========================= -->

    <section class="services" id="services">
      <h2 class="heading">Nos Services</h2>
      <div class="services-container">
        <div class="services-box">
          <img src="./image/corps1.jpg" alt="" />
          <div class="services-layer">
            <h4>Beauté du Corps</h4>
          </div>
        </div>

        <div class="services-box">
          <img src="./image/visage.jpg" alt="" />
          <div class="services-layer">
            <h4>Beauté du Visage</h4>
          </div>
        </div>

        <div class="services-box">
          <img src="./image/cheveu6.jpg" alt="" />
          <div class="services-layer">
            <h4>Beauté des cheveux</h4>
          </div>
        </div>

        <div class="services-box">
          <img src="./image/coiff.jpg" alt="" />
          <div class="services-layer">
            <h4>Coiffure</h4>
          </div>
        </div>

        <div class="services-box">
          <img src="./image/massage.jpg" alt="" />
          <div class="services-layer">
            <h4>Massage</h4>
          </div>
        </div>

        <div class="services-box">
          <img src="./image/ongleri.jpg" alt="" />
          <div class="services-layer">
            <h4>Onglérie & Epilation</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================fin_section_services========================= -->

    <!-- ================section_footer================================= -->
    <?php
    $title = "Services";
$css = "service.css";
$content = ob_get_clean();
require './include/template.php'
?>
