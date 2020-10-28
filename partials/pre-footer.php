

	<div id="values" class="section-spacing">
		<div class="grid-container full">
			<div class="grid-x align-center text-align-center">
				<div class="cell margin-bottom-15">
					<h2>WHY CHOOSE MANTRA CBD?</h2>
				</div>
				<?php 
					$values = array(
						array(
							'title' => 'Organic',
							'icon' => '/wp-content/uploads/2020/01/world-wide-web.png',
							'background' => '/wp-content/uploads/2020/01/organic.png',
						),
						array(
							'title' => 'Vegan',
							'icon' => '/wp-content/uploads/2020/01/leaves.svg',
							'background' => '/wp-content/uploads/2020/01/vegan.png',
						),
						array(
							'title' => 'Gluten free',
							'icon' => '/wp-content/uploads/2020/01/tree.svg',
							'background' => '/wp-content/uploads/2020/01/gluten-free.png',
						),
					);
					foreach ($values as $v) {
						$title = $v['title'];
						$icon = $v['icon'];
	    				$image = $v['background'];
				?>
					<div class="cell small-12 medium-4 small-6 margin-bottom-15">
						<div class="value-div" style="background-image: url(<?php echo $image; ?>);">
							<div class="grid-x align-center align-middle height-100">
								<div class="cell">
									
							<img src="<?php echo $icon; ?>" alt="">
							<p class="value-title"><?php echo $title; ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<div id="new-in" class="section-spacing">
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-margin-y align-center text-align-center">
				<div class="cell margin-bottom-15">
					<h2>NEW IN</h2>
				</div>
				<?php
						$args = array(
							'post_type' => 'product',
							'posts_per_page' => 4
							);
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) {
							while ( $loop->have_posts() ) : $loop->the_post();
	    						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
					?>
				<div class="cell medium-3 small-6">
					
								<div class="category-image">
									<img src="<?php echo $image[0]; ?>" alt="">
								</div>
								<p class="product-name"><?php echo get_the_title(); ?></p>
								<?php $price = get_post_meta( $loop->post->ID, '_price', true ); ?>
								<p class="product-price"><?php echo wc_price( $price ); ?></p>
								<a href="/?add-to-cart=<?php echo $loop->post->ID; ?>" class="button outline-grey">Add to basket</a>
					
				</div>
				<?php 
							endwhile;
						} else {
							echo __( 'No products found' );
						}
						wp_reset_postdata();
					?>
			</div>
		</div>
	</div>