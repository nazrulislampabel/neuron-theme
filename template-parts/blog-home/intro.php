<?php
/**
 * Template Name: Pricing Table
 */
?>
<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
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
            <!-- single intro -->
            <div class="col-md-4">
                <div class="single-intro">
                    <div class="intro-img intro-bg1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/intro/1.jpg)"></div>
                    <div class="intro-details text-center">
                        <h3>About Business</h3>
                        <p>Seamlessly envisioneer extensive interfaces and back wardcompatible applications. Proactively promote timely best.</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php
            $repeater_data = get_option( 'neuron_option' )['my_repeater_field'] ??[];
            echo '<pre>',print_r($repeater_data), '</pre>';
            if ( ! empty( $repeater_data ) ) {
                foreach ( $repeater_data as $item ) {
                    echo 'Name: ' . esc_html( $item['repeater_name'] ) . '<br>';
                    echo 'URL: ' . esc_url( $item['repeater_url'] ) . '<br>';
                }
            }
            ?>
        </div>
    </div>
</section><!-- intro area end -->

