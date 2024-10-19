<a href="<?php echo esc_url( \ColibriWP\Theme\View::getData( 'link_value' ) ); ?>" class="wp-block wp-block-kubio-social-icon  position-relative wp-block-kubio-social-icon__link consus-header__k__CrIqKrwyvhP-link consus-local-1233-link social-icon-link" data-kubio="kubio/social-icon">
	<span class="h-svg-icon wp-block-kubio-social-icon__icon consus-header__k__CrIqKrwyvhP-icon consus-local-1233-icon" name="font-awesome/vimeo-square">
		<?php
		$icon = \ColibriWP\Theme\View::getData( 'icon' );
		if ( isset( $icon['content'] ) ) {
			echo $icon['content'];}
		?>
	</span>
</a>
