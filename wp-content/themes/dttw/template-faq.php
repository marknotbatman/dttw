<?php /* Template Name: Template - FAQ */ get_header(); ?>

	<section class="hero">
		<div class="row">

			<div class="columns large-12 center">
				<h1><?php wp_title(''); ?></h1>
			</div>

		</div>
	</section>

	<section class="faq">
		<?php

		// check if the repeater field has rows of data
		if( have_rows('faqs') ):

		// loop through the rows of data
		while ( have_rows('faqs') ) : the_row();

        // display a sub field value
		?>

		<strong><?php the_sub_field('question');?></strong>
		
		<p><?php the_sub_field('answer');?></p>
		
		<?php

		endwhile;

		else :

   		// no rows found

		endif;

		?>
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
