<?php get_header(); ?>

<div class="container_overview_hero_section">
    <div class="container_hero_img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/img_hero_section.jpeg" alt="img_hero_overview"> 

        <div class="color_on_img"></div>

        <div class="where_we_are_in">
            <h1 class="title_wre_are_in">Find Doctors</h1>  <br>

            <div class="position_we_in">
                <span><i class="fa-regular fa-house"></i></span>/ <br>
                <p>Home</p>/
                <p>Find Doctors</p>
            </div>
        
        </div>
    </div>
</div>

<div class="container_searching">
   <div class="search_container">
            <form action="" method="get" class="search_bar">
                <span class="search_icon"><i class="fas fa-search"></i></span>
                <input type="text" placeholder="Search for a doctors" name="" class="search_input">
            </form>

            <div class="specialization_each_doctors">
                <button class="button button1">ALL DOCTORS</button>
                <button class="button button1">Laboraty Testing</button>
                <button class="button button1">Heart</button>
                <button class="button button1">Bone & Muscle</button>
                <button class="button button1">Mental Health</button>
                <button class="button button1">Women’s Health</button>
                <button class="button button1">Men’s Health</button>
                <button class="button button1">Digestive / Gastrointestinal</button>
            </div> 
    </div> 
    
</div>



    <div class="doctors-grid">
        <?php
        $args = array(
            'post_type' => 'doctor',
            'posts_per_page' => -1
        );

        $doctors = new WP_Query($args);

        if ($doctors->have_posts()):
            while ($doctors->have_posts()): $doctors->the_post();
        ?>
            <div class="doctor-card">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>

                <h3><?php the_title(); ?></h3>
                <div class="doctor-desc">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No doctors found.</p>';
        endif;
        ?>
    </div>


    
     <div class="doctors-grid">
        <?php
        $args = array(
            'post_type' => 'doctor',
            'posts_per_page' => -1
        );

        $doctors = new WP_Query($args);

        if ($doctors->have_posts()):
            while ($doctors->have_posts()): $doctors->the_post();
        ?>
            <div class="doctor-card">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>

                <h3><?php the_title(); ?></h3>
                <div class="doctor-desc">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No doctors found.</p>';
        endif;
        ?>
    </div>


</div>






<?php get_footer(); ?>