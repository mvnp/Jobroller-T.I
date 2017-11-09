<div id="footer">

	<div class="footer-widgets">

		<div class="inner">

			<?php foreach ( $footer_cols as $number ): ?>

				<?php $sidebar_id = "footer_col_{$number}"; ?>

				<div class="column">
					<div id="<?php echo esc_attr( $sidebar_id ); ?>">
						<?php dynamic_sidebar( $sidebar_id ); ?>
					</div>
				</div>

			<?php endforeach; ?>

			<div class="clear"></div>

			<div class="copyright">
				<a href="https://www.facebook.com/groups/programadoresincriveis" target="_blank" rel="nofollow">Programadores Incríveis</a> - <?php _e('Desenvolvido por', APP_TD); ?> <a href="https://www.facebook.com/axitechinformatica" target="_blank" rel="nofollow">AXITECH Web Softwares</a>
			</div>

		</div><!-- end inner -->

	</div><!-- end footer-widgets -->

</div><!-- end footer -->
