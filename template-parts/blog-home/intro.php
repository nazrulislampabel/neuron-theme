<?php
/**
 * Template Name: Pricing Table
 */

$intros = get_post_meta( get_the_ID(), 'home_intro_box', true );
?>
<!-- ::::::::::::::::::::: start intro intro:::::::::::::::::::::::::: -->
<intro class="intro-padding darker-bg">
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
        <?php
        $sections = get_post_meta( get_the_ID(), 'page_sections', true );

        if ( ! empty( $sections ) ) {
            foreach ( $sections as $section ) {
                echo '<div class="custom-page-section">';

                if ( ! empty( $section['section_image'] ) ) {
                    echo '<img src="' . esc_url( $section['section_image'] ) . '" alt="">';
                }

                if ( ! empty( $section['section_title'] ) ) {
                    echo '<h2>' . esc_html( $section['section_title'] ) . '</h2>';
                }

                if ( ! empty( $section['section_content'] ) ) {
                    echo '<p>' . esc_html( $section['section_content'] ) . '</p>';
                }

                echo '</div>';
            }
        }
        ?>
    </div>
</intro><!-- intro area end -->

