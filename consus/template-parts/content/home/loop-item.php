<div class="<?php consus_print_archive_entry_class( 'wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container consus-home__k__fx1L_l5Ny--container consus-local-157-container d-flex   ' ); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner consus-home__k__fx1L_l5Ny--inner consus-local-157-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-3 h-px-md-3 v-inner-md-3 h-px-3 v-inner-3">
		<div class="position-relative wp-block-kubio-query-loop-item__align consus-home__k__fx1L_l5Ny--align consus-local-157-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container consus-home__k__6duco09NdG-container consus-local-158-container kubio-post-featured-image--has-image h-aspect-ratio--4-3 <?php consus_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if ( has_post_thumbnail() ) : ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image consus-home__k__6duco09NdG-image consus-local--image' src='<?php echo esc_url( get_the_post_thumbnail_url() ); ?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner consus-home__k__6duco09NdG-inner consus-local-158-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align consus-home__k__6duco09NdG-align consus-local-158-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container consus-home__k__-DAcGXV_T-container consus-local-159-container kubio-post-categories-container" data-kubio="kubio/post-categories">
				<div class="position-relative wp-block-kubio-post-categories__placeholder consus-home__k__-DAcGXV_T-placeholder consus-local-159-placeholder kubio-post-categories-placeholder"></div>
				<div class="position-relative wp-block-kubio-post-categories__tags consus-home__k__-DAcGXV_T-tags consus-local-159-tags">
					<?php consus_categories_list( __( 'No category  ', 'consus' ) ); ?>
				</div>
			</div>
			<a class="position-relative wp-block-kubio-post-title__link consus-home__k__yndIzn0LAb-link consus-local-160-link d-block" href="<?php echo esc_url( get_the_permalink() ); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container consus-home__k__yndIzn0LAb-container consus-local-160-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer consus-home__k__Xy3_sNqX1-metaDataContainer consus-local-161-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
				<span class="metadata-item">
					<a href="<?php echo esc_url( get_day_link( get_post_time( 'Y' ), get_post_time( 'm' ), get_post_time( 'j' ) ) ); ?>">
						<?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
					</a>
				</span>
			</div>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text consus-home__k__fVTtKcA3Zp-text consus-local-162-text" data-kubio="kubio/post-excerpt">
				<?php
				consus_post_excerpt(
					array(
						'max_length' => 16,
					)
				);
				?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing consus-home__k__t2Nlu9nmmn-spacing consus-local-163-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer consus-home__k__t2Nlu9nmmn-outer consus-local-163-outer kubio-button-container" data-kubio="kubio/read-more-button" id="read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link consus-home__k__t2Nlu9nmmn-link consus-local-163-link h-w-100 h-global-transition" href="<?php echo esc_url( get_the_permalink() ); ?>">
						<span class="h-svg-icon wp-block-kubio-read-more-button__icon consus-home__k__t2Nlu9nmmn-icon consus-local-163-icon" name="font-awesome/minus">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="minus" viewBox="0 0 1408 1896.0833">
								<path d="M1408 736v192q0 40-28 68t-68 28H96q-40 0-68-28T0 928V736q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg>
							</span>
							<span class="position-relative wp-block-kubio-read-more-button__text consus-home__k__t2Nlu9nmmn-text consus-local-163-text kubio-inherit-typography">
								<?php esc_html_e( 'Read more', 'consus' ); ?>
							</span>
						</a>
					</span>
				</div>
			</div>
		</div>
	</div>
