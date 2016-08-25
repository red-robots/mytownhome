<?php 
/**
* Template Name: Property Search
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="main-wrapper">
<div id="main2">



<div class="page-content">

<div id="main"><h1><?php the_title()?></h1></div>

<?php the_content()?>

<!-- -->
<p>&nbsp;
<iframe src="http://mytownhome.localhomesearch.net/map/" width="100%" height="1200" frameborder="0"></iframe>
<!-- <iframe src="http://mytownhome.localhomesearch.net/idx/" width="100%" height="2000" frameborder="0"></iframe>-->



<!-- -->

<!-- -->

<!-- content -->

<!-- / content -->


<!-- -->




</div><!-- / page content -->





<?php endwhile; endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>