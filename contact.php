<?php get_header();?>
<?php
/**
 * Template Name: Contact Page
 */
$neuron_posts = new WP_Query(array(
    'post_per_page' => "6",
    'ignore_sticky_posts' => 1,
    'orderby' => "date",
));

?>
    <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb content -->
                    <div class="page-breadcrumbd">
                        <h2><?php
                            add_filter( 'bcn_breadcrumb_title', 'replace_site_title_with_home', 10, 3 );
                            function replace_site_title_with_home( $title, $type, $id ) {
                                if ( in_array( 'home', (array) $type ) ) {
                                    return 'Home';
                                }
                                return $title;
                            }
                            echo the_title()?></h2>
                        <?php if ( function_exists('bcn_display') ) : ?>
                            <?php bcn_display(); ?>
                        <?php endif; ?>

                    </div><!-- end breadcrumb content -->
                </div>
            </div>
        </div>
    </section><!-- end breadcrumb -->
    <!-- ::::::::::::::::::::: start contant section :::::::::::::::::::::::::: -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <!-- contact title -->
                    <div class="template-title text-center">
                        <h2>Get In Touch With Us</h2>
                        <p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <?php
                    if (get_field("contact_form_shortcode")){
                        echo do_shortcode(get_field('contact_form_shortcode'));
                    }
                    ?>
                </div>

                <div class="col-md-4">
                    <!-- company address -->
                    <div class="company-address">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>305 Royal Track Suite 019. New York United States of America.</p>
                                <span class="divider"></span>
                                <p>Hoffman Parkway, P.O Box 154 Mountain View.  United States of America.</p>

                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Fax: 545 751 385
                                    <br>Phone: 0123 456 789</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <a>info@trendytheme.com</a>
                                <a>www.trendytheme.com</a>
                            </li>
                        </ul>
                    </div><!-- ./end company address -->
                </div>
            </div>
        </div>
    </section>



<?php get_footer();?>