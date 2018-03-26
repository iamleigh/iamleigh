<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section and everything up
 *
 * @package I'm Leigh
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); ?>

	</head>

	<body <?php body_class( 'iam-ui' ); ?>>

		<div class="iamui-wrapper">

			<header class="iamui-header">

				<div class="iamui-container">

					<div class="iamui-header--logo" aria-hidden="true">

						<?php get_template_part( "template-parts/svg/iamui", "logo" ); ?>

						<p class="iamui-logo--description"><?php _e( 'UI/UX <strong>Designer</strong> <strong>•</strong> Full Stack <strong>Developer</strong>', 'iamleigh' ); ?></p>

					</div>

					<h1 class="iamui-screen-reader"><?php _e( 'Leighton Sapir, Personal Website', 'iamleigh' ); ?></h1>

					<?php if ( is_front_page() ) { ?>
						
						<h2 class="iamui-header--subtitle"><?php _e( 'Hey there, I\'m Leigh.<br />I create amazing digital experiences.', 'iamleigh' ); ?></h2>

					<?php } else {
						
						global $post;

						echo '<h2 class="iamui-header--title">' . get_the_title( $post->ID ) . '</h2>';

					} ?>

					<?php if ( has_nav_menu( 'header' ) ) : ?>

						<nav class="iamui-navigation--header" role="navigation">
							
							<?php wp_nav_menu( array(
								'theme_location' => 'header',
								'menu_id'        => 'iamui-nav--header',
							) ); ?>

						</nav>
						
					<?php endif; ?>

				</div>

			</header>

			<section class="iamui-section">