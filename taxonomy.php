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

  <div id="filter-by"><h2>Filter by Neighborhood</h2></div>

  <div id="filter-by-categories">
    <ul>
      <li>
        <a href="<?php bloginfo('url'); ?>/townhome-communities">ALL</a>
      </li>
      <?php //wp_list_cats('sort_column=name') 

      $args = array( 'hide_empty=0' );
 
      $terms = get_terms( 'neighborhood', $args );

      // echo '<pre>';
      // print_r($terms);
      // echo '</pre>';
      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
          // $count = count( $terms );
          // $i = 0;
          //$term_list = '<p class="my_term-archive">';
          foreach ( $terms as $term ) {
              
              $term_list .= '<li>';
               $term_list .= '<a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a>';
             $term_list .= '</li>';
          }
          echo $term_list;
      }

      ?>
    </ul>
  </div>

  <?php

  /* Start the Loop 


  */

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

  <div class="clear"></div>
  <?php pagi_posts_nav(); ?>

  </div><!-- #page content -->
</div><!-- #container -->
<?php get_footer(); ?>