<?php 
	$logo = get_option('custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png'); 
	$logo_light = get_option('custom_logo_light', EBOR_THEME_DIRECTORY . 'style/img/logo-light.png');
?>

<div class="nav-module logo-module left">
    <a href="<?php echo esc_url(home_url('/')); ?>">
    	<img class="logo logo-dark" alt="logo" src="<?php echo esc_url($logo); ?>" />
    	<img class="logo logo-light" alt="logo" src="<?php echo esc_url($logo_light); ?>" />
    </a>
</div>