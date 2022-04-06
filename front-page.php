<?php $uri = get_theme_file_uri();
get_header();
?>
<!--populer-products start -->

<section id="populer-products" class="populer-products">
	<div class="container">
		<div class="populer-products-content">
			<div class="row">
				<div class="col-md-3">
					<div class="single-populer-products">
						<div class="single-populer-product-img mt40">
							<img src="<?php echo esc_attr($uri . '/furn-master-static/assets/images/populer-products/p1.png'); ?>" alt="populer-products images">
						</div>
						<h2><a href="#">arm chair</a></h2>
						<div class="single-populer-products-para">
							<p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut fugit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-populer-products">
						<div class="single-inner-populer-products">
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="single-inner-populer-product-img">
										<img src="<?php echo esc_attr($uri . '/furn-master-static/assets/images/populer-products/p2.png'); ?>" alt="populer-products images">
									</div>
								</div>
								<div class="col-md-8 col-sm-12">
									<div class="single-inner-populer-product-txt">
										<h2>
											<a href="#">
												latest designed stool <span>and</span> chair
											</a>
										</h2>
										<p>
											Edi ut perspiciatis unde omnis iste natusina error sit voluptatem accusantium doloret mque laudantium, totam rem aperiam.
										</p>
										<div class="populer-products-price">
											<h4>Sales Start from <span>$99.00</span></h4>
										</div>
										<button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='#'">
											discover more
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-populer-products">
						<div class="single-populer-products">
							<div class="single-populer-product-img">
								<img src="<?php echo esc_attr($uri . '/furn-master-static/assets/images/populer-products/p3.png'); ?>" alt="populer-products images">
							</div>
							<h2><a href="#">hanging lamp</a></h2>
							<div class="single-populer-products-para">
								<p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut fugit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/.container-->

</section>
<!--/.populer-products-->
<!--populer-products end-->

<!--new-arrivals start -->
<section id="new-arrivals" class="new-arrivals">
	<div class="container">
		<div class="section-header">
			<h2>new arrivals</h2>
		</div>
		<!--/.section-header-->
		<div class="new-arrivals-content">
			<div class="row">
				<?php
				$args = array(
					'post_type'	      => 'product',
					'posts_per_page'	=> 8,
					'orderby'			=> 'date',
					'order'				=> 'DESC',
					'tax_query'			=> array(
						array(
							'taxonomy'			=> 'product_cat',
							'field'				=> 'slug',
							'terms'				=> array('featured', 'great-design-collection'),
							'operator'			=> 'NOT IN'
						)
					)
				);
				$new_arrival_query = new WP_Query($args);
				if ($new_arrival_query->have_posts()) {
					while ($new_arrival_query->have_posts()) {
						$new_arrival_query->the_post();
						global $product; ?>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="<?php echo esc_attr(get_the_post_thumbnail_url()); ?>" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="arrival-product-price"><?php _e($product->get_price_html()); ?></p>
							</div>
						</div>
				<?php }
				} else {
					_e('<p style="text-align:center">Nothing New at this Moment!</p>');
				}
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<!--/.container-->

</section>
<!--/.new-arrivals-->
<!--new-arrivals end -->

<!--sofa-collection start -->
<section id="sofa-collection">
	<div class="owl-carousel owl-theme" id="collection-carousel">
		<div class="sofa-collection collectionbg1">
			<div class="container">
				<div class="sofa-collection-txt">
					<h2>unlimited sofa collection</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="sofa-collection-price">
						<h4>strting from <span>$ 199</span></h4>
					</div>
					<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
						view more
					</button>
				</div>
			</div>
		</div>
		<!--/.sofa-collection-->
		<div class="sofa-collection collectionbg2">
			<div class="container">
				<div class="sofa-collection-txt">
					<h2>unlimited dainning table collection</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="sofa-collection-price">
						<h4>strting from <span>$ 299</span></h4>
					</div>
					<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
						view more
					</button>
				</div>
			</div>
		</div>
		<!--/.sofa-collection-->
	</div>
	<!--/.collection-carousel-->

</section>
<!--/.sofa-collection-->
<!--sofa-collection end -->

<!--feature start -->
<section id="feature" class="feature">
	<div class="container">
		<div class="section-header">
			<h2>featured products</h2>
		</div>
		<!--/.section-header-->
		<div class="feature-content">
			<div class="row">
				<?php
				$args = array(
					'post_type'						=> 'product',
					'posts_per_page'				=> 4,
					'product_cat'					=> 'featured'
				);
				$featured_products_query = new WP_Query($args);
				if ($featured_products_query->have_posts()) {
					while ($featured_products_query->have_posts()) {
						$featured_products_query->the_post();
						global $product; ?>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="<?php echo esc_attr(get_the_post_thumbnail_url()); ?>" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<h5><?php _e($product->get_price_html()); ?></h5>
								</div>
							</div>
						</div>
				<?php }
				} else {
					_e('<p style="text-align:center">No Featured Product at the moment!</p>');
				}
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<!--/.container-->

</section>
<!--/.feature-->
<!--feature end -->

<!--blog start -->
<section id="blog" class="blog" style="padding: 80px 0">
	<div class="container">
		<div class="section-header">
			<h2>latest blog</h2>
		</div>
		<!--/.section-header-->
		<div class="blog-content">
			<div class="row">
				<?php
				$args = array(
					'post_type'			=> 'post',
					'posts_per_page'	=> 3,
					'orderby'			=> 'date',
					'order'				=> 'DESC'
				);
				$blog_post_query = new WP_Query($args);
				if ($blog_post_query->have_posts()) {
					while ($blog_post_query->have_posts()) {
						$blog_post_query->the_post(); ?>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="<?php echo esc_attr(get_the_post_thumbnail_url()); ?>" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<h3>By <a href="<?php echo esc_attr(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a> / <?php echo esc_html(get_the_date()); ?></h3>
									<p>
										<?php echo wp_trim_words(get_the_content(), 16); ?>
									</p>
								</div>
							</div>

						</div>
				<?php }
				} else {
					_e('<p style="text-align:center">No new posts!</p>');
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<!--/.container-->

</section>
<!--/.blog-->
<!--blog end -->

<!-- clients strat -->
<section id="clients" class="clients">
	<div class="container">
		<div class="owl-carousel owl-theme" id="client">
			<div class="item">
				<a href="#">
					<img src="<?php echo esc_attr($uri . '/furn-master-static/assets/images/clients/c1.png'); ?>" alt="brand-image" />
				</a>
			</div>
			<!--/.item-->
			<div class="item">
				<a href="#">
					<img src="<?php echo esc_attr($uri . '/furn-master-static/assets/images/clients/c2.png'); ?>" alt="brand-image" />
				</a>
			</div>
			<!--/.item-->
			<div class="item">
				<a href="#">
					<img src="<?php echo esc_attr($uri . '/furn-master-static/assets/images/clients/c3.png'); ?>" alt="brand-image" />
				</a>
			</div>
			<!--/.item-->
			<div class="item">
				<a href="#">
					<img src="<?php echo esc_attr($uri . '/furn-master-static/assets/images/clients/c4.png'); ?>" alt="brand-image" />
				</a>
			</div>
			<!--/.item-->
			<div class="item">
				<a href="#">
					<img src="<?php echo esc_attr($uri . '/furn-master-static/assets/images/clients/c5.png'); ?>" alt="brand-image" />
				</a>
			</div>
			<!--/.item-->
		</div>
		<!--/.owl-carousel-->

	</div>
	<!--/.container-->

</section>
<!--/.clients-->
<!-- clients end -->
<?php get_footer(); ?>