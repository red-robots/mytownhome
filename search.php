<?php
/**
* Search Page
*/

get_header(); 

// Get the Search Term
$myTerm = $_GET['s']; 
// Get the search Type
$searchType = $_GET['search_type']; 
?>

<div id="main-wrapper">
	<div id="main">
		<div class="page-content">
		
<div id="page-heading"><h1>Search Results</h1></div>

		<?php 

		// First see what type of Search it is
		if($searchType == 'agent') :
	
		// WP_User_Query arguments
		$args = array (
		    'role' => 'Agent',
		    'order' => 'ASC',
		    'orderby' => 'display_name',
		    'search' => '*'.esc_attr( $myTerm ).'*',
		    'meta_query' => array(
		        'relation' => 'OR',
		        array(
		            'key'     => 'first_name',
		            'value'   => $myTerm,
		            'compare' => 'IN'
		        ),
		        array(
		            'key'     => 'last_name',
		            'value'   => $myTerm,
		            'compare' => 'IN'
		        ),
		        array(
		            'key' => 'description',
		            'value' => $myTerm ,
		            'compare' => 'IN'
		        )
		    )
		);
		// User Query
		$user_query = new WP_User_Query( $args );

		// Get the results
		$agents = $user_query->get_results();

		// User Loop
		//________________________________

		// If not empty
		if ( ! empty( $agents ) ) {
			foreach ( $agents as $user ) { 
		// get all the user's data

				// you can echo out any of these variables you need like "displayName is below"
				$displayName = $user->display_name;
				$agentID = $user->ID;
				$userName = $user->user_login;
				$niceName = $user->user_nicename;
				// email 
$email = get_field( 'email', 'user_'.$author_id );
$antispam = antispambot($email);
				$link = get_author_posts_url($agentID);
				// and the photo
				$agentPhoto = get_field( 'photo', 'user_'.$agentID );
				$alt = $agentPhoto['alt'];
				$size = 'agent_feed';
				$photo = $agentPhoto['sizes'][ $size ];
				        // get all the user's data

?>
				
<div class="agent-profile-box">
<div class="agent-photo"><a href="<?php echo $link; ?>"><img src="<?php echo $photo; ?>" alt="<?php echo $alt; ?>" /></a></div>
<div class="agent-profile-box-content"><div class="agent-profile-box-padding">
<h2><a href="<?php echo $link; ?>"><?php echo $displayName; ?> <?php echo $agentName2; ?></a></h2>

<div><?php echo $myField; ?></div>

 <div class="agent-email">
                	<a href="mailto:<?php echo $antispam; ?>"><?php echo $antispam; ?></a>
                </div><!--agent-email-->

</div>
</div>
				
</div>

		<?php } // end bracket for if agents are empty
		} else { ?>

			No Agents found.

		<?php } 



		// If it wasn't an Agent Search, go do the normal wordpress search 
		else:


			/* Start the Loop 
			
				Number of posts on a category page, 
				before it paginates, will be determined 
				by the WordPress Admin in Settings > Reading
			
			*/

			while ( have_posts() ) : the_post(); ?>
		    
		    <div class="post">
		        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		        <?php the_excerpt(); ?>
		    </div><!-- post -->
		    
		<?php endwhile;

		// end the what type of search
		endif;

		?>

		    <div class="clear"></div>
		    <?php pagi_posts_nav(); ?>


		</div><!-- page-content -->
	</div><!-- #main -->
</div><!-- #main-wrapper -->

<?php get_footer(); ?>