<?php
/*
Template Name: New Home
*/
	get_header();
?>

<!-- Opening Image & Vision -->
<section class="opener">
	<div class="container">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php the_content(); ?>
			<!-- Need to figure out how the seperate the image and the quote in the
		  contnet so that I can apply different classes and formatting. -->
		<div class="banner-img">
			<!-- Image full width -->

		</div>
		<div class="slogan">


		</div>
	<?php endwhile;
	wp_reset_postdata();
	?>
	</div>
</section>

<!-- Images and links to ARE sections -->
<!-- <section class="services-img">
	<div class="container">
		<div class="row">

			<?php $args = array('post_type' => 'projects','posts_per_page' =>9,'order'=>'ASC','project_category'=>'primary'); ?>
			<?php $loop = new WP_Query($args); ?>
			<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="col-md-4 serv-dir">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo get_field('featured_image_for_primary_projects',get_the_ID()); ?>">

						<div class="serv-text">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="overlay">

							<img src='<?php echo get_field('overlay_image',get_the_ID()); ?>' alt="Avatar">
						</div>
					</a>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>


		</div>
	</div>
</section> -->

<!-- Company info/description -->
<!-- <section class="website-descrip">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				<?php
					wp_reset_query(); // necessary to reset query
					while ( have_posts() ) : the_post();
					the_content();
					endwhile; // End of the loop.
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</section> -->
<?php get_footer(); ?>
