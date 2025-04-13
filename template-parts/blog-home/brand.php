<?php
$options = get_option( 'theme_options' );
$brands = get_option('theme_options')['brand_section'] ?? [];
?>
<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
<section class="client-logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="all-client-logo">
                    <?php if (!empty($brands)):
                        ?>
                    <?php foreach ($brands as $brand): ?>
                    <a href="<?php echo esc_url($brand['brand_url'])?>"><img src="<?php echo esc_url($brand['brand_image']); ?>" alt="" /></a>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- end client section -->
