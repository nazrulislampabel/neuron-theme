<?php get_header();?>
<?php
/**
 * Template Name: About Us Page
 */

?>
<?php
get_template_part("template-parts/common/page_title");
get_template_part("template-parts/blog-home/block");
get_template_part("template-parts/blog-home/intro");
?>
    <!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
    <section class="accordian-section section-padding">
        <div class="container">
            <div class="row">
                <?php $options = get_option( 'theme_options' );?>
                <div class="col-md-6">
                    <?php
                    $accordions = get_post_meta(get_the_ID(), 'accordion_box', true);
                    ?>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php
                        if (!empty($accordions)):
                            $i = 0;
                            foreach ($accordions as $accordion):
                                $heading_id = 'heading' . $i;
                                $collapse_id = 'collapse' . $i;
                                $expanded = $i === 0 ? 'true' : 'false';
                                $collapse_class = $i === 0 ? 'in' : ''; // First one open
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="<?php echo $heading_id; ?>">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapse_id; ?>" aria-expanded="<?php echo $expanded; ?>" aria-controls="<?php echo $collapse_id; ?>">
                                                <?php echo esc_html($accordion['accordion_title']); ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="<?php echo $collapse_id; ?>" class="panel-collapse collapse <?php echo $collapse_class; ?>" role="tabpanel" aria-labelledby="<?php echo $heading_id; ?>">
                                        <div class="panel-body">
                                            <?php echo esc_html($accordion['accordion_content']); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            endforeach;
                        endif;
                        ?>
                    </div>

                </div>
                <div class="col-md-6">
                    <!-- accordian right text block -->
                    <div class="accordian-right-content">
                        <?php
                        $heading     = get_post_meta( get_the_ID(), 'accordion_heading', true );
                        $subheading  = get_post_meta( get_the_ID(), 'accordion_sub_heading', true );
                        ?>
                        <?php
                        // চেক করে প্রিন্ট করবো
                        if ( ! empty( $heading ) ) {
                            echo '<h2 class="accordion-heading">' . esc_html( $heading ) . '</h2>';
                        }

                        if ( ! empty( $subheading ) ) {
                            echo '<p class="accordion-subheading">' . esc_html( $subheading ) . '</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end accordian section -->
<?php
get_template_part("template-parts/blog-home/brand");
?>
<?php get_footer();?>