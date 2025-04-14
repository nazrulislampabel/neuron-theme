
<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
<footer>
    <?php
    $footer = get_option('neuron_option');
    $logo = $footer['footer_logo']['url'] ?? '';
    $content = $footer['footer_content'] ?? '';
    $cards = $footer['footer_card'] ?? '';
    $copyright = $footer['footer_copyright'] ?? '';
    ?>
	<div class="primary-footer">
		<div class="container">
			<div class="row">
				<!-- start single footer widget -->
				<div class="col-sm-6 col-md-4">
					<div class="footer-widget about-us">

                        <a href="<?php echo home_url()?>"><img src="<?php echo esc_url($logo); ?>" alt="" /></a>
<p>
    <?php echo esc_html($footer['footer_content'])?>
</p>						<div class="online-card">
                            <?php
                            if (!empty($cards)):?>
                            <?php foreach ($cards as $card):?>
                                <a href="<?php echo esc_url($card['url']); ?>"><img src="<?php echo esc_url($card['image']); ?>" alt="" /></a>
                            <?php endforeach; ?>
                            <?php endif; ?>
						</div>
					</div>
				</div><!-- end single footer widget -->

				<!-- start single footer widget -->
				<div class="col-sm-6 col-md-2">
					<div class="footer-widget usefull-link">
						<h3>Useful Links</h3>
						<ul>
                            <?php wp_nav_menu( array(
                                'location'        => 'footer-link',
                                'menu_id'         => 'footer-link',
                                'walker'         => new Footer_Link_Walker()
                            ) );
                            ?>
                        </ul>
					</div>
				</div><!-- end single footer widget -->

				<!-- start single footer widget -->
				<div class="col-sm-6 col-md-3">
					<div class="footer-widget latest-post">
						<h3>Latest Post</h3>
                        <ul>
                        <?php
                        $neuron_latest_post = new WP_Query(array(
                            'posts_per_page'=>'3',
                        ));
                        while ($neuron_latest_post->have_posts()){
                            $neuron_latest_post->the_post();
                        ?>
                            <li>
                                <?php the_post_thumbnail('neuron-small'); ?>
                                <p><a href="<?php the_permalink(); ?>"><?php the_title()?></a></p>
                                <span><?php echo get_the_date() ?></span>
                            </li>
                            <?php
                            wp_reset_postdata();
                        }?>
                        </ul>
					</div>
				</div><!-- end single footer widget -->

				<!-- start single footer widget -->
				<div class="col-sm-6 col-md-3">
                    <?php
                    $newsletter = get_option('newsletter_footer_options');
                    $title       = $newsletter['newsletter_title'] ?? 'NewsLetter Subscription';
                    $subtitle    = $newsletter['newsletter_subtitle'] ?? 'Subscribe to get the latest news, update and offer information. Don\'t worry, we won\'t send spam!';
                    $placeholder = $newsletter['newsletter_placeholder'] ?? 'Your Email Please!';
                    ?>

                    <div class="footer-widget news-letter">
                        <h3><?php echo esc_html($title); ?></h3>
                        <p><?php echo esc_html($subtitle); ?></p>

                        <form class="subscribe-form mailchimp" method="post">
                            <div class="clearfix">
                                <div class="input-wrapper">
                                    <label class="sr-only" for="subscribeEmail">Email</label>
                                    <input id="subscribeEmail" type="email" name="subscribeEmail" class="validate form-control" placeholder="<?php echo esc_attr($placeholder); ?>">
                                    <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                            <!-- to showing success messages -->
                            <p class="subscription-success"></p>
                        </form>
                    </div>

                    <!-- /.news-letter -->
				</div><!-- end single footer widget -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.primary-footer -->

	<!-- footer copyright area -->
	<div class="copyright-wrapper text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p><?php echo esc_html($footer['footer_copyright'])?></p>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- ./end copyright-wrapper -->
</footer>

<!--<!-- preloader -->-->
<!--<div id="loading">-->
<!--    <div id="loading-center">-->
<!--        <div id="loading-center-absolute">-->
<!--            <div class="object" id="object_four"></div>-->
<!--            <div class="object" id="object_three"></div>-->
<!--            <div class="object" id="object_two"></div>-->
<!--            <div class="object" id="object_one"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php wp_footer(); ?>
</html>