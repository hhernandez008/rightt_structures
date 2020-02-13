<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header('about'); ?>
<style type="text/css">
	.full_con{
display:none;
}
.btn-container{
  margin: auto;
  height:32px;
  width:100%;

}
a:active{
  color:#ffd323;
}
button.toggles{
  user-select:none;
  -webkit-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  cursor:pointer;
  border:none;
   font-size: 18px;
    font-weight: 400;
   color: #524e26;
  background-color: #fff;
  font-family: 'Signika', sans-serif;
  box-sizing:none;
  padding:0px;
}
 button:focus {outline:none;}
</style>
    <section class="case-banner">
        <div class="banner" style="background-image: url('<?php echo get_field('banner_image',get_the_ID()); ?>');">
            <!-- <img src="images/access.jpg"> -->
            <!-- <div class="case-name"> -->
              <?php
                $id=get_the_ID();

                        if($id=='38'|| $id=='40' || $id=='42'){
                     ?>
                <h1><?php the_title(); ?></h1>

              <?php }else{ ?>
             <h1 style="display: none;"><?php the_title(); ?></h1>
              <?php } ?>
            <!-- </div> -->

        </div>
    </section>

    <section class="are-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12 aree-des">
            <div class="row">
              <div class="col-md-6 des1">
                <?php if (have_posts()) :
                  while (have_posts()) :
                  the_post();
                  the_content();
                  endwhile;
                  endif;
                ?>
              </div>
              <div class="col-md-6 des2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="are-long">
        <div class="container">

            <?php $case_studies_title= get_field('case_studies_title',get_the_ID());
                  $case_studies_sub_title= get_field('case_studies_sub_title',get_the_ID());
                  $case_studies_description= get_field('case_studies_description',get_the_ID());
                  $case_studies_description_before_read_more= get_field('case_studies_description_before_read_more',get_the_ID());
                  $case_studies_sidebar= get_field('case_studies_sidebar',get_the_ID());
                  ?>


              <div class="row">
                <div class="col-md-12 are-title">
                    <h3><?php echo $case_studies_title; ?></h3>
                    <span><?php echo $case_studies_sub_title; ?></span>
                </div>
                <div class="col-md-5 are-frame are-frame1">
               <?php echo $case_studies_sidebar; ?>
                </div>
                <div class="col-md-7 are-desp">
                    <div class="less_con">
                        <?php echo $case_studies_description_before_read_more; ?>
                    </div>
                    <div class="full_con">
                     <?php echo  $case_studies_description; ?>
                   </div>
                    <div class="btn-container">
                      <!--a href="#" id="toggle">&#60;read full story&#62;</-->
                      <p>&#60;<button id="toggle<?php echo $count;?>" class="toggles">See How Rightt Structures Met the Challenge</button>&#62;</p>
                    </div>
                </div>

                <div class="col-md-5 are-frame are-frame2">
               <?php echo $case_studies_sidebar; ?>
                </div>
            </div>


        </div>
    </section>

    <section class="are-imgs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

          <?php $large_images= get_field('large_images',get_the_ID());
          //print_r($large_images);
          //die();
                      foreach ($large_images as $value) { ?>
                    <div class="are-img">
                        <img src="<?php echo $value['full_image']['url'];?>">
                        <p><?php echo $value['image_caption']; ?></p>
                    </div>
                    <?php
                          }
                    ?>

                </div>



          <?php $large_images= get_field('bottom_images',get_the_ID());
          //print_r($large_images);
         // die();
                      foreach ($large_images as $values) { ?>
                        <div class="col-md-6">
                    <div class="are-img">
                        <img src="<?php echo $values['bottom_image']['url'];?>">
                        <p><?php echo $values['caption']; ?></p>
                    </div>
                    </div>
                    <?php
                          }
                    ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
