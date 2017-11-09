<div id="sidebar">

	<ul class="widgets">

		<?php appthemes_before_sidebar_widgets( APP_POST_TYPE ); ?>

		<?php appthemes_load_template( array( 'sidebar-nav.php', 'includes/sidebar-nav.php' ) ); ?>

		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar_job')) : else : ?>

			<!-- no dynamic sidebar so don't do anything -->

		<?php endif; ?>

		<?php appthemes_after_sidebar_widgets( APP_POST_TYPE ); ?>

	</ul>
	
	<div id="anuncios_2" class="arranhaceu">
		<script type="text/javascript">
		    google_ad_client = "ca-pub-9269538659312953";
		    google_ad_slot = "6564757289";
		    google_ad_width = 300;
		    google_ad_height = 600;
		</script>
		<!-- Arranha céu 1 300x600 -->
		<script type="text/javascript" src="//pagead2.googlesyndication.com/pagead/show_ads.js"></script>
	</div>

</div><!-- end sidebar -->
