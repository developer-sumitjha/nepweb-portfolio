<?php

get_header();
?>

<!-- Hero Section -->
<div class="container hero-section">
    <div class="inner-section">
        <h4>Hi, I am Sumit Jha - Full Stack <span class="primary-color">WordPress</span> Developer</h4>
        <h1>Bringing Your <span class="secondary-color">Digital</span> Dreams to Life with <span class="primary-color">WordPress</span></h1>
        <p>From concept to launch, I develop WordPress sites that are not only functional but also visually engaging.From concept to launch, I develop WordPress sites that are not only functional but also visually engaging.</p>
        <a href="#" class="button">
            <div class="btn-inner">
                <span class="btn-text">View Works</span>
            </div>
        </a>
    </div>
    <div class="inner-section">
        <img src="https://sumitjha.info.np/wp-content/uploads/2024/10/3d-isometric-data-dashboard-with-infographics-and-statistics-1.png" alt="">
    </div>
</div>

<!-- Introduction Section -->
 <!-- <div class="container intro-sec">
    <div class="inner-section">
        <div class="col-2 intro-sub-sec-1">
            <h1 class="intro-title">About Me</h1>
            <div class="intro-stats">
                <div class="experience">
                    <h1>2+</h1>
                    <h3>Years of Experience</h3>
                </div>
                <div class="projects">
                    <h1>15+</h1>
                    <h3>Completed Projects</h3>
                </div>
            </div>
            <div class="intro-social">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
                <i class="fa-brands fa-wordpress"></i>
                <i class="fa-brands fa-github"></i>


            </div>
        </div>
        <div class="col-2 intro-sub-sec-2">
            <p>I'm a dedicated WordPress Full Stack Developer with a passion for 
                building custom websites that are both functional and beautiful. 
                With a deep understanding of the WordPress ecosystem, I bring creativity
                and technical expertise to every project.
            </p>
            <div class="expertise-sec">
                <h3>Expertise</h3>
                <hr>
                <ul>
                    <li>Elementor</li>
                    <li>Woocommerce</li>
                    <li>Responsive Design</li>
                    <li>Custom Themes</li>
                    <li>Custom Plugins</li>
                </ul>
            </div>
            <div class="skills-sec">
                <h3>Skills</h3>
                <hr>
                <ul>
                    <li><i class="fa-brands fa-wordpress-simple"></i></li>
                    <li><i class="fa-brands fa-html5"></i></li>
                    <li><i class="fa-brands fa-css3-alt"></i></li>
                    <li><i class="fa-brands fa-js"></i></li>
                    <li><i class="fa-brands fa-php"></i></li>
                    <li id="jquery">jQuery</li>
                    <li id="mysql">MySQL</li>
                </ul>
            </div>
            
        </div>
    <img src="http://sumitjha.local/wp-content/uploads/2024/09/Sumit-1.png" alt="WordPress Developer" class="profile-img">
    </div>
