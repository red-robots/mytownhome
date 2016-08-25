<?php
/**
 * Displays a Single Our Agents Post
 */

get_header(); ?>

	
<div id="main-wrapper">

<div id="main">




<div class="page-content">



<div id="news-events">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




<div id="page-heading"><h1><?php the_title()?></h1></div>

 <div id="page-text"><?php the_content(); ?></div>
 
<!--- / features -->
 
<?php
$image = get_field('photo');
  $image = get_field('photo');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'agent';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>


<?php endwhile; endif; ?>        


</div>



</div>





<?php get_footer(); ?>