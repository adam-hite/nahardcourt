
<?php if (get_option('pillar_header_search', 'yes') == 'yes') { ?>
<div class="modal-container search-modal" data-modal-id="search-form">
	<div class="modal-content bg-white imagebg" data-width="100%" data-height="100%">
		<div class="pos-vertical-center clearfix">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div><!--end of modal-content-->
</div><!--end of modal-container-->
<?php } ?>