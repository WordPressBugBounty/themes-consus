<div class="<?php consus_print_archive_entry_class( 'wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container consus-search__k__fx1L_l5Ny--container consus-local-838-container d-flex   ' ); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner consus-search__k__fx1L_l5Ny--inner consus-local-838-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-3 h-px-md-3 v-inner-md-3 h-px-3 v-inner-3">
		<div class="position-relative wp-block-kubio-query-loop-item__align consus-search__k__fx1L_l5Ny--align consus-local-838-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container consus-search__k__6duco09NdG-container consus-local-839-container kubio-post-featured-image--has-image h-aspect-ratio--4-3 <?php consus_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if ( has_post_thumbnail() ) : ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image consus-search__k__6duco09NdG-image consus-local-g1cYONRpGR-image' src='<?php echo esc_url( get_the_post_thumbnail_url() ); ?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner consus-search__k__6duco09NdG-inner consus-local-839-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align consus-search__k__6duco09NdG-align consus-local-839-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container consus-search__k__-DAcGXV_T-container consus-local-840-container kubio-post-categories-container" data-kubio="kubio/post-categories">
				<div class="position-relative wp-block-kubio-post-categories__placeholder consus-search__k__-DAcGXV_T-placeholder consus-local-840-placeholder kubio-post-categories-placeholder"></div>
				<div class="position-relative wp-block-kubio-post-categories__tags consus-search__k__-DAcGXV_T-tags consus-local-840-tags">
					<?php consus_categories_list( __( 'No category  ', 'consus' ) ); ?>
				</div>
			</div>
			<a class="position-relative wp-block-kubio-post-title__link consus-search__k__yndIzn0LAb-link consus-local-841-link d-block" href="<?php echo esc_url( get_the_permalink() ); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container consus-search__k__yndIzn0LAb-container consus-local-841-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer consus-search__k__Xy3_sNqX1-metaDataContainer consus-local-842-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
				<span class="metadata-item">
					<a href="<?php echo esc_url( get_day_link( get_post_time( 'Y' ), get_post_time( 'm' ), get_post_time( 'j' ) ) ); ?>">
						<?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
					</a>
				</span>
			</div>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text consus-search__k__fVTtKcA3Zp-text consus-local-843-text" data-kubio="kubio/post-excerpt">
				<?php
				consus_post_excerpt(
					array(
						'max_length' => 16,
					)
				);
				?>
			</p>
		</div>
	</div>
</div>
