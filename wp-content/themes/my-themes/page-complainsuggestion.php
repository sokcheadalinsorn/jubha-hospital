<?php get_header(); ?>

<div class="container_overview_hero_section">
    <div class="container_hero_img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/img_hero_section.jpeg" alt="img_hero_overview"> 

        <div class="color_on_img"></div>

        <div class="where_we_are_in">
            <h1 class="title_wre_are_in">Complain & Suggestion</h1>  <br>

            <div class="position_we_in">
                <span><i class="fa-regular fa-house"></i></span>/ <br>
                <p>Home</p>/
                <p>Contact</p>/
                <p>Complain & Suggestion</p>
            </div>
        
        </div>
    </div>
</div>

<div class="tilttle_get_in_touch">
    <article class="letter">
        <h2>Get in Touch with Us</h2> <br>
        <p>At Jubha Hospitals we value our clients’ opinions and feedback. We are constantly looking for ways to improve our services and support your needs.</p>
    </article>    
</div>

<div class="container_complain">
    <div class="container_complain_form">
        <p>For any suggestions, or complaints, please fill out the form below.</p>
        <section class="form_complain">
            <div class="type_request">
                <select name="cars" id="cars">
                    <option value="Type of request ">Type of request</option>
                    <option value="complain">Complain</option>
                    <option value="suggestion">Suggestion</option>
                </select>

                <input type="text" placeholder="Subject"><br>
            </div> <br>

            <div class="name_email">
                <input type="text" placeholder="Name"><br>
                <input type="text" placeholder="Email Address">
            </div> <br>

            <div class="phone_nume_location">
                <input type="text" placeholder="Phone Number">
                <select name="cars" id="cars">
                    <option value="location">Location</option>
                    <option value="complain">Phnom Penh</option>
                    <option value="suggestion">Char Ompov</option>
                    <option value="suggestion">Steng Mena Chey</option>
                </select>
            </div> <br>

            <input type="text" placeholder="Describtion"><br> <br>
            <button class="submit">Submit</button>

        </section>
    </div>

</div>
    
    


<?php get_footer(); ?>