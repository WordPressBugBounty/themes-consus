<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer consus-search__k__1MCYzfcZN-outer consus-local-833-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner consus-search__k__1MCYzfcZN-inner consus-local-833-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container consus-search__k__baLWB4dRKjp-container consus-local-834-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner consus-search__k__baLWB4dRKjp-inner consus-local-834-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-search__k__kxeqsSpdy-n-container consus-local-835-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner consus-search__k__kxeqsSpdy-n-inner consus-local-835-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align consus-search__k__kxeqsSpdy-n-align consus-local-835-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container consus-search__k__CtKC_EuIZL-container consus-local-836-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container consus-search__k__vrf0UGkWrN-container consus-local-837-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner consus-search__k__vrf0UGkWrN-inner consus-local-837-inner h-row">
										<?php consus_theme()->get( 'archive-loop' )->render(
											array(
												'view' => 'content/search/loop-item',
											)
										); ?>
									</div>
								</div>
								<?php if ( consus_has_pagination() ) : ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container consus-search__k__vD7AVCTELY-container consus-local-844-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner consus-search__k__vD7AVCTELY-inner consus-local-844-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-search__k__tBYU0uM8Xx-container consus-local-845-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner consus-search__k__tBYU0uM8Xx-inner consus-local-845-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align consus-search__k__tBYU0uM8Xx-align consus-local-845-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if ( consus_has_pagination_button( true ) ) : ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing consus-search__k__ELgmeRXRD--spacing consus-local-846-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer consus-search__k__ELgmeRXRD--outer consus-local-846-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link consus-search__k__ELgmeRXRD--link consus-local-846-link h-w-100 h-global-transition" href="<?php consus_get_navigation_button_link( true ); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text consus-search__k__ELgmeRXRD--text consus-local-846-text kubio-inherit-typography">
																	<?php esc_html_e( 'Previous', 'consus' ); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-search__k__P2OarhUKUK-container consus-local-847-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner consus-search__k__P2OarhUKUK-inner consus-local-847-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align consus-search__k__P2OarhUKUK-align consus-local-847-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer consus-search__k__tRiQFlrj8q-outer consus-local-848-outer" data-kubio="kubio/pagination-numbers">
														<?php consus_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container consus-search__k__2nd5yuWmz9-container consus-local-849-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner consus-search__k__2nd5yuWmz9-inner consus-local-849-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align consus-search__k__2nd5yuWmz9-align consus-local-849-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if ( consus_has_pagination_button() ) : ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing consus-search__k__ACSe8L2gsX-spacing consus-local-850-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer consus-search__k__ACSe8L2gsX-outer consus-local-850-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link consus-search__k__ACSe8L2gsX-link consus-local-850-link h-w-100 h-global-transition" href="<?php consus_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text consus-search__k__ACSe8L2gsX-text consus-local-850-text kubio-inherit-typography">
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
