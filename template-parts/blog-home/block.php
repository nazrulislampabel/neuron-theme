<?php $options = get_option( 'theme_options' );
$block_img = '';

if ( ! empty( $options['single_block_image'] ) ) {
    $img_id = attachment_url_to_postid( $options['single_block_image'] );
    if ( $img_id ) {
        $block_img = wp_get_attachment_image_url( $img_id,'large' );
    } else {
        $block_img = esc_url( $options['single_block_image'] );
    }
}
?>
<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block-text">
                    <?php if (!empty($options ['single_block_title'])) :?>
                        <h2><?php echo esc_html($options['single_block_title'])?></h2>
                        <?php endif;?>
                    <?php if (!empty($options ['single_block_content'])) :?>
                        <p><?php echo esc_html($options['single_block_content'])?></p>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-img">
                    <img src="<?php echo $block_img ? : get_template_directory_uri() . '/assets/img/homepageblock.jpg'; ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</section><!-- block area end -->