<?php  get_header(); ?>

<div class="container_overview_hero_section">
    <div class="container_hero_img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/img_hero_section.jpeg" alt="img_hero_overview"> 

        <div class="color_on_img"></div>

        <div class="where_we_are_in">
            <h1 class="title_wre_are_in">Service</h1>  <br>

            <div class="position_we_in">
                <span><i class="fa-regular fa-house"></i></span>/ <br>
                <p>Home</p>/
                <p>About Us</p>/
                <p>Service</p>
            </div>
        
        </div>
    </div>
</div>


 <!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>






<?php get_footer(); ?>