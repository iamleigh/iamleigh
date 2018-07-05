<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package I'm Leigh
 * @since 1.0
 * @version 1.0
 */
?>

			</section>

			<footer class="iamui-footer">

				<div class="iamui-footer--cta">

					<div class="iamui-container">

						<p class="iamui-cta--text"><?php esc_html_e( "Let's talk about your project", 'iamleigh' ); ?></p>

						<?php include_once ABSPATH . 'wp-admin/includes/plugin.php'; ?>

						<?php if ( is_plugin_active( 'forminator/forminator.php' ) ) { ?>

							<button class="iamui-button iamui-button--cyan iamui-cta--button iamui-modal--open" data-modal="footer-popup-contact"><?php esc_html_e( "Let's Engage", 'iamleigh' ); ?></button>

						<?php } else { ?>

							<a href="mailto:leighton@pandamints.com" class="iamui-button iamui-button--cyan iamui-cta--button"><?php esc_html_e( "Let's Engage", 'iamleigh' ); ?></a>

						<?php } ?>

					</div>

				</div>

				<div class="iamui-footer--copy">

					<div class="iamui-container">

						<div class="iamui-row">

							<div class="iamui-col col-12 col-md-6">

								<p><?php printf( __( '%s © Leighton Sapir', 'iamleigh' ), date('Y') ); ?></p>

							</div>

							<div class="iamui-col col-12 col-md-6">

								<?php if ( has_nav_menu( 'footer' ) ) : ?>

									<nav class="iamui-navigation--footer" role="navigation">

										<?php
										wp_nav_menu( array(
											'theme_location' => 'footer',
											'menu_id'        => 'iamui-nav--footer',
										) );
										?>

									</nav>

								<?php endif; ?>

							</div>

						</div>

					</div>

				</div>

			</footer>

		</div>

		<?php if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) { ?>

			<?php get_template_part( 'template-parts/modals/modal', 'contact' ); ?>

		<?php } ?>

		<?php wp_footer(); ?>

	</body>

</html>
