<?php
/*
Template Name: About Page
*/

get_header('about');
?>
<section class="abouts">
  <div class="container">
    <div class="row">
      <div class="col-md-4 proj-side">
        <div class="project-deg">
          <img src="../wp-content/uploads/2018/08/back-text.jpg">
          <div class="project-texty">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="proj_text">
          <p>Steven M. LaBruna, AIA, President & CEO<br>
            <a href="../wp-content/uploads/2018/09/SLcv.pdf">download CV (pdf)</a></p>
          </div>
        </div>
        <div class="col-md-8 about-side">
          <?php
          wp_reset_query(); // necessary to reset query
          while ( have_posts() ) : the_post();
          the_content();
        endwhile; // End of the loop.
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
