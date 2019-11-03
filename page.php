<?php get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			// echo $wp_query->post->post_name;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				$page_type = get_post_meta(get_the_ID(), 'page_type', true);

        if ($page_type === 'team_index') {
          get_template_part('template-parts/pages/team_index');
        } else if ($page_type === 'team_show') {
          get_template_part('template-parts/pages/team_show');
        } else {
          get_template_part('template-parts/content/content', 'page');
        }

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
