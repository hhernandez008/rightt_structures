<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<style type="text/css">
	.current{color: #a7a9ac!important;}
</style>
     <footer>
			<div class="container footer-deg">
				<div class="row">
					<div class="col-md-6 address">
						<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-5' ); ?>
            <?php endif; ?>
					</div>
					<div class="col-md-6 copyright">
						<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-6' ); ?>
            <?php endif; ?>
					</div>
				</div>
			</div>
		</footer>
<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

jQuery(document).ready(function() {
  jQuery("#toggle").click(function() {
    var elem = jQuery("#toggle").text();
    if (elem == "See How Rightt Structures Met the Challenge") {

      jQuery("#toggle").text("read less story");

     jQuery(".full_con").slideDown();

    } else {

      jQuery("#toggle").text("See How Rightt Structures Met the Challenge");
      jQuery(".full_con").slideUp();

    }
  });
});

jQuery(document).ready(function() {
	jQuery('div.menu-mobile_inner-container ul#menu').unwrap();
  jQuery('ul#menu').append("<p>949.494.6600 |<a href='mailto:info@righttstructuresinc.com' target='_blank' rel='noopener'>info@righttstructuresinc.com</a></p>");
 /* jQuery("#menuToggle").click(function(){

    jQuery("#menuToggle input:checked span").css('background','#fff!important');

  });*/


});
jQuery(document).ready(function() {
	var url= window.location.href;
	 var about = url.includes("about");
	 var services = url.includes("services");
	 var projects = url.includes("projects");
  if(about==true){
  	jQuery('#menu-item-28 a').addClass('current')
  }
  if(services==true){
  	jQuery('#menu-item-27 a').addClass('current')
  }
  if(projects==true){
  jQuery('#menu-item-26 a').addClass('current')
  }

});
</script>

</body>
</html>
