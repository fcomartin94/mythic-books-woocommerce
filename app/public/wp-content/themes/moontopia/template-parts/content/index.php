<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer moontopia-index__k__1MCYzfcZN-outer moontopia-local-364-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner moontopia-index__k__1MCYzfcZN-inner moontopia-local-364-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container moontopia-index__k__baLWB4dRKjp-container moontopia-local-365-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner moontopia-index__k__baLWB4dRKjp-inner moontopia-local-365-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container moontopia-index__k__kxeqsSpdy-n-container moontopia-local-366-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner moontopia-index__k__kxeqsSpdy-n-inner moontopia-local-366-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align moontopia-index__k__kxeqsSpdy-n-align moontopia-local-366-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container moontopia-index__k__CtKC_EuIZL-container moontopia-local-367-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container moontopia-index__k__vrf0UGkWrN-container moontopia-local-368-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-2 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner moontopia-index__k__vrf0UGkWrN-inner moontopia-local-368-inner h-row">
										<?php moontopia_theme()->get('archive-loop')->render(array (
  'view' => 'content/index/loop-item',
)); ?>
									</div>
								</div>
								<?php if(moontopia_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container moontopia-index__k__vD7AVCTELY-container moontopia-local-374-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner moontopia-index__k__vD7AVCTELY-inner moontopia-local-374-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container moontopia-index__k__tBYU0uM8Xx-container moontopia-local-375-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner moontopia-index__k__tBYU0uM8Xx-inner moontopia-local-375-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align moontopia-index__k__tBYU0uM8Xx-align moontopia-local-375-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(moontopia_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing moontopia-index__k__ELgmeRXRD--spacing moontopia-local-376-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer moontopia-index__k__ELgmeRXRD--outer moontopia-local-376-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link moontopia-index__k__ELgmeRXRD--link moontopia-local-376-link h-w-100 h-global-transition" href="<?php moontopia_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text moontopia-index__k__ELgmeRXRD--text moontopia-local-376-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'moontopia'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container moontopia-index__k__P2OarhUKUK-container moontopia-local-377-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner moontopia-index__k__P2OarhUKUK-inner moontopia-local-377-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align moontopia-index__k__P2OarhUKUK-align moontopia-local-377-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer moontopia-index__k__tRiQFlrj8q-outer moontopia-local-378-outer" data-kubio="kubio/pagination-numbers">
														<?php moontopia_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container moontopia-index__k__2nd5yuWmz9-container moontopia-local-379-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner moontopia-index__k__2nd5yuWmz9-inner moontopia-local-379-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align moontopia-index__k__2nd5yuWmz9-align moontopia-local-379-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(moontopia_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing moontopia-index__k__ELgmeRXRD--spacing moontopia-local-380-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer moontopia-index__k__ELgmeRXRD--outer moontopia-local-380-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link moontopia-index__k__ELgmeRXRD--link moontopia-local-380-link h-w-100 h-global-transition" href="<?php moontopia_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text moontopia-index__k__ELgmeRXRD--text moontopia-local-380-text kubio-inherit-typography">
																	<?php esc_html_e('Next', 'moontopia'); ?>
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
