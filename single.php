<?php
/**
 * Displays a Single Post
 */

get_header(); ?>

	
<div id="main-wrapper">
<div id="main">
<div class="page-content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
     <div id="page-heading">
      <h1><?php the_title()?></h1>
     </div><!-- / page content -->

   <div id="page-text">
    <?php the_content(); ?>
   </div><!-- / page-text -->

</div><!-- / page content -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>