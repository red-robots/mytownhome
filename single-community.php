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
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];
          // thumbnail or custom size that will go
          // into the "thumb" variable.
          $size = 'large';
          $thumb = $image['sizes'][ $size ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];

          echo '<!-- ';
          echo '<pre>';
          print_r($image);
          echo '</pre>';
          echo ' -->';

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
        </div><!-- communities-heading-photo -->
      </div><!-- news-events -->

      <div id="page-text"><?php the_content(); ?></div>
      
      <div id="features-row">
        <div id="features"> 
        <?php echo do_shortcode("[tabby title='Overview']"); ?>
          
          <div class="tab-content">
          <?php the_field("map_&_location"); ?>

            <?php 
            $location = get_field('google_map');
            if( !empty($location) ):
            ?>
              <div class="acf-map" style="margin-top: 20px; margin-bottom: 30px; float: left;">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                  <h4><?php the_title(); ?></h4>
                  <p class="address"><?php echo $location['address']; ?></p>
                </div><!-- marker -->
              </div><!-- acf map -->
            <?php endif; ?>
              
          </div><!-- tab content -->  

          <?php if (strlen(get_post_meta($post->ID, "overview", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Overview']"); ?>
            <div class="tab-content">
              <?php the_field("overview"); ?>
            </div><!--- / tab --> 
          <?php endif; ?>


          <?php if (strlen(get_post_meta($post->ID, "property_alert", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Property Alert']"); ?>
            <div class="tab-content">
              <?php the_field("property_alert"); ?>
            </div><!--- / tab -->  
           <?php endif; ?>


          <?php if (strlen(get_post_meta($post->ID, "points_of_interest", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Points of Interest']"); ?>
            <div class="tab-content">
              <?php the_field("points_of_interest"); ?>
            </div><!--- / tab --> 
          <?php endif; ?>


          
          <?php if (strlen(get_post_meta($post->ID, "property_valuation", true)) > 0) : ?>
            <?php echo do_shortcode("[tabby title='Property Valuation']"); ?>
            <div class="tab-content">
              <?php the_field("property_valuation"); ?>
            </div><!--- / tab -->  
           <?php endif; ?>


        <?php echo do_shortcode("[tabbyending]"); ?> 
        </div><!-- features -->


        <div id="features-agents">
          <h2>Community Realtor</h2>

          <div id="community-realtors">
            <div class="community-realtor">
            <?php

            // start your counter

            $i = 0;
            //get your array
            $myField = get_field('community_realtor'); 

            // mix it up
            shuffle($myField);

            foreach($myField as $myTemp) :
            // count up
                $i++;


            // get the id
            $userID = $myTemp['ID'];
            $myUser = get_userdata($userID);
            $displayName = $myUser->display_name;
           $phone = get_field( 'office_phone', 'user_'.$userID );
                // email if you add the custom field to the profile
                // see above if you want it to be the email tied to the login   
            $email = get_field( 'email', 'user_'.$userID );   
            $antispam = antispambot($email);
            // image stuff
            $size = 'agent_feed';
           $image = get_field( 'photo', 'user_'.$userID );

           // echo '<pre>';
           // print_r($image);
           // echo '</pre>';
           // $size = 'single_community_agent';
            $thumb = $image['sizes'][ $size ];
            $link = get_author_posts_url($userID);
            echo '<div class="communities-agents-photo">';
            //echo '<a href="';
            //echo $link;
            //echo '">';
            echo '<img src="';
            // echo wp_get_attachment_image( $image, $size );
            echo $thumb;
            echo '" />';
           // echo '</a>';
            echo '</div>';
            echo '<h2 class="community-realtor-name">';
            //echo '<a href="';
           // echo $link;
            //echo '">';
            echo $displayName;
            //echo '</a>';
            echo '</h2>';
            //echo '<h2 class="community-realtor-email">';
            //echo '<a href="mailto:';
            //echo $antispam;
            //echo '">';
           // echo $antispam;
            //echo '</a>';
           // echo '</h2>';
           // echo '<h2>';
            //echo $phone;
            //echo '</h2>';
            // If we've counted to 1, get out of the loop

            if( $i == 1 ) {
               break;
            }
            endforeach;
            ?>

              <div class="agent-neighborhood-quote"><?php the_field("agent_neighborhood_quote"); ?></div>

            </div> <!-- community-realtor --> 
          </div><!-- #community-realtors -->
        </div><!-- features-agents -->
      </div><!--- / features row -->


      <div id="communities-gallery">
       <?php 
      $images = get_field('gallery');
      if( $images ): ?>
      <h2>Photo Gallery</h2>
              <?php 
              $i=0;
              foreach( $images as $image ): $i++; 

              if( $i == 3 ) {
                $photoClass = 'last';
                $i = 0;
              } else {
                $photoClass = 'first';
              }
              ?>
                  <div class="community-gallery-photo <?php echo $photoClass; ?>">
                      <a href="<?php echo $image['url']; ?>" class="group1">
                        <img src="<?php echo $image['sizes']['communities-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </a>
                     <!--  <p><?php echo $image['caption']; ?></p> -->
                  </div><!-- community-gallery-photo -->
              <?php endforeach; ?>
      <?php endif; ?>
      </div><!-- communities-gallery -->


    </div><!-- page-content -->
  </div><!-- main -->
</div><!-- main-wrapper -->

<div id="main2">

<div id="communities-listings">

  <?php if (strlen(get_post_meta($post->ID, "current_listings", true)) > 0) : ?>     
    <div id="current-listings-header"><a name="listings"></a><h2>Current Listings</h2></div>
    <div id="current-listings-frame">
      <?php the_field("current_listings"); ?>
    </div><!-- current-listings-frame -->
  <?php endif; ?>

<div id="bottom-link"><a href="<?php bloginfo('url'); ?>/neighborhoods/">view all neighborhoods</a></div><!-- -->
</div><!-- main2 -->
<?php endwhile; endif; ?>   

<?php get_footer(); ?>