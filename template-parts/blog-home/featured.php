<?php
$slides = get_option('neuron_option')['home_slider'] ?? [];
echo '<pre>',print_r($slides), '</pre>'
?>


<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->


<section class="slider-area">
    <?php if (!empty($slides)) :
        ?>
        <!-- slide item three -->
    <?php foreach ($slides as $slide) : ?>
    <div class="homepage-slider slider-bg" style="background-image: url(<?php echo esc_url($slide['image']); ?>)">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="slider-content">
                                <h1><?php echo esc_html($slide['title']); ?></h1>
                                <p><?php echo esc_html($slide['description']); ?></p>
                                <?php if (!empty($slide['url'])) : ?>
                                    <a href="<?php echo esc_url($slide['url']); ?>">  <?php  _e("Meet The Expert", 'neuron'); ?> <i class="fa fa-long-arrow-right"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>

</section><!-- slider area end -->