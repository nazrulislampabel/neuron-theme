<?php get_header();?>
<?php
/**
 * Template Name: Service Page
 */

?>
<?php
get_template_part("template-parts/common/page_title");
get_template_part("template-parts/blog-home/service");
// Get custom field values
$service_title = get_post_meta(get_the_ID(), 'service_block_title', true);
$service_content = get_post_meta(get_the_ID(), 'service_block_content', true);
$service_image = get_post_meta(get_the_ID(), 'service_block_image',['large'], true);
?>
    <!-- ::::::::::::::::::::: Block Content :::::::::::::::::::::::::: -->
    <section class="block block2">
        <div class="container">
            <div class="row">
                <!-- block image -->
                <div class="col-md-6">
                    <div class="block-img">
                        <?php if (!empty($service_image)):?>
                        <img src="<?php echo esc_url($service_image)?>" alt="" />
<?php endif; ?>
                    </div>
                </div>
                <!-- block content -->
                <div class="col-md-6">
                    <div class="block-text">
                        <?php if (!empty($service_title)){ ?>
                        <h2><?php echo esc_html($service_title)?></h2>
    <?php } ?>
                        <?php if (!empty($service_content)){ ?>
        <p><?php echo esc_html($service_content)?></p>
    <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- block area end -->
<?php get_footer();?>