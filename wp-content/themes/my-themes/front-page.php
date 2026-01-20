<?php get_header(); ?>

<br><br><br><br><br><br><br>
<br><br><br><br>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/header.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
        <img src="wp-content/themes/img/01.jpg" alt="">
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
      <option>Select Specialization</option>
       <option>Allergy & Immunology Medicine</option>
      <option>Audiology</option>
      <option>Bariatric Surgery</option>
      <option>Breast Surgery</option>
      <option>Cardiology</option>
      <option>Dermatology</option>
      <option>Allergy & Immunology Medicine</option>
      <option>Audiology</option>
      <option>Bariatric Surgery</option>
      <option>Breast Surgery</option>
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
                
                    <button class="davi">Read More </button>
                 
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
          <div class="s-icon"><i class="fa-solid fa-hospital"></i></div>
            <h2>900+</h2>
            <p class="main-text">Successful Surgeries</p>
            <p class="sub-text">Highly Skilled</p>
        </div>

        <div class="stat-card">
           <div class="s-icon"><i class="fa-solid fa-user-doctor"></i></div>
            <h2>45000+</h2>
            <p class="main-text">Happy Patients</p>
            <p class="sub-text">High Performance</p>
        </div>

<div class="stat-card">
          <div class="s-icon"><i class="fa-solid fa-bed"></i></div>
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
    
​​​    <div class="lika">
  <div class="pok">
    <h2>DEPARTMENTS</h2>
    <p>7 Decades of Excellence</p>
  </div>
  <h2 class="title">Our Excellence</h2>
  <div class="carousel">
    <div class="card">
      <img src="wp-content/themes/img/4.jpg" alt="Cardiac Surgery">
      <div class="card-content">
        <div class="icon"><i class="fa-solid fa-heart-pulse"></i></div>
        <h3>Cardiac Surgery</h3>
        <p>Almana Hospital's Cardiac Surgery Department</p>
        <a href="#" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="card">
      <img src="wp-content/themes/img/20.jpg" alt="Cardiac Surgery">
      <div class="card-content">
        <div class="icon"><i class="fa-solid fa-syringe"></i></i></div>
        <h3>Cardiac Surgery</h3>
        <p>Almana Hospital's Cardiac Surgery Department</p>
        <a href="#" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    
    <div class="card">
      <img src="wp-content/themes/img/6.avif" alt="Cath Lab">
      <div class="card-content">
        <div class="icon"><i class="fa-solid fa-bed"></i></div>
        <h3>Cath Lab</h3>
        <p>Almana Hospital's Cath Lab Department</p>
        <a href="#" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</div>

   <section class="events-section">
  <div class="header-area">
    <span class="subtitle">MEDIA UPDATE</span>
    <h2 class="title">Latest Events</h2>
  </div>

  <div class="container-kopo">

    <div class="card">
      <div class="card-header">
        <img src="wp-content/themes/img/23.webp" alt="">
      </div>
      <div class="card-body">
        <p class="category">MEDICAL ENCYCLOPEDIA</p>
        <h3 class="card-title">Leukemia Symptoms, causes and treatment</h3>
        <a href="#" class="read-more"> READ MORE   <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <img src="wp-content/themes/img/22.jpeg" alt="">
      </div>
      <div class="card-body">
        <p class="category">MEDICAL ENCYCLOPEDIA</p>
        <h3 class="card-title">Signs of weakened immune system</h3>
        <a href="#" class="read-more"> READ MORE  <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <img src="wp-content/themes/img/២៤.jpg" alt="">
        <span class="date-badge">26 SEP, 2023</span>
      </div>
      <div class="card-body">
        <p class="category">SPECIALIZED CARE</p>
        <h3 class="card-title">Home Medical Care</h3>
        <a href="#" class="read-more">READ MORE   <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

  </div>
</section>

<section class="video-section">
  <div class="video-card">
    <img src="wp-content/themes/img/12.webp" alt="Al Mana Medical Center" class="bg-image">
    
    <div class="overlay">
      <div class="top-dots">
        <span></span>
        <span class="active"></span>
        <span></span>
        <span></span>
      </div>

