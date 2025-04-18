<?php get_header();?>
<?php
/**
 * Template Name: Blog Page
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
    <!-- ::::::::::::::::::::: Blog Section:::::::::::::::::::::::::: -->
    <section class="blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <!-- blog title -->
                    <div class="template-title text-center">
                        <h2>News Blog</h2>
                        <p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php while ( $neuron_posts->have_posts()){
                    $neuron_posts->the_post();
                    ?>
                    <!-- single blog item -->
                    <div class="col-sm-6 col-md-4">
                        <div class="blog-item">
                            <!-- blog thumbnail -->
                            <div class="blog-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/blog/1.jpg" alt="" />
                            </div>
                            <div class="blog-content">
                                <!-- blog title -->
                                <header class="blog-header">
                                    <div class="tag">
                                        <ul>
                                            <?php
                                            $post_tags = get_the_tags();
                                            if ($post_tags):
                                                ?>
                                                    <?php foreach ($post_tags as $post_tag):?>
                                                <li><a href="<?php echo esc_url(get_term_link($post_tag->term_id))?>"><?php echo esc_html( $post_tag->name )?></a></li>
                                            <?php
                                            endforeach;
                                            else :
                                                // 👉 ট্যাগ না থাকলে ডিফল্ট একটা ট্যাগ দেখাও
                                                ?>
                                                <li><a href="#">Uncategorized</a></li>
                                            <?php endif; ?>
                                        </ul>

                                    </div>
                                    <div class="blog-title">
                                        <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h2>
                                    </div>
                                </header>

                                <!-- blog content -->
                                <div class="entry-content">
                                    <?php echo get_the_excerpt();?>
                                    <a href="<?php the_permalink();?>"><?php echo __("Read More",'neuron')?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                } wp_reset_query(); ?>

            </div>
        </div>
    </section><!-- end blog section -->


<?php get_footer();?>