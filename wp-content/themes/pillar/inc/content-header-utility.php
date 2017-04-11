<?php
	$header_address = get_option('pillar_header_address', '68 Cardamon Place, Melbourne Vic 3000');
	$header_email = get_option('pillar_header_email', 'hello@pillar.net');
?>	

<div class="utility-bar bg--secondary">
	<div class="nav-inner">

		<?php if( $header_address ) : ?>
		    <div class="nav-module left">
		        <span class="type--fine-print"><?php echo wp_kses_post($header_address); ?></span>
		    </div>
	    <?php endif; ?>
	    
	    <?php if( $header_email ) : ?>
		    <div class="nav-module left">
		        <span class="type--fine-print"><?php echo wp_kses_post($header_email); ?></span>
		    </div>
	    <?php endif; ?>
	    
	    <?php get_template_part('inc/content-header', 'social-icons'); ?>
    
    </div>
</div>