<div class="play-icon">
        <svg viewBox="0 0 24 24" width="60" height="60" fill="none" stroke="white" stroke-width="1.5">
          <path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
        </svg>
      </div>

      <div class="content">
        <p class="category">VIDEOS</p>
        <h3 class="title">Pre-Employment Screening Clinic</h3>
      </div>
    </div>
  </div>
</section>
   

    <div class="container-yulo">
    <div class="rating-card">
        <h3>How Was Your Experience?</h3>
        <p>Your feedback helps us to improve, tap a star to rate your experience</p>
        <div class="icons stars">
            <i class="fas fa-star active"></i>
            <i class="fas fa-star active"></i>
            <i class="fas fa-star active"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="rayi"><span class="status-label label-okay">Okay</span></div>
        <button class="spto">Rate now</button>
        <button class="voip">State your reason</button>
    </div>

    <div class="rating-card">
        <h3>How Was Your Experience?</h3>
        <p>Your feedback helps us to improve, tap a star to rate your experience</p>
        <div class="icons emojis">
            <span class="active-emoji"><i class="fa-solid fa-face-angry"></i></span>
            <span><i class="fa-solid fa-face-meh"></i></span>
            <span><i class="fa-solid fa-face-smile"></i></span>
            <span><i class="fa-solid fa-face-laugh"></i></span>
            <span><i class="fa-solid fa-face-grin-hearts"></i></span>
        </div>
        <div class="rayi"><span class="status-label label-bad">Bad</span></div>
        <button class="spto">Rate now</button>
        <button class="voip">State your reason</button>
    </div>

    <div class="rating-card">
        <h3>How Was Your Experience?</h3>
        <p>Your feedback helps us to improve, tap a star to rate your experience</p>
        <div class="icons thumbs">
            <div class="thumb-active"><i class="fas fa-thumbs-up"></i></div>
            <i class="fas fa-thumbs-down"></i>
        </div>
        <div class="rayi"><span class="status-label label-good">Good</span></div>
        <button class="spto">Rate now</button>
        <button class="voip">State your reason</button>
    </div>
<div class="rating-card">
        <h3>How Was Your Experience?</h3>
        <p>Your feedback helps us to improve, tap a star to rate your experience</p>
        <div class="slider-container">
            <input type="range" min="1" max="5" value="2" class="slider">
            <div class="slider-labels">
                <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span>
            </div>
        </div>
        <div class="rayi"><span class="status-label label-unhappy">Unhappy</span></div>
        <button class="spto">Rate now</button>
        <button class="voip">State your reason</button>
    </div>
</div>

​​​      <section class="niko">
  <h2 class="title">Recent Feedbacks</h2>

  <div class="feedback-card">
    <img src="https://i.pravatar.cc/80?img=12" alt="user">
    <div class="content">
      <h4>Robert Karmazov</h4>
      <div class="stars">
        <samp>2.4.2026</samp>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
</div>

      <p>Author magnus proin vitae laoreet ultrices diam. Sed duis mattis cras lacus donec.</p>
    </div>
  </div>

  <div class="feedback-card">
    <img src="https://i.pravatar.cc/80?img=32" alt="user">
    <div class="content">
      <h4>Robert Karmazov</h4>
      <div class="stars">
          <samp>2.4.2026</samp>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
</div>

      <p>Author magnus proin vitae laoreet ultrices diam. Sed duis mattis cras lacus donec.</p>
    </div>
  </div>
  <div class="feedback-card">
    <img src="https://i.pravatar.cc/80?img=12" alt="user">
    <div class="content">
      <h4>Robert Karmazov</h4>
      <div class="stars">
        <samp>2.4.2026</samp>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
</div>

      <p>Author magnus proin vitae laoreet ultrices diam. Sed duis mattis cras lacus donec.</p>
    </div>
  </div>

  <div class="feedback-card">
    <img src="https://i.pravatar.cc/80?img=32" alt="user">
    <div class="content">
      <h4>Robert Karmazov</h4>
      <div class="stars">
        <samp>2.4.2026</samp>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
</div>

  <p>Author magnus proin vitae laoreet ultrices diam. Sed duis mattis cras lacus donec.</p>
    </div>
  </div>

</section>

<?php get_footer(); ?>