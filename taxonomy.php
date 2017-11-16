<?php

/**

* A Simple Category Template

*/



get_header(); ?> 
<div id="main2">
  <div class="page-content">
  <!-- -->
      
    <div id="page-heading">
      <h1><?php printf( __( '%s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
    </div><!-- page heading -->

    <div id="page-text">

    <?php 
    $recent = new WP_Query("page_id=10"); 
    while($recent->have_posts()) : $recent->the_post();
    ?>
    <?php the_content(); ?>
    <?php endwhile; 
    wp_reset_postdata(); // end of the loop. ?> 
    </div><!-- page text  -->
       
  <?php get_template_part("inc/filter","bar");?>

  <?php

  /* Start the Loop 


  */

  while ( have_posts() ) : the_post(); ?>
    <div class="community-box js-blocks">
  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php 
    $image = get_field('featured_photo');
    $size = 'communities-gallery';
    if( !empty($image) ): ?>
      <?php echo wp_get_attachment_image( $image, $size ); ?>
    <?php endif; ?>
    
    <div class="communities-box-title">
      <?php the_title(); ?>
       <span class="price-range">
        <?php the_field("price_range"); ?>
       </span>
    </div><!-- community-box title -->

  </div><!-- community-box -->
  <?php endwhile;?>

  <div class="clear"></div>
  <?php pagi_posts_nav(); ?>

  </div><!-- #page content -->
</div><!-- #container -->
<?php get_footer(); ?>