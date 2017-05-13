<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	<div class="container-fluid  bg-white ">
		<div class="container">
			 
					<nav class="navbar navbar-toggleable-md navbar-light  ">
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
							aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/header_menu.jpg" alt="Logo" class="logo-img-header d-inline-block align-top"></a>
						<div class="collapse navbar-collapse" id="navbarText">

							<?php html5blank_nav(); ?>
						 

						</div>
					</nav>
			 
		</div>
	</div>
	<div class="container-fluid bg-brown">
		<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-8 "> 
				<ul class="header-social list-group">
  				<li><a class="has-tipsy"  href="<?php echo home_url( '/' ); ?>">
					  <i class="fa fa-facebook"></i>
					  </a></li>
  				<li><a class="has-tipsy"   href="<?php echo home_url( '/' ); ?>">
					  <i class="fa fa-youtube"></i>
					  </a></li>
  				<li><a class="has-tipsy"   href="<?php echo home_url( '/' ); ?>">
					   <i class="fa fa-twitter"></i>
					  </a></li>
             

			</ul>
	 
			</div>
			<div class="col-12 col-md-4"> 
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							 <div class="input-group">
								 <input type="search" class="search-field form-control"
									placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
									value="<?php echo get_search_query() ?>" name="s"
									title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							 	<span class="input-group-btn">
									 <button type="submit" class="search-submit btn btn-primary">
										 
										  <span class=""><i class="fa fa-search"></i></span>
									 </button>
							 
									 </span>
								 </div>
								 
								
							 
							
						</form>
			</div>
		</div>
			</div>
	</div>
		<!-- wrapper -->
		<div class="wrapper pt-4">


