<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-sticky bootsnav">
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <?php get_search_form();?>
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                        <i class="fa fa-shopping-bag"></i>
                        <span class="badge">2</span>
                    </a>
                    <ul class="dropdown-menu cart-list">
                        <li>
                            <a href="#" class="photo"><img src="assets/img/cart-1.jpg" class="cart-thumb" alt="" /></a>
                            <h2><a href="#">Denim SlimFit Shirt </a></h2>
                            <p>2x - <span class="price">$19.99</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="assets/img/cart-3.jpg" class="cart-thumb" alt="" /></a>
                            <h2><a href="#">Denim Polo Shirt</a></h2>
                            <p>2x - <span class="price">$12.99</span></p>
                        </li>
                        <li class="total">
                            <span class="pull-right"><strong>Total</strong>: $320.00</span>
                            <a href="#" class="btn btn-primary btn-sm btn-cart">Cart</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
           <?php
                if (has_custom_logo()){
                    the_custom_logo();
                }else{
                    echo "<h1>".get_bloginfo()."</h1>";
                }
                ?>
        </div>
        <!-- End Header Navigation -->
        <?php
        $neuron_menu =
            wp_nav_menu( array(
	        'location'        => 'topmenu',
	        'menu_id'         => 'topmenu',
	        'container_id'    => 'navbar-menu',
	        'container_class' => 'collapse navbar-collapse',
	        'menu_class'      => 'nav navbar-nav navbar-right',
                'echo'=>false
        ) );
        $neuron_menu = str_replace("sub-menu","sub-menu dropdown-menu",$neuron_menu);
        echo $neuron_menu;
        ?>
    </div>
</nav>
<!-- End Navigation -->