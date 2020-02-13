<?php
/*
Template Name: Project Page
*/

get_header('about');
?>
<style type="text/css">
    .sin-case a:hover{ text-decoration:none; }

	@media (max-width: 459px) {
/* 		.projects .project-deg {
			height: 143%;
		} */
/* 		.caseStudy {
			margin-top: 8em;
		} */
	}

</style>
 <section class="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-4 proj-side">
                    <div class="project-deg">
						<img src="../wp-content/uploads/2018/08/back-text.jpg">
						<div class="project-texty">
	                        <h1>Projects</h1>
						</div>

                    </div>
<!--                     <div class="project-text">
                        <h3>CONTACT</h3>
                        <p>668 North Coast Highway, Suite 240
                        Laguna Beach, California 92651</p>

                        <p>949.494.6600 | info@righttstructuresinc.com</p>

                        <h3>AFFILIATIONS</h3>
                        <p>LaBruna Construction, Inc.
                        American Institue of Architects</p>
                    </div> -->
                </div>
                <div class="col-md-8 proj-side">
                    <div class="caseStudy">

                        <div class="row case-study">
                                <?php $args = array('post_type' => 'projects','posts_per_page' => 10,'order'=>'ASC','project_category'=>'secoandry'); ?>
 <?php $loop = new WP_Query($args);
?>
  <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
  $id=get_the_ID();
    ?>

                    <div class="col-md-4 sin-case">
                        <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_field('featured_image_for_primary_projects',get_the_id()); ?>">
<!--                                 <h2>01</h2> -->
                                <p><?php the_title(); ?></p>

                        </a>
                        </div>
                        <?php

                    endwhile; ?>
                      <?php endif; ?>
                        <?php wp_reset_postdata(); ?>


                        </div>
                    </div>
<!--                     <div class="waterPapers">
                        <h3>WHITE PAPERS (PDF)</h3>
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/water.jpg">
                                <p>The Benefits of Design Build</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/water.jpg">
                                <p>Paper Title</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/water.jpg">
                                <p>Paper Title</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/water.jpg">
                                <p>Paper Title</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
