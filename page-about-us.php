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


    <section>
        <!--breadcrumbs here-->
        <div class="pandemic-change-world-image">
            <div><img src="<?php echo esc_url( get_template_directory_uri() .'/assets/img/about-us/worldisclose.jpg' ); ?>" alt="an image of sign that say the world is temporarily closed" class="pandemic-change-world-image-file"/></div>
        
        <!--start of jalfam-text-->
        <div class="jalfam-text">
            <div>
                <h4>About JALFAM Games Inc.</h4>
            </div>
            <div>
                <h1>The pandemic changed the world.</h1>
            </div>
            
            
            <div>
            <p>At JALFAM Games Inc., we recognized that Covid-19 had a significant impact on peoples mental and physical wellbeing. 
            We wanted to create something that could bring joy, movement, and a sense of community to people s lives. Thats why we developed 9on9, 
            a game that promotes fun, activity, and skill-building.</p>
    
            <p>9on9 is a versatile game that can be played both indoors and outdoors, making it accessible to everyone. It involves two teams, 
            each consisting of one to four players, who compete against each other to be the first team to reach exactly 99 points by tossing bean pucks 
            onto a playing board. With its simple rules and fast-paced gameplay, 9on9 is a game that is easy to learn and suitable for all ages.</p>
            
            <p>Our goal at JALFAM Games Inc. is to create games that not only provide entertainment but also promote healthy 
            lifestyles and social connection. We believe that through our games, we can contribute to the well-being of our players and 
            help them overcome the challenges of these trying times. We invite you to join us in the world of 9on9 and experience the joy of movement, 
            skill-building, and friendly competition.</p>      
            </div>

            <div>
                <h2>Meet the Team</h2>
            </div>
            <div class="meet-the-team-image">
                <img src="<?php echo esc_url( get_template_directory_uri() .'/assets/img/about-us/jalfamteam.jpg' ); ?>" alt="an image showing the people behind JALFAM" class="meet-the-team-image-file"/>
                <figcaption>JALFAM</figcaption>
            </div>
            
    
        
        </div> <!--end of jalfam text-->
        
        
        </div><!--end of top section-->
        
        <div class="about-us-lower-section"> <!--check out our events section-->
            <div class="check-out-events-container"> 
                <div class="check-out-events-title">
                    <h3>Check out our Events</h3>
                </div>
                <div class="check-out-events-content"> <!--events content container-->
                    <div class="seniors-tournament-container"> <!--left event content container-->
                        <div class="seniors-tournament-image">
                            <img src="" alt="an image of a man getting showered with water that is coming from a bucket for a fundraiser" class="seniors-tournament-image-file">
                        </div>
                        <div class="seniors-tournament-text"> <!--text side of the left event container-->
                            <div class="">
                                <div class="">
                                    <h2>Event</h2>
                                </div>
                                <div class="">
                                    <h3>9 on 9 Tournament - Seniors Edition</h3>
                                </div>
                            </div>
                            <div class="">
                                <p>Mon, Jan 30, 2023</p>
                            </div>
                            <div class="">
                                <p>See Event Details</p>
                                <svg></svg><!--arrow-->
                            </div>
                        </div>
                    </div>
                    <div class=""> <!--right event content container-->
                        <div class="">
                            <img src="" alt="">
                        </div>
                        <div class=""> <!--text side of the right event container-->
                            <div class="">
                                <div class="">
                                    <h2>Event</h2>
                                </div>
                                <div class="">
                                    <h3>9 on 9 Tournament - Fundraiser</h3>
                                </div>
                            </div>
                            <div class="">
                                <p>Mon, Jan 30, 2023</p>
                            </div>
                            <div class="">
                                <p>See Event Details</p>
                                <svg></svg><!--arrow-->
                            </div>
                        </div>
                    </div>
                </div> <!--end of events content container-->
            </div>
        </div> <!--end of check out our events section-->
        
    
    </section>

<?php get_footer(); ?>

