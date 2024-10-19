<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer consus-index__k__1MCYzfcZN-outer consus-local-524-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner consus-index__k__1MCYzfcZN-inner consus-local-524-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container consus-index__k__baLWB4dRKjp-container consus-local-525-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner consus-index__k__baLWB4dRKjp-inner consus-local-525-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-index__k__kxeqsSpdy-n-container consus-local-526-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner consus-index__k__kxeqsSpdy-n-inner consus-local-526-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align consus-index__k__kxeqsSpdy-n-align consus-local-526-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container consus-index__k__CtKC_EuIZL-container consus-local-527-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container consus-index__k__vrf0UGkWrN-container consus-local-528-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner consus-index__k__vrf0UGkWrN-inner consus-local-528-inner h-row">
										<?php consus_theme()->get( 'archive-loop' )->render(
											array(
												'view' => 'content/index/loop-item',
											)
										); ?>
									</div>
								</div>
								<?php if ( consus_has_pagination() ) : ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container consus-index__k__vD7AVCTELY-container consus-local-536-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner consus-index__k__vD7AVCTELY-inner consus-local-536-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-index__k__tBYU0uM8Xx-container consus-local-537-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner consus-index__k__tBYU0uM8Xx-inner consus-local-537-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align consus-index__k__tBYU0uM8Xx-align consus-local-537-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if ( consus_has_pagination_button( true ) ) : ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing consus-index__k__ELgmeRXRD--spacing consus-local-538-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer consus-index__k__ELgmeRXRD--outer consus-local-538-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link consus-index__k__ELgmeRXRD--link consus-local-538-link h-w-100 h-global-transition" href="<?php consus_get_navigation_button_link( true ); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text consus-index__k__ELgmeRXRD--text consus-local-538-text kubio-inherit-typography">
																	<?php esc_html_e( 'Previous', 'consus' ); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-index__k__P2OarhUKUK-container consus-local-539-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner consus-index__k__P2OarhUKUK-inner consus-local-539-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align consus-index__k__P2OarhUKUK-align consus-local-539-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer consus-index__k__tRiQFlrj8q-outer consus-local-540-outer" data-kubio="kubio/pagination-numbers">
														<?php consus_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-index__k__2nd5yuWmz9-container consus-local-541-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner consus-index__k__2nd5yuWmz9-inner consus-local-541-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align consus-index__k__2nd5yuWmz9-align consus-local-541-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if ( consus_has_pagination_button() ) : ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing consus-index__k__ACSe8L2gsX-spacing consus-local-542-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer consus-index__k__ACSe8L2gsX-outer consus-local-542-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link consus-index__k__ACSe8L2gsX-link consus-local-542-link h-w-100 h-global-transition" href="<?php consus_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text consus-index__k__ACSe8L2gsX-text consus-local-542-text kubio-inherit-typography">
																	<?php esc_html_e( 'Next', 'consus' ); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
