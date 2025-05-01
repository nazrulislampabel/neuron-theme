<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- breadcrumb content -->
                <div class="page-breadcrumbd">
                    <h2><?php
                        add_filter( 'bcn_breadcrumb_title', 'replace_site_title_with_home', 10, 3 );
                        function replace_site_title_with_home( $title, $type, $id ) {
                            if ( in_array( 'home', (array) $type ) ) {
                                return 'Home';
                            }
                            return $title;
                        }
                        echo the_title()?></h2>
                    <?php if ( function_exists('bcn_display') ) : ?>
                        <?php bcn_display(); ?>
                    <?php endif; ?>

                </div><!-- end breadcrumb content -->
            </div>
        </div>
    </div>
</section><!-- end breadcrumb -->