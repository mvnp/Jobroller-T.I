<?php if ( jr_search_bar_active() ): ?>
	<form action="<?php echo esc_url( home_url() ); ?>/" method="get" id="searchform">

		<div class="search-wrap">

			<div>
				<input type="text" id="search" title="" name="s" class="text" placeholder="<?php _e( 'All Jobs', APP_TD ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" />
				<input type="text" id="near" title="<?php esc_attr_e( 'Location', APP_TD ); ?>" name="location" class="text" placeholder="<?php esc_attr_e( 'Location', APP_TD ); ?>" value="<?php echo esc_attr( $s_location ); ?>" />
				<label for="search"><button type="submit" title="<?php esc_attr_e( 'Go', APP_TD ); ?>" class="submit"><?php _e( 'Go', APP_TD ); ?></button></label>

				<input type="hidden" name="ptype" value="<?php echo esc_attr( APP_POST_TYPE ); ?>" />

				<input type="hidden" name="latitude" id="field_latitude" value="" />
				<input type="hidden" name="longitude" id="field_longitude" value="" />
				<input type="hidden" name="full_address" id="field_full_address" value="" />
				<input type="hidden" name="north_east_lng" id="field_north_east_lng" value="" />
				<input type="hidden" name="south_west_lng" id="field_south_west_lng" value="" />
				<input type="hidden" name="north_east_lat" id="field_north_east_lat" value="" />
				<input type="hidden" name="south_west_lat" id="field_south_west_lat" value="" />
			</div>

			<?php jr_radius_dropdown(); ?>

		</div><!-- end search-wrap -->

		<div class="aviso"><p>Em breve, várias vagas em vários estados.</p></div>
		
		<?php if( is_user_logged_in() ): ?>

			<div class="aviso_2"><p>Precisa desativar <strong>AdBlock</strong> e se <a href="<?php echo bloginfo('url') ?>/login">cadastrar</a>.</p></div>

		<?php endif; ?>

	</form>

	<?php if( is_user_logged_in() ): ?>

		<div id="anuncios" style="clear:both;display:block">
			<div style="width: 48%;float: left">
				<!-- Anúncio 336x280 -->
				<script async src="<?php echo bloginfo('template_url') ?>/framework/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-9269538659312953"
				     data-ad-slot="5750847992"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<div style="width: 48%;float: right">
				<!-- Anúncio 336x280 -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-9269538659312953"
				     data-ad-slot="5750847992"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<div style="clear:both;display:block"></div>

		</div>

	<?php endif; ?>

<?php endif; ?>