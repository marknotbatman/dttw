<?php /* Template Name: Template - Home */ get_header(); ?>

	<section class="hero">
		<div class="row">

			<div class="columns large-12 center">
				<h1><?php the_field('title-line-1'); ?></h1>
				<h2><?php the_field('title-line-2'); ?></h2>
			</div>

		</div>
	</section>

	<section class="dates">
		dates
	</section>

	<section class="location">
		location
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
