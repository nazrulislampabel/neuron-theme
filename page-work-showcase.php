<?php
/*
Template Name: Work Showcase
*/
get_header();

$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1,
);
$query = new WP_Query($args);
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
<section class="section-padding">
    <div class="container">
        <div class="row">
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="col-sm-6 col-md-4">
                    <div class="portfolio-item">
                        <!-- Display the Thumbnail Image -->
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                        <?php else: ?>
                            <img src="path_to_default_image.jpg" alt="Default Image" />
                        <?php endif; ?>
                        <div class="portfolio-details">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <a href="#"><?php echo esc_html(get_post_meta(get_the_ID(), 'portfolio_author', true)); ?></a>
                            <br>
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