</div>  -->
<div class="container intro-sec">
        <div class="left-section">
        <div class="social-icons">
                <a href="https://wordpress.org" target="_blank"><img src="https://sumitjha.info.np/wp-content/uploads/2024/10/WordPress.png" alt="WordPress"></a>
                <a href="https://github.com" target="_blank"><img src="https://sumitjha.info.np/wp-content/uploads/2024/10/Github.png" alt="GitHub"></a>
                <a href="https://linkedin.com" target="_blank"><img src="https://sumitjha.info.np/wp-content/uploads/2024/10/LinkedIn.png" alt="LinkedIn"></a>
                <a href="https://instagram.com" target="_blank"><img src="https://sumitjha.info.np/wp-content/uploads/2024/10/Insta.png" alt="Instagram"></a>
            </div>
            <img src="https://sumitjha.info.np/wp-content/uploads/2024/09/Sumit-1.png" alt="Profile Image" class="profile-img">
            
        </div>
        
        <div class="right-section">
            <h2>About Me</h2>
            <p>I'm a dedicated WordPress Full Stack Developer with a passion for building custom websites that are both functional and beautiful. With a deep understanding of the WordPress ecosystem, I bring creativity and technical expertise to every project.</p>
            <div class="strength-expertise">
                <div class="strength">
                    <h3>Strength</h3>
                    <ul>
                        <li>Custom Design</li>
                        <li>Full Stack Development</li>
                        <li>Responsive Design</li>
                        <li>Innovative Solutions</li>
                        <li>Client-Centered Approach</li>
                        <li>Timely Delivery</li>
                    </ul>
                </div>
                <div class="expertise">
                    <h3>Expertise</h3>
                    <ul>
                        <li>Elementor / Elementor Pro</li>
                        <li>WooCommerce</li>
                        <li>Premium Themes / Plugins</li>
                        <li>Custom Themes / Plugins</li>
                        <li>Responsive Design</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

 <!-- Slider -->
  <div class="slider">
    <div class="inner-section">
        <div class="item"><h4>Web Development</h4></div><span class="slider-seperator">*</span>
        <div class="item"><h4>WordPress</h4></div><span class="slider-seperator">*</span>
        <div class="item"><h4>Full Stack Web Development</h4></div><span class="slider-seperator">*</span>
        <div class="item"><h4>Responsive Design</h4></div><span class="slider-seperator">*</span>
        <div class="item"><h4>Ecommerce Website</h4></div><span class="slider-seperator">*</span>
    </div>
  </div>




     <!-- Skills -->
  <div class="container skills-section">
        <h2>Skills</h2>
        <div class="skills-slider">
            <button class="prev"><img src="https://sumitjha.info.np/wp-content/uploads/2024/10/weui_arrow-outlined.png" alt=""></button>
            <div class="slider-container">
                <?php
                // WP Query to fetch 'skill' post type
                $skills_query = new WP_Query(array(
                    'post_type' => 'skill',
                    'posts_per_page' => -1 // Adjust this number if needed
                ));

                // Check if there are any posts to display
                if ($skills_query->have_posts()) :
                    while ($skills_query->have_posts()) : $skills_query->the_post();
                        // Get the skill image and title
                        $skill_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $skill_title = get_the_title();
                ?>
                    <div class="slide">
                        <img src="<?php echo esc_url($skill_image); ?>" alt="<?php echo esc_attr($skill_title); ?>">
                        <p><?php echo esc_html($skill_title); ?></p>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); // Reset the query
                else :
                    echo '<p>No skills found.</p>';
                endif;
                ?>
            </div>
            <button class="next"><img src="https://sumitjha.info.np/wp-content/uploads/2024/10/weui_arrow-outlined-1.png" alt=""></button>
        </div>
    </div>



         <!-- Portfolios -->
  <div class="container portfolio-section">
        <h2>Portfolio</h2>
        <div class="portfolios-grid">
            
            <div class="portfolio-container">
                <?php
                // WP Query to fetch 'skill' post type
                $skills_query = new WP_Query(array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 6 // Adjust this number if needed
                ));

                // Check if there are any posts to display
                if ($skills_query->have_posts()) :
                    while ($skills_query->have_posts()) : $skills_query->the_post();
                        // Get the skill image and title
                        $portfolio_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $portfolio_title = get_the_title();
                        $portfolio_content = get_the_content();
                        $portfolio_link = get_post_meta( get_the_ID(), '_portfolio_link', true );
                        
                ?>
                    <div class="portfolio">
                        <img src="<?php echo esc_url($portfolio_image); ?>" alt="<?php echo esc_attr($portfolio_title); ?>">
                        <div class="portfolio-overlay"></div>
                        <div class="portfolio-content">
                            <h3><?php echo esc_html($portfolio_title); ?></h3>
                            <p><?php echo esc_html($portfolio_content); ?></p>
                            <a href="<?php echo esc_url( $portfolio_link ); ?>">View Site<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.1672 4.50002L11.4179 4.24927L11.668 4.50002L11.4179 4.75077L11.1672 4.50002ZM0.54218 4.85418C0.44825 4.85418 0.358165 4.81687 0.291746 4.75045C0.225327 4.68403 0.188013 4.59395 0.188013 4.50002C0.188013 4.40609 0.225327 4.316 0.291746 4.24958C0.358165 4.18316 0.44825 4.14585 0.54218 4.14585V4.85418ZM7.16793 -0.000732422L11.4179 4.24927L10.9164 4.75077L6.66643 0.500768L7.16793 -0.000732422ZM11.4179 4.75077L7.16793 9.00077L6.66643 8.49927L10.9164 4.24927L11.4179 4.75077ZM11.1672 4.85418H0.54218V4.14585H11.1672V4.85418Z" fill="white"/>
</svg>

</a>
                        
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); // Reset the query
                else :
                    echo '<p>No portfolios found.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>


    <!-- Contact Form -->
     <div class="container contact-form">
     <!-- <h2>Get in Touch</h2> -->
     <div class="inner-section">
                <div class="left-section">
                    <span class="subtitle">Get in Touch</span>
                    <h2>Let's make your brand brilliant!</h2>
                    <p>If you would like to work with us or just want to get in touch, we’d love to hear from you!</p>
                    <span class="tel">+977-9819209240</span>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>LinkedIn</li>
                        <li>Github</li>
                    </ul>
                </div>
                <div class="right-section">
                <?php
                    echo do_shortcode( '[contact-form-7 id="d262f59" title="Contact form 1"]' );
                ?>
                </div>
    </div>   
     </div>

     <?php

get_footer();
?>