<?php /* Template Name: Template - About */ get_header(); ?>

	<section class="hero">
		<div class="row">

			<div class="columns large-12">
				<h1><?php wp_title(''); ?></h1>
			</div>

		</div>
	</section>

	<section class="rules">
		<?php the_field('rules'); ?>
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


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php 

			$value = get_field( "page-title" );

			if( $value ) {

				echo $value;

			} else {

				echo 'empty';

			}

		?>

		<h1><?php $value = get_field( "page-title" ); ?></h1>
		<?php the_content(); ?>

		<?php endwhile; ?>

		<?php else: ?>

		<h2><?php _e( 'Error', 'html5blank' ); ?></h2>

	<?php endif; ?>


<?php get_footer(); ?>
