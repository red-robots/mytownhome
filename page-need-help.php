<?php 
/**
* Template Name: Need Help Selecting An Agent?
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


<?php
        $response = wp_remote_get( 'http://myhomenorthcarolina.com/wp-json/wp/v2/users?per_page=100' );
        if( is_array($response) ) :
            $code = wp_remote_retrieve_response_code( $response );
            if(!empty($code) && intval(substr($code,0,1))===2): 
                $body = json_decode(wp_remote_retrieve_body( $response),true);
                $max = count($body);
                $rand_array = array();
                if($max>2):
                    while(count($rand_array)<3):
                        $int = rand(0,$max);
                        if(!in_array($int,$rand_array)):
                            if($body[$int]['acf']&&$body[$int]['acf']['photo']):
                                $rand_array[]=$int;
                            endif;
                        endif;
                    endwhile;
                else: 
                    $rand_array = $body;
                endif;
                foreach ($rand_array as $i):
                    $author = $body[$i];
                    // get all the user's data
                    $link = $author['link'];
                    $agentName = $author['name'];
                    $antispam = null;
                    $thumb = null;
                    if(isset($author['acf'])):
                        if(isset($author['acf']['photo'])):
                            $thumb = $author['acf']['photo']['sizes'][ 'agent_feed' ];
                        endif;
                    endif;
                    if($thumb): ?>

                        <div class="agent-profile-box">


                            <div class="agent-photo">
                                <a href="<?php echo $link; ?>"><img src="<?php echo $thumb; ?>" /></a>
                            </div>
                            <div class="agent-profile-box-content">
                                <h2><a href="<?php echo $link; ?>"><?php echo $agentName; ?></a></h2>
                            </div>
                        </div>
                    <?php endif; 
                endforeach;
            endif;
        endif;
 /*
// WP_User_Query arguments
$args = array (
    'role' => 'Agent',
		'number' => 3,
     'orderby' => 'rand',
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


$link = get_author_posts_url($author_id);

$agentName = get_field( 'first_name', 'user_'.$author_id );
$agentName2 = get_field( 'last_name', 'user_'.$author_id );

				

$image = get_field( 'photo', 'user_'.$author_id );
$size = 'agent_feed';
$thumb = $image['sizes'][ $size ];

?>

<div class="agent-profile-box">


<div class="agent-photo"><a href="<?php echo $link; ?>"><img src="<?php echo $thumb; ?>" /></a></div>


<div class="agent-profile-box-content">
<h2><a href="<?php echo $link; ?>"><?php echo $agentName; ?> <?php echo $agentName2; ?></a></h2>



</div>
</div>


<?php 
}
  
} */ 
?>

</div>
</div>


</div>





 </div><!-- / page content -->





<?php endwhile; endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>