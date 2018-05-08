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
		<h2>Judges</h2>
		<div class="row">
			<?php
					// check if the repeater field has rows of data
				if( have_rows('judges') ):
					// loop through the rows of data
				while ( have_rows('judges') ) : the_row();
			        // display a sub field value
			?>
				<div class="columns large-10 large-offset-1 medium-12">
					<a target="_blank" rel="noopener noreferrer" class="name" href="<?php the_sub_field('imdb_link');?>">
						<h3><?php the_sub_field('judges_name');?></h3>
					</a>
					<img src="<?php the_sub_field('judges_portrait');?>" alt="<?php echo $image['alt'] ?>" />
					<p class="bio"><?php the_sub_field('judges_bio');?></p>
					<a target="_blank" rel="noopener noreferrer" class="imdb" href="<?php the_sub_field('imdb_link');?>"><i class="fab fa-imdb"></i></a>
				</div>
			<?php
				endwhile;
				else :
					// no rows found
				endif;
			?>
		</div>
	</section>

	<section class="prizes">
		prizes
	</section>

<?php get_footer(); ?>
