<?php if (get_option('pillar_header_search', 'yes') == 'yes') : ?>
	<div class="nav-module right">
		<a href="#" class="nav-function modal-trigger" data-modal-id="search-form">
			<i class="interface-search icon icon--sm"></i>
			<span><?php esc_html_e('Search', 'pillar'); ?></span>
		</a>
	</div>
<?php endif; ?>