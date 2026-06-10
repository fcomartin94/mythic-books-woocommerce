<div class="<?php moontopia_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container moontopia-index__k__fx1L_l5Ny--container moontopia-local-369-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner moontopia-index__k__fx1L_l5Ny--inner moontopia-local-369-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-3 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align moontopia-index__k__fx1L_l5Ny--align moontopia-local-369-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container moontopia-index__k__6duco09NdG-container moontopia-local-370-container h-aspect-ratio--4-3 <?php moontopia_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image moontopia-index__k__6duco09NdG-image moontopia-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner moontopia-index__k__6duco09NdG-inner moontopia-local-370-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align moontopia-index__k__6duco09NdG-align moontopia-local-370-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<a class="position-relative wp-block-kubio-post-title__link moontopia-index__k__yndIzn0LAb-link moontopia-local-371-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container moontopia-index__k__yndIzn0LAb-container moontopia-local-371-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text moontopia-index__k__fVTtKcA3Zp-text moontopia-local-372-text" data-kubio="kubio/post-excerpt">
				<?php moontopia_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing moontopia-index__k__QwnTNmQZpe-spacing moontopia-local-373-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer moontopia-index__k__QwnTNmQZpe-outer moontopia-local-373-outer kubio-button-container" data-kubio="kubio/read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link moontopia-index__k__QwnTNmQZpe-link moontopia-local-373-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
						<span class="position-relative wp-block-kubio-read-more-button__text moontopia-index__k__QwnTNmQZpe-text moontopia-local-373-text kubio-inherit-typography">
							<?php esc_html_e('Read more', 'moontopia'); ?>
						</span>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
