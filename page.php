<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package I'm Leigh
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="iamui-container">

    <main class="iamui-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            
            <article class="iamui-article"><?php the_content(); ?></article>

		<?php endwhile; ?>

    </main>

</div>

<?php get_footer(); ?>