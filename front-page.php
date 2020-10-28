<?php get_header(); ?>
<main>
	<div class="main-banner">
		<div class="swiper-container" id="hero-banner">
			<div class="swiper-wrapper">
				<div class="swiper-slide grid-x align-middle" style="background: url(/wp-content/uploads/2020/01/banner-bg.png); background-size: cover; background-position: center;">
					<div class="swiper-content cell">
						<h1>MANTRA CBD</h1>
						<hr class="banner-line">
						<p>Ethically sourced and hemp derived CBD blended products with you in mind.</p>
					</div>
				</div>
				<div class="swiper-slide grid-x align-middle" style="background: url(/wp-content/uploads/2020/01/banner-bg.png); background-size: cover; background-position: center;">
					<div class="swiper-content cell">
						<h1>CBD Oils</h1>
						<hr class="banner-line">
						<p>Shop our range of CBD oils now.</p>
						<a href="" class="button white">Shop now</a>
					</div>
				</div>
			</div>
			<div class="banner-pagination"></div>
		</div>
	</div>
	<?php 
		$args = array(
		    'taxonomy'   => "product_cat"
		);
		$product_categories = get_terms($args);
	?>
	<div id="product--categories" class="section-spacing">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-center text-align-center">
				<div class="cell margin-bottom-15">
					<h2>SHOP BY CATEGORY</h2>
				</div>
				<?php 
					foreach ($product_categories as $pc) {
						$thumbnail_id = get_term_meta( $pc->term_id, 'thumbnail_id', true );
						$image = wp_get_attachment_url( $thumbnail_id );
				?>
					<a href="<?php echo get_term_link($pc->term_id);?>" class="cat-link cell medium-4 small-6 margin-bottom-15">
						<div class="category-image">
							<img src="<?php echo $image; ?>" alt="">
						</div>
						<p class="category-title"><?php echo $pc->name; ?></p>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php echo get_template_part('partials/pre', 'footer'); ?>	
</main>
<?php get_footer(); ?>