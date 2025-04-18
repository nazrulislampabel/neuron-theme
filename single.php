<?php get_header();?>
<?php

/**
 * Template Name: Single Page
 */
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
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/slider-bg/3.jpg" alt="" />
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
                                            <a href="#">
                                                <i class="fa fa-user"></i>
                                                Ahmed Faruk
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-tag"></i>
                                                Marketing, Sales
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-calendar"></i>
                                                20 Mar 2017
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i>
                                                25 Comments
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
                                <p>In recent years people have realized the importance of proper diet and exercise, and recent surveys show that over the last 20 years people are eating better and working out more often, resulting in people living longer, but people are still lacking in their understanding that their mental well being is just as important as their physical health. Today most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend, 60 hour weeks, taking work home with them and even working weekends. All of this for hopes of one day getting that big promotion. What good will it do you when your brain overloads and you have a breakdown in the office</p>

                                <p>In the end your physical health will suffer no matter how well you eat and how often you exercise. You will wind up with high blood pressure, stress and tension all of which raises the chances of you having a stroke or heart attack. In hopes of helping you avoid this I am providing you with the things I do to keep my mental health in tip top condition.</p>

                                <p>My absolute favorite thing to do to refocus myself is to go for a long ride on my Harley. Nothing brings the world back into focus like riding free like the wind, there is no better forms of therapy as far as I am concerned. Another great way to relieve the stresses in your life and help put a sparkle in your mental health is a trip to the casinos. Most people go to the casinos and expect to go home a winner, I do not. I go to have a good time. I enjoy the skill required in </p>

                                <div class="full-width-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/slider-bg/2.jpg" alt="" />
                                </div>
                                <p>Sometime I just like to sit at a poker table, blackjack table or roulette table and just make small bets. This may not be as exciting as risking large sums of money, but in the end I play longer, and I probably win more often. The best part is because I do not expect to win I am not disappointed when I don’t win, and on those occasions that I do win beside going home with more money I have a supper big smile on my face because the night was all that much better. Another reason why I love the casinos is how far they are from where I live so I can take my bike out in the morning have a good 3 hour drive to Atlantic City then at the end of the day I get to enjoy another 3 hours on my Harley, and if the weather is really bad I can either take my truck or just stay home and log on to one of the many online casinos available to choose from in your life and keep your mental health in as good of co</p>
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
                        <div class="comments-wrapper">
                            <div class="single-post-title comment-title">
                                <h2>write your comment</h2>
                            </div>


                            <form class="contact-form" id="contactForm" name="contact-form" action="sendemail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="sr-only" for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="sr-only" for="subject">Subject</label>
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="message">Message</label>
                                    <textarea name="message" class="form-control" id="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-primary input-btn"><span>Submit</span></button>
                                </div>
                            </form>


                        </div><!-- /.end comments wrapper -->

                        <div class="comments-responsed-wrapper">
                            <div class="single-post-title comment-title">
                                <h2>Commets (5)</h2>
                            </div>
                            <!-- post comments -->
                            <div class="comments-media">
                                <!-- 1st comment -->
                                <ol>
                                    <li>
                                        <div class="comment-inner">
                                            <div class="comment-avatar">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/comments/1.jpg" alt="" />
                                            </div>
                                            <div class="comment-section">
                                                <header>
                                                    <h2>Josef Milton</h2>
                                                    <span> 15 minutes ago </span>
                                                </header>
                                                <div class="comment-content">
                                                    <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                    <a href="#" class="btn-comment-replay">Replay</a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul>
                                            <li>
                                                <div class="comment-inner">
                                                    <div class="comment-avatar">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/comments/2.jpg" alt="" />
                                                    </div>
                                                    <div class="comment-section">
                                                        <header>
                                                            <h2>Jonathon Bin</h2>
                                                            <span> 10 minutes ago </span>
                                                        </header>
                                                        <div class="comment-content">
                                                            <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                            <a href="#" class="btn-comment-replay">Replay</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment-inner">
                                                    <div class="comment-avatar">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/comments/1.jpg" alt="" />
                                                    </div>
                                                    <div class="comment-section">
                                                        <header>
                                                            <h2>Josef Milton</h2>
                                                            <span> 5 minutes ago </span>
                                                        </header>
                                                        <div class="comment-content">
                                                            <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                            <a href="#" class="btn-comment-replay">Replay</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                                <!-- 2nd comment -->
                                <ol>
                                    <li>
                                        <div class="comment-inner">
                                            <div class="comment-avatar">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/comments/3.jpg" alt="" />
                                            </div>
                                            <div class="comment-section">
                                                <header>
                                                    <h2>Tomas Udoya</h2>
                                                    <span> 20 minutes ago </span>
                                                </header>
                                                <div class="comment-content">
                                                    <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                    <a href="#" class="btn-comment-replay">Replay</a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul>
                                            <li>
                                                <div class="comment-inner">
                                                    <div class="comment-avatar">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/comments/2.jpg" alt="" />
                                                    </div>
                                                    <div class="comment-section">
                                                        <header>
                                                            <h2>Josef Milton</h2>
                                                            <span> 15 minutes ago </span>
                                                        </header>
                                                        <div class="comment-content">
                                                            <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                            <a href="#" class="btn-comment-replay">Replay</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./end single-blog section -->

<?php get_footer();?>