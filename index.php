<?php get_header(); ?>


<div id="home-row1">
<div id="home-slider">
<?php 
remove_all_filters('posts_orderby');
// Query the Post type Slides
$querySlides = array(
'post_type' => 'community',
'posts_per_page' => '-1',
'orderby'        => 'rand',
'tax_query' => array(
    array(
      'taxonomy' => 'neighborhood', // your custom taxonomy
      'field' => 'slug',
      'terms' => array( 'featured' ) // the terms (categories) you created
    )
  ),
);
// The Query

$the_query = new WP_Query( $querySlides );

// The Loop
 if ( $the_query->have_posts()) : ?>

<div class="flexslider">

  <ul class="slides">
      <?php while ( $the_query->have_posts() ) : ?>
        <?php $the_query->the_post(); 

        $theID = get_the_ID();
        $terms = get_the_terms($theID, 'neighborhood');
        // echo '<pre>';
        // print_r($terms);
        // echo '</pre>';

        foreach ( $terms as $term ){
          // term 1 
          $term1 = $terms[0]->name;
          $term2 = $terms[1]->name;
          
          if( $term1 !== 'Featured' ) {
            $myTerm = $term1;
          } else {
            $myTerm = $term2;
          }
          
        //   echo '<pre>';
        // print_r($term);
        // echo '</pre>';
        }
        ?>

            <li> 

            <?php
       // check if the post has a Post Thumbnail assigned to it.
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            } 
            ?>
              <!-- commphoto -->
              <div class="communities-photo">

                <?php
                $image = get_field('featured_photo');
                $size = 'full';
                if( !empty($image) ): ?>
                  <?php echo wp_get_attachment_image( $image, $size ); ?>
                <?php endif; ?>

              </div><!-- communities-photo -->
              
                  <div class="communities-short-description">
                    <h3><?php echo $myTerm; ?></h3>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <a href="<?php the_permalink(); ?>"><?php the_field("short_description"); ?></a>
                  </div><!-- communities-short-description -->
               
               
            </li>
            <?php endwhile; ?>
         </ul><!-- slides -->
</div><!-- .flexslider -->


<div id="find-box-wrapper">
  <div id="find-box">
    <?php echo do_shortcode("[tabby title='QUICK SEARCH']"); ?>

    <div id="home-search">
      <form name="dfform" action="http://mytownhome.localhomesearch.net/idx/">
        <input type="hidden" name="op" value="query">
        <input type="hidden" name="_srf" value="1">
        
        <div class="home-search-column">
        <label class="qs">Property Type:</label>
         
          <select class="qs-s" name="proptype" id="property-type">
            <option value="cnd">Condos/Townhomes</option>
            <option value="res">Single-family Homes</option>
            <option value="mul">Multifamily</option>
            <option value="lnd">Land</option>
          </select>
          <input type="hidden" name="proptype" value="">
          <input type="hidden" name="area" value="">
          <!-- PUT THIS WHEREVER YOU WANT THE AUTOCOMPLETE TO GO -->
          <label class="qs">Subdivision/Complex:</label>
          <input class="qs-tf" type="text" id="suggest1" name="subdivision" size="35" value=""/>
        </div><!-- home-search-column -->

        <div class="home-search-column2">
          <label class="qs">Min. Price:</label>
          
          <select class="qs-s" name="price_min">
            <option value="">none</option>
            <option value="100000">$100,000</option>
            <option value="150000">$150,000</option>
            <option value="200000">$200,000</option>
            <option value="250000">$250,000</option>
            <option value="300000">$300,000</option>
            <option value="350000">$350,000</option>
            <option value="400000">$400,000</option>
            <option value="450000">$450,000</option>
            <option value="500000">$500,000</option>
            <option value="600000">$600,000</option>
            <option value="700000">$700,000</option>
            <option value="800000">$800,000</option>
            <option value="900000">$900,000</option>
            <option value="1000000">$1,000,000</option>
          </select>
          <label class="qs">Max Price:</label>
         
          <select  class="qs-s" name="price_max">
            <option value="">none</option>
            <option value="100000">$100,000</option>
            <option value="150000">$150,000</option>
            <option value="200000">$200,000</option>
            <option value="250000">$250,000</option>
            <option value="300000">$300,000</option>
            <option value="350000">$350,000</option>
            <option value="400000">$400,000</option>
            <option value="450000">$450,000</option>
            <option value="500000">$500,000</option>
            <option value="600000">$600,000</option>
            <option value="700000">$700,000</option>
            <option value="800000">$800,000</option>
            <option value="900000">$900,000</option>
            <option value="1000000">$1,000,000</option>
          </select>
          <label class="qs">Beds:</label>
          
          <select  class="qs-s" name="beds">
            <option value="">any</option>
            <option value="1">1+</option>
            <option value="2">2+</option>
            <option value="3">3+</option>
            <option value="4">4+</option>
            <option value="5">5+</option>
          </select>
          <label class="qs">Baths:</label>
          
          <select class="qs-s" name="baths">
            <option value="">any</option>
            <option value="1">1+</option>
            <option value="2">2+</option>
            <option value="3">3+</option>
            <option value="4">4+</option>
          </select>
      </div><!-- home-search-column2 -->

      <div class="home-search-column">
      <label class="qs">MLS #:</label>
        
        <input class="qs-tf" type="text" name="mls" size="10" maxlength="15">
        <label class="qs">Street name:</label>
        
        <input class="qs-tf" type="text" name="street" size="15">
        <input class="qs-sub" type="submit" value="Quick Search">
        <div id="advanced-search-link">
          <a href="http://www.mytownhome.com/property-search">Or, Try our Advanced Search</a>
        </div><!-- advanced-search-link -->
      </div><!-- home-search-column -->

      </form>
    </div><!-- home-search -->

  <?php echo do_shortcode("[tabby title='FIND AN AGENT']"); ?>
    <?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
      <div class="find-box-content">
       <?php the_field("find_an_agent"); ?>
      </div><!-- find-box-content -->
    <?php endwhile; wp_reset_postdata(); // end of the loop. ?>

  <?php echo do_shortcode("[tabby title='SELL WITH US']"); ?>
    <?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
      <div class="find-box-content">
        <?php the_field("sell_with_us"); ?>
      </div><!-- find-box-content -->
    <?php endwhile; wp_reset_postdata(); // end of the loop. ?>

  <?php echo do_shortcode("[tabbyending]"); ?> 
  </div><!-- -->
  </div><!-- -->
           <?php endif; // end loop ?>
      <?php wp_reset_postdata(); ?>
  </div><!-- find-box -->
