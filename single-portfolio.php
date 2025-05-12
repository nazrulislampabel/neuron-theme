<?php get_header();
$categories = get_the_category();

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
<section class="single-portfolio-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="col-md-4">
                <div class="single-portfolio-inner">
                    <header class="single-portfolio-title">
                        <a><?php echo esc_html(get_post_meta(get_the_ID(),'web_type',true))?></a>
                        <h2><?php the_title(); ?></h2>
                    </header>
                    <div class="portfolio-details-panel">
                        <?php the_content('','',''); ?>
                        <ul class="portfolio-meta">
                            <li><span> <?php echo __('Client','neuron')?> </span> <?php echo esc_html(get_post_meta(get_the_ID(),'portfolio_author',true))?></li>
                            <li><span> <?php echo __('Created by','neuron')?></span> <?php echo esc_html(get_post_meta(get_the_ID(), 'client_name', true)); ?></li>
                            <li><span> <?php echo __('Completed on','neuron')?> </span> <?php echo esc_html(get_post_meta(get_the_ID(), 'completed_date', true)); ?></li>
                            <li><span> <?php echo __('Skills'); ?> </span> <?php echo esc_html(get_post_meta(get_the_ID(),'skills',true))?></li>
                        </ul>
                    </div>
                    <a class="btn btn-primary" href="<?php echo esc_url(get_post_meta(get_the_ID(),'web_url',true))?>"> <?php echo __('Visit website','neuron'); ?> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>