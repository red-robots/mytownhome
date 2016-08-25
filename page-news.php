<?php 
/*
* Template Name: News
*
*
*
*/
get_header(); ?>

<div id="main-wrapper">
<div id="main">



	<div class="page-content">
		<div id="page-heading">
	     	<h1><?php the_title()?></h1>
	     </div><!-- / page content -->
	<?php
		$wp_query = new WP_Query();
		$wp_query->query(array(
		'post_type'=>'post',
		'posts_per_page' => 10,
		'paged' => $paged,
	));
		if ($wp_query->have_posts()) : ?>
	    <?php while ($wp_query->have_posts()) : ?>
	        
	    <?php $wp_query->the_post(); ?>	

				<article class="blogpost">
				     <div id="page-heading">
				     	<h2><?php the_title()?></h2>
				     </div><!-- / page content -->

					 <div id="page-text">
					 	<?php the_content(); ?>
					 </div><!-- / page-text -->

					 <div class="readmore">
					 	<a href="<?php the_permalink(); ?>">Read More &raquo;</a>
					 </div>
				 </article>

			 <?php endwhile; ?>
		<?php pagi_posts_nav(); ?>
	<?php else: ?>
		<br><br><br><br><br><br><br>
		<p>News Coming Soon!</p>
		<br><br><br><br><br><br><br>
	<?php endif; ?>

	</div><!-- / page content -->


<?php get_footer(); ?>