<?php 
/**
* Template Name: Two Column
*/
 get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="main-wrapper">
<div id="main2">



<div class="page-content">

     <div id="page-heading"><h1><?php the_title()?></h1></div>

 <div id="page-text-left"><?php the_content(); ?></div>
     


<div id="page-right-column">


<div id="sub-home-search">
<div id="sub-home-search-padding">

<?php the_field("right_column"); ?>

</div>
</div>


</div>





 </div><!-- / page content -->





<?php endwhile; endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>