<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head();?>
</head>

<body>
<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
<header>
	<!-- start top bar -->
	<div class="header-top-area">
        <?php
        $header = get_option('neuron_option');
        $head_social = get_option('neuron_option')['social_links_slide'];
        ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 hidden-xs">
					<div class="contact">
						<p>
							<i class="fa fa-phone"></i>
							<?php echo esc_html($header['contact_number'])?>
						</p>
						<p>
							<i class="fa fa-envelope"></i>
							<a href="<?php echo home_url()?>"><?php echo esc_html($header['contact_number'])?></a>
						</p>
					</div><!-- /.contact -->
				</div><!-- /.col-sm-8 -->

				<div class="col-sm-4">
					<div class="social-icon">
                        <?php if (is_active_sidebar('header_social')) {
                            dynamic_sidebar('header_social');
                        }
                        ?>
					</div><!-- /.social-icon -->
				</div><!-- /.col-sm-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- end top bar -->

<?php get_template_part("template-parts/common/navigation")?>
	<div class="clearfix"></div>
</header> <!-- end header -->


