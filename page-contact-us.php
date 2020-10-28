<?php 
	get_header();
?>
<main>
	<div class="sub-banner" style="background: url(https://mantra-cbd.co.uk/wp-content/uploads/2020/02/Group-4.png); padding: 100px 0; text-align: center; background-size: cover; margin-bottom: 120px;">
		<h1 style="text-transform: uppercase; color: white;"><?php the_title(); ?></h1>
	</div>
	
    <div class="lcwi">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-12">
                    <h2>GET IN TOUCH</h2>
                    <p style="font-size: 18px; color: #2D4F34; font-weight: 300; margin-top: 30px; margin-bottom: 15px;">Our product are derived from the plains of Colorado and California - the pinnacle of cultivating cannabis - where we source premium low THC occurring hemp, allowing us to procure a superior product that has minimal processing through gold standard extraction and maximum cannabinoid potential for the desired entourage effect.</p>
                    <p style="font-size: 18px;"><br><strong>Interested? Got questions? We’d love to hear from you! You can connect with us using the following or leave an enquiry in the form below.</strong></p>
                </div>
                <div class="cell medium-12" style="margin-bottom: 30px;">
                    <div class="grid-x grid-margin-x">
                        <div class="cell shrink" style="color: #2D4F34; font-size: 18px;"><i class="fas fa-envelope"></i> info@mantra-cbd.co.uk</div>
                        <div class="cell shrink" style="color: #2D4F34; font-size: 18px;"><i class="fas fa-phone"></i> 07856 642 341</div>
                        <div class="cell shrink" style="color: #2D4F34; font-size: 18px;"><i class="fab fa-instagram"></i> @mantracduk</div>
                    </div>
                </div>
                <div class="cell medium-12">
                    <?php echo do_shortcode('[contact-form-7 id="157" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
	<?php echo get_template_part('partials/pre', 'footer'); ?>	
</main>
<?php get_footer(); ?>