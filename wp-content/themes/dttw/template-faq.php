<?php /* Template Name: Template - FAQ */ get_header(); ?>

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

	<section class="copy">
		<div class="row">
			<div class="columns large-10 large-offset-1 medium-12 acf-faq">
				<!-- <h1>FAQs</h1> -->
				<?php
					// check if the repeater field has rows of data
					if( have_rows('faqs') ):
					// loop through the rows of data
					while ( have_rows('faqs') ) : the_row();
			        // display a sub field value
				?>
					<div class="q-a">
						<div class="question">
							<p><?php the_sub_field('question');?></p>
						</div>
						<div class="answer">
							<p><?php the_sub_field('answer');?></p>
						</div>
					</div>
				<?php
					endwhile;
					else :
			   		// no rows found
					endif;
				?>
			</div>
		</div>
	</section>






<?php get_footer(); ?>
