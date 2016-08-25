<?php

/**

* A Simple Category Template

*/



get_header(); ?> 

<div id="main2">
  <div class="page-content">

  <div id="page-heading">
    <h1>
      <?php printf( __( '%s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
    </h1>
  </div><!-- page-heading -->



  <div id="page-text">
    <?php 
    $recent = new WP_Query("page_id=10"); 
    while($recent->have_posts()) : 
      $recent->the_post();
       the_content(); 

    endwhile; wp_reset_postdata(); // end of the loop. ?>	

  </div><!-- page text  -->

  <div id="filter-by"><h2>Filter by Neighborhood</h2></div>

  <div id="filter-by-categories">
    <ul>
      <li>
        <a href="<?php bloginfo('url'); ?>/townhome-communities">ALL</a>
      </li>
      <?php wp_list_cats('sort_column=name') ?>
    </ul>
  </div><!-- filter-by-categories -->

  <section class="community">
  <?php
  while ( have_posts() ) : the_post(); ?>

  

  <div class="community-box">
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

  </section>

  <div class="clear"></div>

  <?php pagi_posts_nav(); ?>

  </div><!-- #content -->

</div><!-- #main 2 -->



<?php get_footer(); ?>