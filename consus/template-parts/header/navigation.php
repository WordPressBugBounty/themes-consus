<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> consus-header__k__zooHwVFNmS-outer consus-local-1133-outer" data-kubio="kubio/navigation" id="navigation">
	<?php consus_theme()->get( 'inner-top-bar' )->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav consus-header__k__BEfPE27X2Be-nav consus-local-1174-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:false,&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section consus-header__k__BEfPE27X2Be-nav-section consus-local-1174-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer consus-header__k__S3Ks6dkPK-p-outer consus-local-1175-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container consus-header__k__qVyQ88lGt2k-container consus-local-1176-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-2 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner consus-header__k__qVyQ88lGt2k-inner consus-local-1176-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-2 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-header__k__-gR1dt3630--container consus-local-1177-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner consus-header__k__-gR1dt3630--inner consus-local-1177-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align consus-header__k__-gR1dt3630--align consus-local-1177-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php
									consus_theme()->get( 'logo' )->render(
										array(
											'wrapper_class'    => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row consus-header__k__QyTWSxNxxH_-container consus-local--container',
											'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  consus-header__k__QyTWSxNxxH_-image consus-local--image',
											'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   consus-header__k__QyTWSxNxxH_-alternateImage consus-local--alternateImage',
											'logo_text_class'  => 'position-relative wp-block-kubio-logo__text  consus-header__k__QyTWSxNxxH_-text consus-local--text',
										)
									);
									?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container consus-header__k__TXYmSIRUY5V-container consus-local-1179-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner consus-header__k__TXYmSIRUY5V-inner consus-local-1179-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align consus-header__k__TXYmSIRUY5V-align consus-local-1179-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container consus-header__k__zRRrFy7aVRt-container consus-local-1180-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-header__k__N34Tj0qnkb6-container consus-local-1181-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner consus-header__k__N34Tj0qnkb6-inner consus-local-1181-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align consus-header__k__N34Tj0qnkb6-align consus-local-1181-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
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