</div><!-- find-box wrapper -->

  <div id="home-row2">
    <div id="home-row2-row1">
      <div id="home-row2-row1-content">
        <div id="home-row2-row1-content-heading">
          <a href="<?php bloginfo('url'); ?>/townhome-communities">SHOP BY COMMUNITY</a>
        </div><!-- home-row2-row1-content-heading -->

      <div id="home-slider2">
        <?php 
        // Query the Post type Slides
        $querySlides = array(
          'post_type' => 'community',
          'posts_per_page' => '-1'
        );
        // The Query
        $the_query = new WP_Query( $querySlides );
        // The Loop
       if ( $the_query->have_posts()) : ?>
        <div class="flexslider2 carousel">
          <ul class="slides">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li> 
                <?php
                  if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    <div class="communities-slide-box">
                      <div class="communities-photo2">
                      <?php 
                      $image = get_field('featured_photo');
                          $size = 'communities-gallery';
                          if( !empty($image) ): ?>
                             <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image, $size ); ?></a>
                          <?php endif; ?>
                      </div><!-- communities-photo2 -->
                      <div class="communities-slide-title">
                        <h2>
                          <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?><span class="price-range"><?php the_field("price_range"); ?></span>
                          </a>
                        </h2>
                      </div><!-- communities-slide-title -->
                    </div><!-- communities-slide-box -->
              </li>
            <?php endwhile; ?>
          </ul><!-- slides -->
        </div><!-- .flexslider -->
      <?php endif; // end loop ?>
      <?php wp_reset_postdata(); ?>
      </div><!-- home-slider2 -->


      </div><!-- home-row2-row1-content -->
    </div><!-- home-row2-row1 -->

    <div id="home-row2-row2">
      <div id="home-row2-row2-box1">
        <?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
          <?php the_content(); ?>
        <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
      </div><!-- home-row2-row2-box1 -->
      <div id="home-row2-row2-box2">
        <div id="home-row2-row2-box2-text1">
          We’d like to be your realtor for this home and the next. 
        </div><!-- home-row2-row2-box2-text1 -->
        <div id="home-row2-row2-box2-text2">(And the one after that.)</div><!-- home-row2-row2-box2-text2 -->
        <div id="home-row2-row2-box2-text3">Whether searching for a townhome, single family home or home to lease, our priority is earning your trust and delivering value.</div><!-- home-row2-row2-box2-text3 -->
        <div id="home-row2-row2-box2-logos">
          <a href="http://www.maisonproperties.com/" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/maison-properties-logo.png" alt="" border="0">
          </a>
          <br>
          <a href="http://myhomeleasing.com/" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/my-home-leasing-logo.png" alt="" border="0">
          </a>
        </div><!-- home-row2-row2-box2-logos -->
      </div><!-- home-row2-row2-box2 -->
    </div><!-- home-row2-row2 -->
  </div><!-- home-row2 -->

