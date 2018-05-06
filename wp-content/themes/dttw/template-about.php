<?php /* Template Name: Template - About */ get_header(); ?>

	<section class="hero">
		<div class="row">

			<div class="columns large-12 center">
				<h1><?php wp_title(''); ?></h1>
			</div>

		</div>
	</section>

	<section class="page-content">
		<div class="row">
			<div class="columns large-10 large-offset-1 medium-12">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<?php the_content(); ?>

					<?php endwhile; ?>

					<?php else: ?>

				<?php endif; ?>			
			</div>
		</div>
	</section>

	<section class="rules">
		<div class="row">
			<div class="columns large-10 large-offset-1 medium-12">
				<?php the_field('rules'); ?>
			</div>
		</div>
		
	</section>
	<section class="deadlines">
		deadlines
	</section>
	<section class="judges">
		judges
	</section>

	<section class="prizes">
		prizes
	</section>

<?php get_footer(); ?>
