<?php 
/**
* Template Name: Staff
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div id="main2">



<div class="page-content">


<!-- sidebar -->



<!-- executive director -->
<div class="about-us-staff-executive-director-wrapper">


<h1><?php the_title(); ?></h1>

<!-- sidebar -->

<?php $recent = new WP_Query("page_id=789"); while($recent->have_posts()) : $recent->the_post();?>


<div id="page-sidebar" style="background-image: url(<?php the_field("sidebar_background_image"); ?>);">
<div id="page-sidebar-content">
<?php wp_nav_menu( array( 'theme_location' => 'about-subnav' ) ); ?>
</div>
</div> 

<?php endwhile; wp_reset_postdata(); // end of the loop. ?>


<!-- / sidebar -->

<?php the_content(); ?>
    

<!-- sidebar -->

<div class="about-us-staff-executive-director">

<?php
$image = get_field('executive_director_photo');
  $image = get_field('executive_director_photo');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'staff1';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
    <a href="<?php echo $url; ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></a>
<?php endif; ?>



<h2><?php the_field("executive_director_name"); ?></h2>
<h3><?php the_field("executive_director_title"); ?></h3>

<p>
<?php $email = get_field('executive_director_email'); ?>
<a href="mailto:<?php echo antispambot($email); ?>">
  <?php echo antispambot($email); ?></a>

<br><?php the_field("executive_director_phone"); ?></p>

<p><?php the_field("executive_director_more"); ?></p>

</div>




</div>
<!--  / executive director -->



<div class="about-us-staff-wrapper">
<!-- staff members -->
<?php if(get_field('staff_member')): ?>          
<?php while(has_sub_field('staff_member')): ?>

<div class="about-us-staff">

<?php 
$image = get_sub_field('photo');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>


<h2><?php the_sub_field("name"); ?></h2>
<h3><?php the_sub_field("title"); ?></h3>


<?php $email = get_sub_field('email'); ?>
<a href="mailto:<?php echo antispambot($email); ?>">
  <?php echo antispambot($email); ?></a>

  
</div>

<?php endwhile; endif; ?>
<!-- / staff members -->

<div class="staff-bottom-content"><h2>Board of Directors</h2>
<div class="staff-bottom-content-list">

<?php if(get_field('board_of_directors')): ?>          

<?php while(has_sub_field('board_of_directors')): ?>

<div class="board-column"><?php the_sub_field("column"); ?></div>

<?php endwhile; endif; ?>

</div>


<div class="staff-bottom-content2"><?php the_field("bottom_content"); ?></div>

</div>
</div>



 </div><!-- / page content -->





<?php endwhile; endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>