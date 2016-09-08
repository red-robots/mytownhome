<?php
/**
 * The template for displaying Author archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<?php 
// Get the Author Object that contains all the Author's information
$author = get_queried_object();
// From that information, we'll get the ID so we can use it to pull Advanced Custom Fields
// This variable will work for the rest of the page
$author_id = $author->ID; 

// get the email
$registeredEmail = get_the_author_meta( 'user_email', $author_id );
// You can uncomment this out to see what information we have to work with.
/*echo '<pre>';
print_r($author); 
echo '</pre>';*/
// My fields
$communities = get_field( 'favorite_communities', 'user_'.$author_id );
$bio = get_field( 'custom_bio', 'user_'.$author_id );
$vCard = get_field( 'vcard', 'user_'.$author_id );
$agent_office = get_field( 'agent_office', 'user_'.$author_id );
$phone = get_field( 'office_phone', 'user_'.$author_id );
$phone2 = get_field( 'cell_phone', 'user_'.$author_id );
$facebook = get_field( 'facebook_link', 'user_'.$author_id );
$twitter = get_field( 'twitter_link', 'user_'.$author_id );
$youtube = get_field( 'youtube_link', 'user_'.$author_id );
$property_search  = get_field( 'unique_property_search_link', 'user_'.$author_id );	
$my_listings  = get_field( 'my_listings_link', 'user_'.$author_id );								
// Photo stuff  
$image = get_field( 'photo', 'user_'.$author_id );
$size = 'single_agent';
$thumb = $image['sizes'][ $size ];
// email if you add the custom field to the profile
// see above if you want it to be the email tied to the login
$email = get_field( 'email', 'user_'.$author_id );
$antispam = antispambot($email);
?>


<div id="main2">
	<div class="page-content">
		<div id="page-text">
			<section id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
            
            
				
                
<div id="single-agent-row1">

	<div id="single-agent-photo">
		<img src="<?php echo $thumb; ?>" />
	</div><!-- single-agent-photo -->
		
	<div id="single-agent-text1">
	
		<div id="page-heading">
			<h1><?php echo $author->display_name; ?></h1>
		</div><!--page-heading-->

		<?php if( $phone != '' ) { ?><div><?php echo $phone; ?> office</div><?php } ?> 
        <?php if( $phone2 != '' ) { ?><div><?php echo $phone2; ?> cell</div><?php } ?> 

	    <div class="agent-emails">
	    	<a href="mailto:<?php echo $antispam; ?>"><?php echo $antispam; ?></a>
	    </div><!--agent-email-->

	    <a href="<?php echo $vCard; ?>">vCard</a>
	                
<div id="facebook-box">
<?php if( $facebook != '' ) { ?>  
			<div class="facebook1"><a href="<?php echo $facebook; ?>" target="_blank"></a></div>
		<?php } ?>   
<?php if( $youtube != '' ) { ?>  
			<div class="youtube1"><a href="<?php echo $youtube; ?>" target="_blank"></a></div>
		<?php } ?>              
		                
		<?php if( $twitter != '' ) { ?>  
			<div class="twitter1"><a href="<?php echo $twitter; ?>" target="_blank"></a></div>
		<?php } ?> 

</div>
		
        
	                
	    <?php echo  custom_field_excerpt();  ?> 

		<div class="agent-read-more"><a href="#fullbio">READ MORE</a></div>              

	</div><!-- single-agent-text1 -->

	<div id="single-agent-links">
		<div class="agent-button-link">
			<a href="<?php echo $property_search; ?>" target="_blank">PROPERTY SEARCH</a>
		</div><!-- agent-button -->
		
		<div class="agent-button-link">
			<a href="<?php echo $my_listings; ?>" target="_blank">VIEW MY LISTINGS</a>
		</div><!-- agent-button -->
		
		<div class="agent-button-link">
			<a href="<?php bloginfo('url'); ?>/mortgage-calculator?iframe=true" class="calculator">MORTGAGE CALCULATOR</a>
		</div><!-- agent-button -->
	</div><!-- single agent links -->

</div><!-- single-agent-row1 -->



<div id="single-agent-row2">
	<?php get_template_part('inc/agent-links'); ?>
</div><!-- single-agent-row2 -->






		<?php if( have_rows('testimonials',  'user_'.$author_id) ): ?>
<div id="single-agent-row3">

	<h2>WHAT MY CLIENTS SAY</h2>
	        
	<div class="flexslider3">
        
			<ul class="slides">
	    <?php while ( have_rows('testimonials',  'user_'.$author_id) ) : the_row(); 

	    	// display a sub field value

	    	$testimonials = get_sub_field('testimonial', 'user_'.$author_id );
			$testimonials2 = get_sub_field('testimonial_attribute', 'user_'.$author_id );
			$testimonials3 = get_sub_field('testimonial_attribute_two', 'user_'.$author_id );
			 ?>
	        <li> 
				<div class="agents-testimonial"><?php echo $testimonials; ?></div>
                <div class="agents-testimonial2"><?php echo $testimonials2; ?><br><?php echo $testimonials3; ?></div>
	        </li>

		<?php endwhile; ?>
			</ul><!-- slides -->
            
	</div><!-- flexslider3 -->

</div><!-- single-agent-row3 -->             
		<?php endif; ?>



<div id="single-agent-row4">
	
	<div id="full-bio">
		<a name="fullbio"></a>
		<h2><?php echo $author->display_name; ?></h2>
		BIO 

		<p><?php echo $bio; ?><p>
	</div><!-- full-bio -->

	<div id="agent-personal-photos">
    
 <!-- -->
 
 	<div class="flexslider4">
        
			<ul class="slides">
	    <?php while ( have_rows('personal_photos',  'user_'.$author_id) ) : the_row(); 

	    	// display a sub field value

	    	$personal_photo = get_sub_field('personal_photo', 'user_'.$author_id ); ?>
	        <li> 
				<div class="agents-personal-photo"><img src="<?php echo $personal_photo; ?>" /></div>
	        </li>

		<?php endwhile; ?>
			</ul><!-- slides -->
            
	</div><!-- flexslider3 -->
 
 <!-- -->   
    
    
	</div><!-- agent-personal-photos -->
</div><!-- single-agent-row4 -->
        

                 
                
                
                
 
				</div><!-- #content -->
			</section><!-- #primary -->
		</div><!--page-text-->
	</div><!--page-content-->
</div><!--main-->

<?php get_footer(); ?>
