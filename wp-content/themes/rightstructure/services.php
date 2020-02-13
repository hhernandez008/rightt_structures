<?php
/*
Template Name: Service Page
*/

get_header('about');
?>

<style>
	@media (max-width: 459px) {
/* 		.servproj .project-deg {
			height: 143%;
		}
		.servicess {
			margin-top: 8em;
		} */
	}

</style>
<section class="abouts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 servproj proj-side">
                    <div class="project-deg">
						<img src="../wp-content/uploads/2018/08/back-text.jpg">
						<div class="project-texty">
	                        <h1><?php the_title(); ?></h1>
						</div>
                    </div>
                </div>
                <div class="col-md-8 servicess">
                    <div class="services-text">
                       <?php
    wp_reset_query(); // necessary to reset query
    while ( have_posts() ) : the_post();
        the_content();
    endwhile; // End of the loop.
 wp_reset_postdata(); ?>
                        <div class="row services-list">
                            <div class="col-md-6">
                                   <h3>MATERIAL FAILURES</h3>
                                <ul>
                                   <?php $text1= get_field('material_failure',get_the_ID());

                      foreach ($text1 as $texts) { ?>

                        <li><?php echo $texts['material_failures']; ?></li>

                    <?php
                          }
                    ?>
                                </ul>

                           <h3>PREVENTATIVE CARE</h3>
                                <ul>
                                     <?php $text1= get_field('preventative_care',get_the_ID());

                      foreach ($text1 as $texts) { ?>

                        <li><?php echo $texts['preventative_cares']; ?></li>

                    <?php
                          }
                    ?>
                                </ul>


                            </div>
                            <div class="col-md-6">

                               <h3>ASSET MANAGEMENT</h3>
                                <ul>
                                     <?php $text1= get_field('asset_marketability',get_the_ID());

                      foreach ($text1 as $texts) { ?>

                        <li><?php echo $texts['asset_marketabilitys']; ?></li>

                    <?php
                          }
                    ?>
                                </ul>
                                   <h3>CATASTROPHIC Damage</h3>
                                <ul>
                                    <?php $text1= get_field('catastrophic_damage',get_the_ID());

                      foreach ($text1 as $texts) { ?>

                        <li><?php echo $texts['catastrophic_damage']; ?></li>

                    <?php
                          }
                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
