<?php
$options = get_option( 'theme_options' );
$services = get_option('theme_options')['Single_service'] ?? [];
?>
<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
<section class="section-padding darker-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="template-title text-center">
                    <h2><?php echo esc_html($options['Service_title'])?></h2>
                    <p><?php echo esc_html($options['Service_sub_title'])?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            if (!empty($services)):
                ?>
            <?php foreach ($services as $service ):
                ?>
                <!-- single service -->
                <div class="col-sm-6 col-md-4">
                    <div class="services-tiem">
                        <img class="hvr-buzz-out" src="<?php echo esc_url($service['Single_service_image']); ?>" alt="" />
                        <h3><a href="#"><?php echo esc_html($service['Single_service_title'])?></a></h3>
                        <p><?php echo esc_html($service['Single_service_content'])?></p>
                    </div>
                </div>
                <!-- single service -->
            <?php endforeach; ?>
            <?php endif;?>
        </div>
    </div>
</section><!-- end services section -->

