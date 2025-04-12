<?php
/**
 * Template Name: Pricing Table
 */

$intros = get_post_meta( get_the_ID(), 'home_intro_box', true );
$options = get_option( 'theme_options' );
?>
<!-- ::::::::::::::::::::: start intro intro:::::::::::::::::::::::::: -->
<section class="section-padding darker-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="intro-title text-center">
                    <h2>Welcome to the Neuron Finance</h2>
                    <div class="hidden-xs">
                        <p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($options['intro_section'])):?>
               <?php foreach ($options['intro_section'] as $intro):
                    ?>
                    <!-- single intro -->
            <div class="col-md-4">
                <div class="single-intro">
                    <div class="intro-img intro-bg1" style="background-image: url(<?php echo esc_url( $intro['image'] ) ?>"></div>
                    <div class="intro-details text-center">
                        <h3><?php echo esc_html($intro['title'])?></h3>
                        <p><?php echo esc_html($intro['content'])?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif;?>
        </div>
    </div>
</section><!-- intro area end -->

