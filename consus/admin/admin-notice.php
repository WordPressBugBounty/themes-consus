<?php

use ColibriWP\Theme\Translations;
use Kubio\Theme\Theme;

wp_localize_script(
	get_template() . '-page-info',
	'consus_admin',
	array(
		'getStartedData'    => array(
			'plugin_installed_and_active' => Translations::escHtml( 'plugin_installed_and_active' ),
			'activate'                    => Translations::escHtml( 'activate' ),
			'activating'                  => Translations::get( 'activating', 'Kubio Page Builder' ),
			'install_recommended'         => isset( $_GET['install_recommended'] ) ? $_GET['install_recommended'] : '',
			'theme_prefix'                => Theme::prefix( '', false ),
		),
		'builderStatusData' => array(
			'status'       => consus_theme()->getPluginsManager()->getPluginState( consus_get_builder_plugin_slug() ),
			'install_url'  => consus_theme()->getPluginsManager()->getInstallLink( consus_get_builder_plugin_slug() ),
			'activate_url' => consus_theme()->getPluginsManager()->getActivationLink( consus_get_builder_plugin_slug() ),
			'slug'         => consus_get_builder_plugin_slug(),
            'kubio_front_set_predesign_nonce' => wp_create_nonce( 'kubio_front_set_predesign_nonce' ),
            'kubio_disable_big_notice_nonce' => wp_create_nonce( 'kubio_disable_big_notice_nonce' ),
            'plugin_activate_nonce' => wp_create_nonce( 'plugin_activate_nonce' ),
			'messages'     => array(
				'installing' => Translations::get( 'installing', 'Kubio Page Builder' ),
				'activating' => Translations::get( 'activating', 'Kubio Page Builder' ),
				'preparing'  => Translations::get( 'preparing_front_page_installation' ),
			),
		),
	)
);

?>
<div class="kubio-admin-notice-spacer">
	<div class="kubio-admin-big-notice--container">
		<div class="content-holder">
			<div class="front-page-preview">
				<div class="kubio-front-page-preview-browser-bar">
					<div class="kubio-front-page-preview-browser-dot"></div>
					<div class="kubio-front-page-preview-browser-dot"></div>
					<div class="kubio-front-page-preview-browser-dot"></div>
				</div>
				<div class="kubio-front-page-preview-image-scroller">
					<img src="<?php echo esc_url( consus_theme()->getFrontPagePreview() ); ?>"/>
				</div>
			</div>

			<div class="messages-area">
				<div class="title-holder">
					<h1><?php Translations::escHtmlE( 'would_you_like_to_install_front_page', consus_theme()->getName() ); ?></h1>
				</div>
				<div class="action-buttons">
					<button class="button button-primary button-hero start-with-predefined-design-button">
						<?php Translations::escHtmlE( 'install_homepage', consus_theme()->getName() ); ?>
					</button>
				</div>
				<div class="content-footer ">
					<div>
						<div class="plugin-notice">
							<span class="spinner"></span>
							<span class="message"></span>
						</div>
					</div>
					<div>
						<p class="description large-text">
							<?php Translations::escHtmlE( 'start_with_a_front_page_plugin_info', 'Kubio Page Builder' ); ?>
						</p>
					</div>
				</div>
			</div>

		</div>
		<div class="kubio-notice-dont-show-container">
			<button class="button-link kubio-dont-show-notice">
				<?php Translations::escHtmlE( 'dont_show_anymore' ); ?>
			</button>
		</div>
	</div>
</div>
