<div class="<?php moontopia_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container moontopia-search__k__fx1L_l5Ny--container moontopia-local-578-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner moontopia-search__k__fx1L_l5Ny--inner moontopia-local-578-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align moontopia-search__k__fx1L_l5Ny--align moontopia-local-578-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container moontopia-search__k__6duco09NdG-container moontopia-local-579-container h-aspect-ratio--4-3 <?php moontopia_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image moontopia-search__k__6duco09NdG-image moontopia-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner moontopia-search__k__6duco09NdG-inner moontopia-local-579-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align moontopia-search__k__6duco09NdG-align moontopia-local-579-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<a class="position-relative wp-block-kubio-post-title__link moontopia-search__k__yndIzn0LAb-link moontopia-local-580-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container moontopia-search__k__yndIzn0LAb-container moontopia-local-580-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer moontopia-search__k__KGesgqe_P-metaDataContainer moontopia-local-581-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
				<span class="metadata-item">
					<span class="metadata-prefix">
						<?php esc_html_e('Posted by', 'moontopia'); ?>
					</span>
					<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
						<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
					</a>
				</span>
				<span class="metadata-separator">
					-
				</span>
				<span class="metadata-item">
					<span class="metadata-prefix">
						<?php esc_html_e('Last updated on', 'moontopia'); ?>
					</span>
					<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
						<?php echo esc_html(get_the_date('F j, Y')); ?>
					</a>
				</span>
			</div>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text moontopia-search__k__fVTtKcA3Zp-text moontopia-local-582-text" data-kubio="kubio/post-excerpt">
				<?php moontopia_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
		</div>
	</div>
</div>
