<?php 

/**

* Template Name: Communities

*/

 get_header(); ?>

<div id="main-wrapper">

<div id="main2">

<div class="page-content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="page-heading"><h1><?php the_title()?></h1></div>
<div id="page-text"><?php the_content()?></div>
<?php endwhile; endif; ?>


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
          $term_list = '';
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


 

 

 <div id="filter-by-categories-mobile">
  <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

    <?php
    $args = array(
      'show_option_none' => __( 'Select Neighborhood' ),
      'show_count'       => 1,
      'orderby'          => 'name',
      'taxonomy'           => 'neighborhood',
      'name' => 'neighborhood',
      'show_count' => false,
      'echo'             => 0,
      'value_field' => 'slug'
    );
    ?>

    <?php $select  = wp_dropdown_categories( $args ); ?>
    <?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
    <?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>

    <?php echo $select; ?>

    <noscript>
      <input type="submit" value="View" />
    </noscript>

  </form>
 </div>

<section class="comm-flex">
<?php 
$args = array(
  'posts_per_page' => -1,
  'post_type' => 'community'
  );
 $the_query = new WP_Query( $args ); 
  if ($the_query -> have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

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



<?php endwhile; endif; ?>
</section>
</div><!-- / page content -->


<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>