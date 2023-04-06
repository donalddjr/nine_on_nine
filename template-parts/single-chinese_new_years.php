<?php
/**
 * This is the front-page.php file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nine_on_nine
 */

get_header();
?>
<?php
$args = array{
    'post_type' => '9_on_9_tournament',
    'posts_per_page' => 1

};
?>

<section class="9-on-9-tournament-chinese-new-years">
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/events-listing-page.jpg/chinese-new-year-image.jpg' ); ?>" alt="an image of the nine-on-nine board" class="chinese-new-years-image-file">
    </div>
    <div class="chinese-new-years-text">
        <div>
            <h2>EVENT</h2>

            <h3>9 on 9 Tournament - Chinese New Years</h3>
            <div class ="chinese-new-years-description">
                <p>Happy Chinese New Year! We welcome you to the 9 on 9 Tournament - Chinese New Year Edition. Hope you can all attend and have fun. All ages welcome!</p>

                <div class="event-details">
                    <div>
                        <div class="time">
                            <p>10:00 AM</p>
                        </div> <!--end of div-->
                        <div class="date">
                            <p>Wed, Feb 01, 2023</p>
                        </div> <!--end of div-->
                    </div>
                    <div>
                        <div class="location">
                            <p>Picnic Site #2, Hawrelak Park</p>
                        </div> <!--end of div-->
                        <div class="event-price">
                            <p>$10</p>
                        </div> <!--end of div-->
                    </div>
                </div><!--end of event-details-page-->
                <div class="link-to-event-detail-page">
                    <a href="#" class="see-event-details">SEE EVENT DETAILS <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/chevron.png'); ?>" alt="Right Arrow" class="icon"></a>
                </div>
            </div> <!--end of chinese-new-years-description-->
            
        </div>
    </div> <!--end of chinese-new-years-text-->
</section>




<?php
get_footer();
?>