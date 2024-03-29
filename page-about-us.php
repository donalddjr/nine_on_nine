<?php
/**
 * This is the page-about-us.php file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nine_on_nine
 * 
 * 
 * 
 */

get_header();
?>

<body>
    <section class="about-us-container">
        <!--breadcrumbs here-->
        <div class="container breadcrumbs">
        <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">
            <a href="" class="">About Us</a>
        </div>
        <div class="about-us-upper-section">
            <div class="pandemic-change-world-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/about-us/jalfam-team-cropped.png' ); ?>" alt="an image of sign that say the world is temporarily closed" class="pandemic-change-world-image-file"/></div>
        
        <!--start of jalfam-text-->
        <div class="jalfam-text">
            <div>
                <h2>About JALFAM Games Inc.</h2>
            </div>
            
            
            <div class="about-us-paragraph">
            <p> At JALFAM we wanted to create something that could bring joy, movement, and a sense of community to people s lives. Thats why we developed 9ON9, 
            a game that promotes fun, activity, and skill-building.</p>
            
            <p>Our goal at JALFAM Games Inc. is to create games that not only provide entertainment but also promote healthy 
            lifestyles and social connection. We invite you to join us in the world of 9ON9 and experience the joy of movement, 
            skill-building, and friendly competition.</p>      
            </div>

            <div>
                <h3>Meet the Team</h3>
            </div>
            <div class="meet-the-team-image">
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/about-us/john.jpg' ); ?>" alt="an image showing the people behind JALFAM - John" class="meet-the-team-image-file">
                    <figcaption>John</figcaption>
                </div>
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/about-us/annette.jpg' ); ?>" alt="an image showing the people behind JALFAM - Annette" class="meet-the-team-image-file">
                    <figcaption>Annette</figcaption>
                </div>
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/about-us/leann.jpg' ); ?>" alt="an image showing the people behind JALFAM - Leann" class="meet-the-team-image-file">
                <figcaption>Leann</figcaption>
                </div>
            </div>
            
    
        
        </div> <!--end of jalfam text-->
        
        
        </div><!--end of top section-->
        
        <div class="inner-container event-details-lower-container">
            <div class="current-events"><h3>Check out our Events</h3></div>
            <div class="event-details-lower-inner-container">
                <?php
                $args = array(
                    'post_type'      => 'upcoming-events',
                    'posts_per_page' => 2,
                    
                    
                );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    get_template_part ('template-parts/content', 'previous-events');
                }
                ?>
            </div>
        </div>
        
    
</section>
</body>
<?php get_footer(); ?>

