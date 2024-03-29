<?php
/**
 * This is the page-events-us.php file
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
        <div class="event-details-upper-container">
            <div class="">
                <h2>EVENT</h2>
            </div>
                <div class="event-details-small-details"> <!--event time,date,place,price-->
                    <div class="event-details-time-and-date"> <!--time and date-->
                        <div class="">
                            <p>11:00 AM</p>
                        </div>
                        <div class="">
                            <p>Wed, Feb 22, 2023</p>
                        </div>
                    </div> <!--time and date end-->
                    <div class="event-details-place-and-price"> <!--place and price-->
                        <div class="">
                            <p>SUB, University of Alberta</p>
                        </div>
                        <div class="">
                            <p>$10</p>
                        </div>
                    </div> <!--place and price end-->
                </div> <!--event time,date,place,price end-->
                <div class="">
                    <div class="event-details-title">
                        <h3>9 on 9 Tournament - Chinese New Years</h3>
                    </div>
                    <div class="event-details-text-content">
                        <p>Before we announce the winner of this year's 9on9 Tournament we would like for you to read a bit of history of how this games started. Like many great games, this all started from a couple of bored children wanting to play something different and fun. Curiosity started this game and this turned into creativity, then to an actual product. (Sorry if this information is incorrect, it would be nice to learn a more in-depth version of how this all started)</p>
                    </div>
                </div>
            <div class="event-details-main-image"> <!--main image-->
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/events-details-page/event-details-main-image.jpg' ); ?>" alt="an image of two people playing 9on9 in front of a cabin" class="event-details-main-image-file">
            </div>
                <div class="event-details-text-content">
                    <p>Happy Chinese New Year! We welcome you to the 9 on 9 Tournament - Chinese New Year Edition. Hope you can all attend and have fun. All ages welcome!</p>
                </div>
                <div class="">
                    <p>In the end, after several hard-fought games, one team emerged as the victor. The players were thrilled with their win, but all
                        involved agreed that the tournament was a great success regardless of the outcome. It was a great opportunity for students to come
                        together, show off their skills, and have fun while doing it. The 9on9 tournament at SUB, University of Alberta was an unforgettable
                        event that will undoubtedly be talked about for years to come.</p>
                </div>
                <div class="">
                    <p>In the end, after several hard-fought games, one team emerged as the victor. The players were thrilled with their win, but all
                        involved agreed that the tournament was a great success regardless of the outcome. It was a great opportunity for students to come
                        together, show off their skills, and have fun while doing it. The 9on9 tournament at SUB, University of Alberta was an unforgettable
                        event that will undoubtedly be talked about for years to come.</p>
                </div>
            </div>
        </div>

        <div class=""> <!--Previous and Next Updates button-->
            <div class="">
                <svg></svg>
                <p>Previous Updates</p>
            </div>
            <div class="">
                <svg></svg>
                <p>Next Updates</p>
            </div>
        </div><!--end of Previous and Next Updates button-->

        <div class="event-details-lower-background"> <!--upcoming events section-->
            <div class="event-details-lower-container">
                <div class="">
                    <h3>Upcoming Events</h3>
                </div>
                <div class=""> <!--events content container-->
                    <div class=""> <!--left event content container-->
                        <div class="">
                            <img src="" alt="">
                        </div>
                        <div class=""> <!--text side of the left event container-->
                            <div class="">
                                <div class="">
                                    <h2>Event</h2>
                                </div>
                                <div class="">
                                    <h3>9 on 9 Tournament - Chinese New Years</h3>
                                </div>
                            </div>
                            <div class="">
                                <p>Wed, Feb 01, 2023</p>
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
                                    <h3>9 on 9 Tournament - University Edition</h3>
                                </div>
                            </div>
                            <div class="">
                                <p>Wed, Feb 22, 2023</p>
                            </div>
                            <div class="">
                                <p>See Event Details</p>
                                <svg></svg><!--arrow-->
                            </div>
                        </div>
                    </div>
                </div> <!--end of events content container-->
            </div>
        </div> <!--end of upcoming events section-->
     
    
    </section>

<?php
get_footer();