<div id="home-row3">
  <div id="home-row3-content">
    <div id="home-row3-content-heading">SELLING?  KNOWLEDGE IS EVERYTHING.</div><!-- home-row3-content-heading -->
      <?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
        
        <div id="home-row3-content-box1" class="home-row3-content-box">
          <a href="<?php the_field("link_one"); ?>">
            <div class="home-icon">
              <img src="<?php bloginfo('template_url'); ?>/images/box1image.png" alt="" border="0">
            </div><!-- home icon -->
            <div class="home-row3-content-link">
              <?php the_field("link_one_text"); ?>
            </div><!-- home-row3-content-link -->
           </a>
        </div><!-- home-row3-content-box1 -->

        <div id="home-row3-content-box2" class="home-row3-content-box">
          <a href="<?php the_field("link_two"); ?>">
            <div class="home-icon">
              <img src="<?php bloginfo('template_url'); ?>/images/box2image.png" alt="" border="0">
            </div><!-- home icon -->
            <div class="home-row3-content-link">
                <?php the_field("link_two_text"); ?>
            </div><!-- home-row3-content-link -->
          </a>
        </div><!-- home-row3-content-box2 -->

        <div id="home-row3-content-box3" class="home-row3-content-box">
          <a href="<?php the_field("link_three"); ?>">
            <div class="home-icon">
              <img src="<?php bloginfo('template_url'); ?>/images/box3image.png" alt="" border="0">
            </div><!-- home icon -->
            <div class="home-row3-content-link">
                <?php the_field("link_three_text"); ?>
            </div><!-- home-row3-content-link -->
          </a>
        </div><!-- home-row3-content-box3 -->

      <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
  </div><!-- home-row3-content -->
</div><!-- home-row3 -->

<div id="home-row4">
  <div id="home-row4-content">
    <h2>OUR AGENTS</h2>

    <div id="home-agents">
      
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

                        <div class="agent-profile-box  js-blocks">
                          <div class="agent-photo">
                            <a href="<?php echo $link; ?>"><img src="<?php echo $thumb; ?>" /></a>
                          </div><!-- agent-photo -->
                          <div class="agent-profile-box-content-home js-titles">
                            <h2>
                              <a href="<?php echo $link; ?>">
                                <?php echo $agentName; ?>
                              </a>
                            </h2>
                          </div><!-- agent-profile-box-content -->
                        </div><!-- agent-profile-box -->
      
                    <?php endif; 
                endforeach;?>
                <div class="view-all-agents-link js-blocks">
                  <span class="text">View All Agents</span>
                    <a href="<?php bloginfo('url'); ?>/my-townhome-agents">
                        View All Agents
                    </a>
                </div>
            <?php endif;
        endif;
      /*$args = array (
      'role' => 'Agent',
      'number' => 3,
      'orderby' => 'rand',
      );
      $wp_user_query = new WP_User_Query($args);
      $authors = $wp_user_query->get_results();
      if (!empty($authors)) {
      foreach ($authors as $author) {
      $author_info = get_userdata($author->ID);
      $author_id = $author_info->ID;
      $link = get_author_posts_url($author_id);
      $agentName = get_field( 'first_name', 'user_'.$author_id );
      $agentName2 = get_field( 'last_name', 'user_'.$author_id );
      $image = get_field( 'photo', 'user_'.$author_id );
      $size = 'agent_feed';
      $thumb = $image['sizes'][ $size ];
      ?>
      <div class="agent-profile-box  js-blocks">
        <div class="agent-photo">
          <a href="<?php echo $link; ?>"><img src="<?php echo $thumb; ?>" /></a>
        </div><!-- agent-photo -->
        <div class="agent-profile-box-content-home js-titles">
          <h2>
            <a href="<?php echo $link; ?>">
              <?php echo $agentName; ?> <?php echo $agentName2; ?>
            </a>
          </h2>
        </div><!-- agent-profile-box-content -->
      </div><!-- agent-profile-box -->
      <?php } ?>
      <div class="view-all-agents-link js-blocks">
      <span class="text">View All Agents</span>
        <a href="<?php bloginfo('url'); ?>/my-townhome-agents">
            View All Agents
        </a>
      </div>
     <?php } */ ?>
    </div><!-- home-agents -->

    <div id="agents-page-box">
          <a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent/">
              <h3>Need help selecting<br> an agent?</h3>
              <img src="<?php bloginfo('template_url'); ?>/images/arrow-white.png" alt="" border="0">Answer a few quick questions to get matched with an agent that best meets your needs.
          </a>
      </div><!-- agents-page-box -->

  </div><!-- home-row4-content -->
</div><!-- home-row4 -->

<?php get_footer(); ?>

