<?php
/*
Template Name: Archives
*/
get_header(); ?>
	<div id="main">

<div class="page-content">



<div id="news-events">


<h1>Archives</h1>

<?php while(have_posts()) : the_post(); ?>


<?php the_date('M, Y'); ?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>



    
<?php endwhile; ?>
<div class="clear"></div>
 <?php pagi_posts_nav(); ?>

<!-- -->



</div>
<!-- -->

<!-- sidebar -->

<div id="news-sidebar" style="margin-top: 24px;">

<div id="newsletters-box">

<h2>Most Recent Posts</h2>

<!-- -->

<?php
//echo $postid;

	$wp_query = new WP_Query();

	$wp_query->query(array(

	'post_type'=>'post',
	'cat'=> 1,

	'posts_per_page' => 6,

	'paged' => $paged,
	'post__not_in' => array($postid)

));

	if ($wp_query->have_posts()) : ?>

    <?php while ($wp_query->have_posts()) : ?>

        
<?php $wp_query->the_post(); ?>


<div class="quick-link"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>

<?php endwhile; endif; ?>
 
 <p>&nbsp;

<h2>Archives</h2>
<div style="float: left; width: 100%;">
<ul>
<?php wp_get_archives('type=yearly'); ?>
</ul>

<!-- -->
</div>
</div>
</div>

<!-- / sidebar -->

<div class="staff-bottom-content">
<h2>Monthly Archives</h2>
<ul class="archives"><?php wp_get_archives('type=monthly&show_post_count=1') ?></ul>

</div>

	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>