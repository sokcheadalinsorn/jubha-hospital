<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/header.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
      <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
       <img src="wp-content/themes/img/3.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="wp-content/themes/img/5.jpg" alt="">
      </div>
      <div class="swiper-slide">
       <img src="wp-content/themes/img/4.jpg" alt="">
      </div>
      <div class="swiper-slide">
       <img src="wp-content/themes/img/2.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="wp-content/themes/img/1.jpeg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="wp-content/themes/img/6.avif" alt="">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
<section class="appointment-section">
  <div class="tab-container">
    <div class="tab-item active">
      <span class="tab-text">FIND A DOCTOR</span>
    </div>
    <div class="tab-item">
      <span class="tab-text">LOCATION & DIRECTION</span>
    </div>
  </div>

  <div class="search-bar">
    <select class="input-select">
      <option>Select Location</option>
      <option>AMC Rakkah</option>
      <option>AGH Khobar</option>
      <option>AGH Dammam</option>
      <option>Ocology Center</option>
      <option>AGH Aziziah Dammam</option>
      <option>AMC Jubail</option>
      <option>AGH Hofuf</option>
    </select>
    <select class="input-select">
      <option>Select Specialization</option>
    </select>
    <button class="find-btn">FIND DOCTOR &rarr;</button>
  </div>
</section>
 

    <section class="about-section">
        <div class="container">
            <div class="image-gallery">
                <div class="img-box box-1">
                    <img src="wp-content/themes/img/co-removebg-preview.png" alt="Dentist">
                </div>
                <div class="img-box box-2">
                    <img src="wp-content/themes/img/com-removebg-preview.png" alt="Doctor">
                </div>
            </div>

            <div class="content-box">
                <span class="subtitle">About Us</span>
                <h2>Holistic Haven Where Health Every Day</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                
                <div class="features">
                    <div class="feature-item">
                        
                        <div>
                            <h4>MedNest Wellness</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                        </div>
                    </div>
                    <div class="feature-item">
                       
                        <div>
                            <h4>Pulse Care Solutions</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                        </div>
                    </div>
                </div>

                <button class="btn-read-more">Read More +</button>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container grid-4">
            <div class="service-card">
                <div class="s-icon"><i class="fa-solid fa-comment"></i></div>
                <h3>Get Fast Reply</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <div class="s-icon"><i class="fa-solid fa-capsules"></i></div>
                <h3>InspireHealth Hub</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <div class="s-icon"><i class="fa-solid fa-syringe"></i></div>
                <h3>Health Services</h3>
                <p>There are many variations of passages of Lorem Ipsum .</p>
            </div>
            <div class="service-card">
                <div class="s-icon"><i class="fa-solid fa-book-medical"></i></i></div>
                <h3>Voyage Wellness</h3>
                <p>There are many variations of passages .</p>
            </div>
        </div>
    </section>

         <section class="nara">
    <div class="nina">
        <h1>Welcome to <br> The Best Dental Clinic</h1>
    </div>

    <div class="stats-container">
        <div class="stat-card">
            <h2>900+</h2>
            <p class="main-text">Successful Surgeries</p>
            <p class="sub-text">Highly Skilled</p>
        </div>

        <div class="stat-card">
            <h2>45000+</h2>
            <p class="main-text">Happy Patients</p>
            <p class="sub-text">High Performance</p>
        </div>

        <div class="stat-card">
            <h2>99.7%</h2>
            <p class="main-text">Positive Feedback</p>
            <p class="sub-text">Patient Approved</p>
        </div>
    </div>
</section>   
      <section class="srat">
        <div class="srat-min">
          <p>Statistics</p>
            <h2>About Al Mana Hospitals Group</h2>
          <h1>We provide specialized units for various medical specialties</h1>
          <samp>Continuing our successes in the Group, we provide units distinguished by our various medical specialties as we strive to provide the highest standards of health care and modern medical equipment to serve the community</samp>
           <button class="srat-bun">OUR BRANCHES</button>
        </div>
        
      </section>
    
      <section class="specialties">
        <div class="specialties-vim">
          <p>Specialties</p>
          <h1>Seven Decades of Excellence</h1>
        </div>
 </section>
   


 <section class="departments">
  <div class="header">
    <div>
      <p class="subtitle">DEPARTMENTS</p>
      <h1>7 Decades of Excellence</h1>
    </div>
    <a href="#" class="all-depts">ALL DEPARTMENTS <i class="fa-solid fa-arrow-right"></i></a>
  </div>

  <div class="cards">
   <div class="card card-1">
  <div class="content">
    <div class="icon"><i class="fa-solid fa-syringe"></i></div>
    <h3>Anesthesiology</h3>
    <p>Almana Hospital's Anesthesiology Department</p>
    <div class="arrow"><i class="fa-solid fa-arrow-right"></i></div>
  </div>
</div>
    <div class="card card-2">
      <div class="content">
        <div class="icon"><i class="fa-solid fa-heart-pulse"></i></div>
        <h3>Cardiac Surgery</h3>
        <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
      </div>
    </div>

    <div class="card card-3">
      <div class="content">
        <div class="icon"><i class="fa-solid fa-hospital"></i></div>
        <h3>Cath Lab</h3>
        <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
      </div>
    </div>
  </div>
</section>