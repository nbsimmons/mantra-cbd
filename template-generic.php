<?php 
	/* Template Name: Generic Template */
	get_header();
?>
<main>
	<div class="sub-banner" style="background: url(https://www.mantra-cbd.co.uk/wp-content/uploads/2020/02/Group-4.png); padding: 100px 0; text-align: center; background-size: cover; margin-bottom: 120px;">
		<h1 style="text-transform: uppercase; color: white;"><?php the_title(); ?></h1>
	</div>
	<?php 
		if( have_rows('layouts') ):
		  while ( have_rows('layouts') ) : the_row();
			  
			  // Case: Paragraph layout.
			  if( get_row_layout() == 'left_copy_with_image' ):
	?>
		<div class="lcwi">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell medium-6">
						<h2><?php echo get_sub_field('leftCopyTitle'); ?></h2>
						<?php echo get_sub_field('leftCopy'); ?>
						
					</div>
					<div class="cell medium-6">
						<img src="<?php echo wp_get_attachment_url(get_sub_field('leftCopyImage')); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	<?php
			// Case: Download layout.
			elseif( get_row_layout() == 'left_image_with_copy' ): 
	?>
		<div class="liwc section-spacing">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell medium-6" style="padding-bottom: 30px;">
						<img src="<?php echo get_sub_field('leftImage')["url"]; ?>" alt="">
					</div>
					<div class="cell medium-6">
						<?php if(get_sub_field('leftImageTitle')){ ?>
							<h2><?php echo get_sub_field('leftImageTitle'); ?></h2>
						<?php } ?>
						<?php echo get_sub_field('leftImageCopy'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php
			// Case: Download layout.
			elseif( get_row_layout() == 'faq_section' ): 
	?>
		<div class="liwc section-spacing">
			<div class="grid-container">
			<?php while ( have_rows('faqs') ) : the_row(); ?>
				<div class="grid-x grid-padding-x">
					<div class="cell medium-12" style="">
						<h2><?php echo get_sub_field('faqTitle'); ?></h2>
					</div>
					<div class="cell medium-12">
						<p style="color: #2D4F34; line-height: 28pt"><?php echo get_sub_field('faqCopy'); ?></p>
					</div>
				</div>
			</div>
						<?php endwhile; ?>
		</div>
	<?php
	
			endif;
		  endwhile;
		endif;
	?>
	<?php echo get_template_part('partials/pre', 'footer'); ?>	
</main>
<?php get_footer(); ?>