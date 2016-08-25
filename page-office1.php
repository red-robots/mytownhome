<?php 
/**
* Template Name: Office 1
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div id="main2">



<div class="page-content">

 <div id="main">    <div id="page-heading"><h1><?php the_title()?></h1></div>

 <div id="page-text">
 
  <div id="agents-page-content">
 
 <div id="agents-page-text">
 
 <?php the_content(); ?>
 
 <div id="agent-search">
 SEARCH BY NAME
<!-- --> 
    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div>
        <input name="s" type="text" id="agent-search1" placeholder="enter name here" value="<?php echo wp_specialchars($s, 1); ?>" size="18" />
        <input type="hidden" name="search_type" value="agent" />
        <input type="submit" id="searchsubmit" value=" " class="btn" />
    </div>
    </form>
  <!-- -->
</div>
 
 </div>
 
 <div id="agents-page-box"><a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent/"><h3>Need help selecting<br>
an agent?</h3>

<img src="<?php bloginfo('template_url'); ?>/images/arrow-white.png" alt="" border="0">Answer a few quick questions to get matched with an agent that best meets your needs.</a>



</div>
 
<?php endwhile; endif; ?>

</div>
</div></div>

<div id="agent-boxes">

<?php
 
// WP_User_Query arguments
$args = array (
    'role' => 'Agent',
    'order' => 'ASC',
    'orderby' => 'display_name',
);

// Create the WP_User_Query object
$wp_user_query = new WP_User_Query($args);

// Get the results
$authors = $wp_user_query->get_results();

// Check for results
if (!empty($authors)) {
    
    // loop trough each author
    foreach ($authors as $author)
    {
        // get all the user's data
        $author_info = get_userdata($author->ID);
       
		$author_id = $author_info->ID;

$myField2 = get_field( 'custom_bio', 'user_'.$author_id );

$link = get_author_posts_url($author_id);

$agentName = get_field( 'first_name', 'user_'.$author_id );
$agentName2 = get_field( 'last_name', 'user_'.$author_id );
// Get my agent office array
$agentOffice = get_field( 'agent_office', 'user_'.$author_id );
// access the first key, arrays always start at 0, not 1. and put the value into another variable.
$office = $agentOffice[0];

// email 
$email = get_field( 'email', 'user_'.$author_id );
$antispam = antispambot($email);
				

$image = get_field( 'photo', 'user_'.$author_id );
$size = 'agent_feed';
$thumb = $image['sizes'][ $size ];

?>


<?php if( $office == "Elizabeth" ) { ?>


<div class="agent-profile-box">

<div class="agent-photo"><a href="<?php echo $link; ?>"><img src="<?php echo $thumb; ?>" /></a></div>


<div class="agent-profile-box-content"><div class="agent-profile-box-padding">
<h2><a href="<?php echo $link; ?>"><?php echo $agentName; ?> <?php echo $agentName2; ?></a></h2>

<div><?php echo $myField; ?></div>

 <div class="agent-email">
                	<a href="mailto:<?php echo $antispam; ?>"><?php echo $antispam; ?></a>
                </div><!--agent-email-->
</div>
</div>
</div>
<?php } ?>

<?php 
}
  
} 
?>

</div>





 </div>
     



 



 </div><!-- / page content -->







<?php get_footer(); ?>