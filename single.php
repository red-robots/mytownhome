<?php
/**
 * Displays a Single Post
 */

get_header(); ?>

	
<div id="main-wrapper">

<div id="main">




<div class="page-content">



<div id="news-events">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="communities-heading-photo">
<?php
  $image = get_field('featured_photo');
    $size = 'large';
    if( !empty($image) ): ?>
      <?php echo wp_get_attachment_image( $image, $size ); ?>
    <?php endif; ?>

<div id="communities-heading-link"><a href="#listings">View Listings</a></div>

<div id="communities-title-box"><div id="page-heading"><h2><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h2>
<h1><?php the_title()?></h1></div>
<div style="font-size: 14px; color: #ffffff;"><?php the_field("short_description"); ?></div>
</div>

</div>



 <div id="page-text"><?php the_content(); ?></div>
 
 <div id="features-row">
 
<div id="features"> 


<?php echo do_shortcode("[tabby title='Overview']"); ?>

<div class="tab-content">

<?php the_field("map_&_location"); ?>
<!-- MAP  --> 

<p><?php 
$location = get_field('google_map');
if( !empty($location) ):
?>

<div class="acf-map" style="margin-top: 20px; margin-bottom: 30px; float: left;">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">

   <h4><?php the_title(); ?></h4>
<p class="address"><?php echo $location['address']; ?></p>

   </div>

</div>

<?php endif; ?>

<!-- end map -->      



</div>

<!--- / tab -->
<!-- -->
<?php if (strlen(get_post_meta($post->ID, "overview", true)) > 0) : ?>
<?php echo do_shortcode("[tabby title='Features']"); ?>

<div class="tab-content">
<?php the_field("overview"); ?></div>
 <!--- / tab -->	
<?php endif; ?>
<!-- -->


<!-- -->
<?php if (strlen(get_post_meta($post->ID, "floorplans_&_downloads", true)) > 0) : ?>
<?php echo do_shortcode("[tabby title='Floorplans & Documents']"); ?>

<div class="tab-content">
<?php the_field("floorplans_&_downloads"); ?></div>

 <!--- / tab -->	
<?php endif; ?>
<!-- -->


<!-- -->
<?php if (strlen(get_post_meta($post->ID, "pricing_analysis", true)) > 0) : ?>
<?php echo do_shortcode("[tabby title='Pricing Analysis']"); ?>

<div class="tab-content">
<?php the_field("pricing_analysis"); ?></div>

 <!--- / tab -->	
<?php endif; ?>
<!-- -->




<?php echo do_shortcode("[tabbyending]"); ?> 
</div>



<div id="features-agents">

<h2>Community Realtor</h2>
<!-- realtor -->


<div id="community-realtors">



        <div class="community-realtor">
        


<?php
// Communities 
$myField = get_field('community_realtor'); 

// echo '<pre>';
// print_r($myField);
// echo '</pre>';


foreach($myField as $myTemp) :

   // get the id
  $userID = $myTemp['ID'];

  $myUser = get_userdata($userID);
  $displayName = $myUser->display_name;
  $phone = get_field( 'office_phone', 'user_'.$userID );
  $email = get_field( 'email', 'user_'.$userID );   
  $antispam = antispambot($email);
  // image stuff
  $image = get_field( 'photo', 'user_'.$userID );
  $size = 'single_agent';
  $thumb = $image['sizes'][ $size ];

  $link = get_author_posts_url($userID);





echo '<div class="communities-agents-photo">';
//echo '<a href="';
//echo $link;
//echo '">';
echo '<img src="';
print_r($thumb);
echo '" />';
//echo '</a>';
echo '</div>';



echo '<h2 class="community-realtor-name">';
//echo '<a href="';
//echo $link;
//echo '">';

echo $displayName;
//echo '</a>';
echo '</h2>';


echo '<h2 class="community-realtor-email">';
//echo '<a href="mailto:';
//echo $antispam;
//echo '">';

//echo $antispam;
//echo '</a>';
echo '</h2>';


echo '<h2>';
echo $phone;
echo '</h2>';

	
endforeach;
?>

<div id="community-more-info-button"><a class='inline' href="#inline_content">Request a Brochure</a></div>


<!-- -->


<div style="display: none">

<div id="inline_content" >
<h2>Request a Brochure</h2>
<?php the_field("request_a_brochure"); ?>
</div>

</div>

<!-- -->
</div>  



  
</div>

</div>

</div><!--- / features row -->



 
 <div id="communities-gallery">
 
 <?php 

$images = get_field('gallery');

if( $images ): ?>
<h2>Photo Gallery</h2>
        <?php foreach( $images as $image ): ?>
            <div class="community-gallery-photo">
                <a href="<?php echo $image['url']; ?>" class="group1">
                     <img src="<?php echo $image['sizes']['communities-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </div>
        <?php endforeach; ?>

<?php endif; ?>
</div>

     


</div>



</div>

</div>

<div id="main2">

<!-- -->
<div id="communities-listings"><!-- -->

<?php if (strlen(get_post_meta($post->ID, "current_listings", true)) > 0) : ?>     
<div id="current-listings-header"><a name="listings"></a><h2>Current Listings</h2></div>
<div id="current-listings-frame">
<?php the_field("current_listings"); ?>
</div>
<?php endif; ?>


<!-- -->
<div id="bottom-link">view all <?php the_category( ', ' ); ?> communities &nbsp;&nbsp; | &nbsp;&nbsp; <a href="<?php bloginfo('url'); ?>/townhome-communities/">view all communities</a></div>


</div>     
        




<?php endwhile; endif; ?>   
<!-- -->




<?php get_footer(); ?>