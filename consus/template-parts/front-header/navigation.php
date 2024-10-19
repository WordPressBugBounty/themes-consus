<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> consus-front-header__k__Gp3qTlxXlu-outer consus-local-993-outer" data-kubio="kubio/navigation" id="navigation">
	<?php consus_theme()->get( 'front-top-bar' )->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav consus-front-header__k__xLwdIMLPC_l-nav consus-local-1034-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:false,&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section consus-front-header__k__xLwdIMLPC_l-nav-section consus-local-1034-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer consus-front-header__k__DqcL_YF9LKJ-outer consus-local-1035-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container consus-front-header__k__MqErEXZ17Jm-container consus-local-1036-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-2 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner consus-front-header__k__MqErEXZ17Jm-inner consus-local-1036-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-2 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-front-header__k__SFXC9Ze09eu-container consus-local-1037-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner consus-front-header__k__SFXC9Ze09eu-inner consus-local-1037-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align consus-front-header__k__SFXC9Ze09eu-align consus-local-1037-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php
									consus_theme()->get( 'logo' )->render(
										array(
											'wrapper_class'    => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row consus-front-header__k__0xSC3AT64-container consus-local--container',
											'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  consus-front-header__k__0xSC3AT64-image consus-local--image',
											'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   consus-front-header__k__0xSC3AT64-alternateImage consus-local--alternateImage',
											'logo_text_class'  => 'position-relative wp-block-kubio-logo__text  consus-front-header__k__0xSC3AT64-text consus-local--text',
										)
									);
									?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container consus-front-header__k__DJ3dK9XoVZ-container consus-local-1039-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner consus-front-header__k__DJ3dK9XoVZ-inner consus-local-1039-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align consus-front-header__k__DJ3dK9XoVZ-align consus-local-1039-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container consus-front-header__k__mRmagmI3LJv-container consus-local-1040-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-front-header__k__ZEkYpBrx7RA-container consus-local-1041-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner consus-front-header__k__ZEkYpBrx7RA-inner consus-local-1041-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align consus-front-header__k__ZEkYpBrx7RA-align consus-local-1041-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php consus_theme()->get( 'header-menu' )->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
