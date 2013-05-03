<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="wrapper">
		<div id="content" role="main">
            <article class="hentry">
                <div class="entry-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
                </div>
            </article>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>