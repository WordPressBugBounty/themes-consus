<a href="<?php echo esc_url( \ColibriWP\Theme\View::getData( 'link_value' ) ); ?>" class="wp-block wp-block-kubio-social-icon  position-relative wp-block-kubio-social-icon__link consus-front-header__k__erXiiMxvmEa-link consus-local-1093-link social-icon-link" data-kubio="kubio/social-icon">
	<span class="h-svg-icon wp-block-kubio-social-icon__icon consus-front-header__k__erXiiMxvmEa-icon consus-local-1093-icon" name="font-awesome/vimeo-square">
		<?php
		$icon = \ColibriWP\Theme\View::getData( 'icon' );
		if ( isset( $icon['content'] ) ) {
			echo $icon['content'];}
		?>
	</span>
</a>
