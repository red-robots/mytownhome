<?php 
/**
* Template Name: Our Agents
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div id="main2">
    <div class="page-content">
          
        <div id="page-heading"><h1><?php the_title()?></h1></div>
            <div id="page-text">
                <div id="agents-page-content">
                    <div id="agents-page-text">
                        <?php the_content(); ?>
                        <div id="agent-search">SEARCH BY NAME
                        <!-- --> 
                            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                            <div>
                                <input name="s" type="text" id="agent-search1" placeholder="enter name here" value="<?php echo wp_specialchars($s, 1); ?>" size="18" />
                                <input type="hidden" name="search_type" value="agent" />
                                <input type="submit" id="searchsubmit" value=" " class="btn" />
                            </div>
                            </form>
                          <!-- -->
                        </div><!-- agent-search -->
                    </div><!-- agents-page-text -->
                 
                <div id="agents-page-box">
                    <a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent/">
                        <h3>Need help selecting<br> an agent?</h3>
                        <img src="<?php bloginfo('template_url'); ?>/images/arrow-white.png" alt="" border="0">Answer a few quick questions to get matched with an agent that best meets your needs.
                    </a>
                </div><!-- agents-page-box -->
                 
                <?php endwhile; endif; ?>
                </div><!-- agents-page-content -->
            </div><!-- page-text -->
        
    <div id="agent-boxes">
        <?php
        $response = wp_remote_get( 'http://myhomenorthcarolina.com/wp-json/wp/v2/users?per_page=100' );
        if( is_array($response) ) {
            $code = wp_remote_retrieve_response_code( $response );
            if(!empty($code) && intval(substr($code,0,1))===2){ 
                $body = json_decode(wp_remote_retrieve_body( $response),true);
                //print_r($body);
                // loop trough each author
                foreach ($body as $author) {
                    // get all the user's data
                        $link = $author['link'];
                        $agentName = $author['name'];
                        $email = null;
                        $antispam = null;
                        $thumb = null;
                        if(isset($author['acf'])):
                            // email 
                            $email = $author['acf']['email'];
                            $antispam = antispambot($email);
                            if(isset($author['acf']['photo'])):
                                $thumb = $author['acf']['photo']['sizes'][ 'agent_feed' ];
                            endif;
                        endif;
                        if($thumb):
                    ?>

                            <div class="agent-profile-box js-blocks">
                                <?php if($thumb):?>
                                    <img src="<?php echo $thumb; ?>" />
                                <?php endif;?>
                                <div class="agent-profile-box-content">
                                    <h2>
                                        <?php echo $agentName; ?>
                                    </h2>
                                </div><!-- agent-profile-box-content -->
                                <div class="link"><a href="<?php echo $link; ?>" target="_blank"></a></div>
                            </div><!--  agent-profile-box -->
                        <?php endif; 
                }
            }
        }
        // WP_User_Query arguments
        /*$args = array (
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
            
        
          
        } */
        ?>
    </div><!-- agent-boxes  -->


    </div><!-- page-content -->
</div><!-- / main 2 -->
<?php get_footer(); ?>