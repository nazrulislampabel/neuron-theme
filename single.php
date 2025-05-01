<?php
the_post();
get_header();?>
<?php

/**
 * Template Name: Single Page
 */
get_template_part("template-parts/common/page_title");
?>
    <!-- ::::::::::::::::::::: single-blog section:::::::::::::::::::::::::: -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- post wrapper -->
                    <div class="post-wrapper clearfix">
                        <!-- post thumbnail -->
                        <div class="single-thumb">
                            <a href="">
                               <?php  the_post_thumbnail('neuron-large')?>
                            </a>
                        </div>

                        <!-- start single blog content -->
                        <div class="blog-content">
                            <!-- start single blog header -->
                            <header class="single-header">
                                <div class="single-post-title">
                                    <h2><a href="#">Hypnosis Money And 3 Major Motives Of Our Lives</a></h2>
                                </div>
                                <!-- post meta -->
                                <div class="post-meta">
                                    <ul>
                                        <li>
                                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">
                                                <i class="fa fa-user"></i>
                                                <?php echo get_the_author() ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-tag"></i>
                                                <?php the_tags(); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-calendar"></i>
                                                <?php the_date() ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i>
                                                <?php comments_number(); ?>
                                            </a>
                                        </li>
                                        <li class="rating">
                                            <a href="#">
                                                Rating
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </header><!-- /.end single blog header -->

                            <!-- start single blog entry content -->
                            <div class="entry-content">
                                <?php
                                the_content();
                                ?>
                            </div><!-- /.end single blog entry content -->

                            <!-- start social link -->
                            <div class="social-link">
                                <ul>
                                    <li><a class="facebook" href="#">
                                            <i class="fa fa-facebook"></i>
                                            <span>1.6k</span>
                                        </a></li>
                                    <li><a class="twitter" href="#">
                                            <i class="fa fa-twitter"></i>
                                            <span>1.6k</span>
                                        </a></li>
                                    <li><a class="google" href="#">
                                            <i class="fa fa-google-plus"></i>
                                            <span>1.6k</span>
                                        </a></li>
                                    <li><a class="linkedin" href="#">
                                            <i class="fa fa-linkedin"></i>
                                            <span>1.6k</span>
                                        </a></li>
                                    <li><a class="pinterest" href="#">
                                            <i class="fa fa-pinterest-p"></i>
                                            <span>400</span>
                                        </a></li>
                                    <li><a class="reddit" href="#">
                                            <i class="fa fa-reddit-alien"></i>
                                            <span>400</span>
                                        </a></li>
                                    <li><a class="message" href="#">
                                            <i class="fa fa-envelope"></i>
                                            <span>400</span>
                                        </a></li>
                                </ul>
                            </div><!-- /.end social link -->



                        </div><!-- /.end single blog content -->

                        <!-- start comments wrapper -->
                        <?php
                        if (!post_password_required()){
                            comments_template();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./end single-blog section -->

<?php get_footer();?>