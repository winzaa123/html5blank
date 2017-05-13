<?php get_header(); ?>
			<!-- header -->
			<header class="header clear" role="banner">
					<div class="container">
						<?php echo do_shortcode("[smartslider3 slider=1]") ; ?>  
						<div class="card">
							<div class="card-block">
								<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
						</div>
								</div>
							</div>
					</div>

			</header>
			<!-- /header -->
<div class="container mt-3">
	<div class="row">
		<div class="col-12 col-md-9">
			<main role="main">
				<!-- section -->
				<section>

					<h1>
						<?php _e( 'สินค้าและข่าวสาร', 'html5blank' ); ?>
					</h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>
				<!-- /section -->
			</main>
		</div>
		<div class="col-12 col-md-3">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-12">
		<hr class="m-5">
			</div>
	</div>
					<div class="row">
					<div class="col-12 col-md-4">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer-1')) ?>
					 
					<div class="col-12 col-md-4">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer-2')) ?>
 
					<div class="col-12 col-md-4 align-self-end">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer-3')) ?>
 
					</div>
				</div>
	
</div>




<?php get_footer(); ?>
