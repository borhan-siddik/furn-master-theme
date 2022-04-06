<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
	<!--/.carousel-indicator -->
	<ol class="carousel-indicators">
		<?php 
			for( $i = 0; $i < $a['slides']; $i++ ) {?>
				<li data-target="#header-carousel" data-slide-to="<?php echo $i ?>" <?php if( $i == 0) echo 'class="active"'; ?>><span class="small-circle"></span></li>
			<?php }
		?>
	</ol><!-- /ol-->
	<!--/.carousel-indicator -->

	<!--/.carousel-inner -->
	<div class="carousel-inner" role="listbox">
		<?php
		$args = array(
			'post_type'					=> 'product',
			'posts_per_page'			=> $a['slides'],
			'product_cat'				=> 'great-design-collection'
		);
		$slider_query = new WP_Query($args);
		if ($slider_query->have_posts()) {
			$counter = 0;
			while ($slider_query->have_posts()) {
				$slider_query->the_post();
				global $product; 
				?>
				<div class="item <?php if($counter == 0) echo esc_attr( 'active' ); ?> ">
					<div class="single-slide-item slide1">
						<div class="container">
							<div class="welcome-hero-content">
								<div class="row">
									<div class="col-sm-7">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<h4>
													<?php 
														$terms = get_the_terms( get_the_ID(), 'product_cat' );
														foreach($terms as $term) {
															$cats[] = $term->name;
														}
														echo( join( " | ", $cats ) );
														$cats = [];
													?>
												</h4>
												<h2><?php the_title(); ?></h2>
												<p>
													<?php echo $product->get_short_description(); ?>
												</p>
												<div class="packages-price">
													<p>
														<?php echo get_woocommerce_currency_symbol() . " " . $product->get_regular_price(); ?>
														<del><?php echo get_woocommerce_currency_symbol() . " " . $product->get_sale_price(); ?></del>
													</p>
												</div>
												<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
													<span class="lnr lnr-plus-circle"></span>
													add <span>to</span> cart
												</button>
												<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='<?php the_permalink(); ?>'">
													more info
												</button>
											</div>
											<!--/.welcome-hero-txt-->
										</div>
										<!--/.single-welcome-hero-->
									</div>
									<!--/.col-->
									<div class="col-sm-5">
										<div class="single-welcome-hero">
											<div class="welcome-hero-img">
												<img src="<?php echo esc_attr( get_the_post_thumbnail_url() ); ?>" alt="slider image">
											</div>
											<!--/.welcome-hero-txt-->
										</div>
										<!--/.single-welcome-hero-->
									</div>
									<!--/.col-->
								</div>
								<!--/.row-->
							</div>
							<!--/.welcome-hero-content-->
						</div><!-- /.container-->
					</div><!-- /.single-slide-item-->

				</div><!-- /.item .active-->
				<?php $counter++; 
			}
		}
		?>


	</div><!-- /.carousel-inner-->

</div>