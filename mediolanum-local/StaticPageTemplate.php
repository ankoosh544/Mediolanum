<?php /* Template Name: StatiPageTemplate */ ?>

<?php get_header(); ?>


    <div class="col-full-boxed ml-5 mr-5 mtvar">
        <div class="row">
            <div class="col-md-12 container-titolo-sezione-pagina">
                <div class="titolo-sezione-pagina-linea"></div>
                <div class="titolo-sezione-pagina">
                    <?php the_title(); ?>
                </div>
            </div>
        </div>
    </div>


    <div class="col-full-boxed scheda-privacy-policy">
        <div class="row">
            <div class="col-md-12 scheda-privacy-policy-container-single-page">
                <div class="scheda-privacy-policy-intro">
                </div>
                <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                    <div class="scheda-privacy-type-single-page">
                        <?php the_content(); ?> <!-- Page Content -->
                    </div><!-- .entry-content-page -->

                <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
            </div>
        </div>
    </div>



<?php
// echo get_option( 'admin_email' ) . PHP_EOL;
// echo the_permalink();
get_template_part('templates/_instagram');
get_footer();

