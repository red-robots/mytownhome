<?php 

/**

* Template Name: Home Test

*/

?>





<!DOCTYPE html>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta http-equiv="X-UA-Compatible" content="IE=9">

<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />



<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />



<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/tabs.css" />





<script type="text/javascript">

 

var namee;

function change(namee){

document.getElementById("Display_content").innerHTML=document.getElementById(namee).innerHTML;

 

//optional Javascript code below - To change color of clicked tab

var livetab, i;

switch(namee){

    case 'tab1':

        livetab='t1';

    break;

    case 'tab2':

        livetab='t2';

    break;

    case 'tab3':

        livetab='t3';

    break;

}

for(i=1;i<=3;i++){

    document.getElementById("t"+i).style.backgroundColor="gray";

}

document.getElementById(livetab).style.backgroundColor="silver";

//optional code ends here

 

}

 

</script>



<style type="text/css" rel="stylesheet">

div.content_tab {

    display:none;

}

#tabbed_section {

background-color: transparent!important;

    background-image: url(images/bg-find-box.png);

    background-repeat: repeat;

    border: 0px;

    height: 100px!important;

    padding-top: 25px!important;

    padding-left: 30px!important;

    padding-right: 20px!important;

    padding-bottom: 25px!important;

    -moz-border-radius: 5px 5px 0px 0px;

    border-radius: 5px 5px 0px 0px;

    border-top: 0px!important;

    }

#menu {

    clear: both;

    width: 300px;

}

#Display_content {

    clear: both;

    min-height: 44px;

    padding: 2px;

    border: 1px solid gray;

}

#ul_tabs {

    clear: both;

    padding: 0px;

    margin: 0px;

}

.lh {

    padding:5px;

    background-color: gray;

    list-style: none;

    width: 88px;

    height: 25px;

    float: left;

    border: 1px solid #FFFFFA;

    text-align:center;

}

li.lh:hover {

    background-color: white;

    cursor: pointer;

}

 

</style>



<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>



<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>





<?php wp_head(); ?>



<!-- RECOMMEND PUTTING THESE CALLS IN THE "HEAD" SECTION, AFTER JQUERY IS DECLARED -->

<script src="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.min.js" type="text/javascript"></script>

<link href="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.css" rel="stylesheet" type="text/css" />

<script src="http://img.davisfarrell.com/js/localdata.js" type="text/javascript"></script>

<script src="http://img.davisfarrell.com/js/autosub_so.js" type="text/javascript"></script>





<!-- mobile nav -->



<script type="text/javascript" language="JavaScript"><!--

function HideContent(d) {

document.getElementById(d).style.display = "none";

}

function ShowContent(d) {

document.getElementById(d).style.display = "block";

}

function ReverseDisplay(d) {

if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }

else { document.getElementById(d).style.display = "none"; }

}

//--></script>



<!-- mobile nav -->





<?php the_field('google_analytics', 'option'); ?>



</head>







<body>







<div id="main-wrapper-all">



<div id="header-wrapper">



<div id="navigation-bar"><div id="mobile-navigation">



<a href="javascript:ReverseDisplay('uniquename')"> 

<img src="<?php bloginfo('template_url'); ?>/images/down-arrow.png" alt="" border="0">&nbsp;&nbsp;&nbsp; menu

</a>



<div id="uniquename" style="display:none;">

<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>    

            

</div>



      

    </div><!-- #navigation -->   </div>



<div id="main-header">



<div id="header">





    <div id="logo">

    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/my-townhome.png" alt="" border="0"></a> 

    </div><!-- #logo -->

    

<div id="header-content-wrapper">

<div id="header-content">





<div id="header-content1">

Residential Realtors serving Charlotte, NC

</div>



<div id="social-icons">

<div id="social1"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a></div>

<div id="social2"><a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank"></a></div>

</div>



<div id="header-content2">

704.377.4567

</div>















</div>

</div>





<div id="navigation">

            

      <nav id="access" role="navigation">

				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			</nav>

            </div><!-- #navigation -->







    

    </div>

    

     

            

    </div>

    

           

</div>    



 

    

    



  <!-- -->

  

  

  







<div id="home-row1">















<div id="home-slider">







<?php 







// Query the Post type Slides







$querySlides = array(







	'post_type' => 'post',







'posts_per_page' => '-1',







'category_name' => 'featured'	







);







// The Query







$the_query = new WP_Query( $querySlides );







?>















<?php 







// The Loop







 if ( $the_query->have_posts()) : ?>















<div class="flexslider">







<ul class="slides">







        <?php while ( $the_query->have_posts() ) : ?>







			<?php $the_query->the_post(); ?>















            <li> 







            <?php







			 // check if the post has a Post Thumbnail assigned to it.







if ( has_post_thumbnail() ) {







	the_post_thumbnail();







} 







?>















<div class="communities-photo">







<?php







$image = get_field('featured_photo');







  $image = get_field('featured_photo');







  $url = $image['url'];







  $title = $image['title'];







  $alt = $image['alt'];







  $caption = $image['caption'];







 







  // thumbnail or custom size that will go







  // into the "thumb" variable.







  $size = 'homepage';







  $thumb = $image['sizes'][ $size ];







  $width = $image['sizes'][ $size . '-width' ];







  $height = $image['sizes'][ $size . '-height' ];







if( !empty($image) ): ?>







	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />







<?php endif; ?>







</div>















<div class="communities-short-description-wrapper">







<div class="communities-short-description-content">







<div class="communities-short-description">







<h3><?php







$category = get_the_category(); 







echo $category[0]->cat_name;







?></h3>







<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>







<a href="<?php the_permalink(); ?>"><?php the_field("short_description"); ?></a>







</div>







</div>







</div>







            </li>















<?php endwhile; ?>







      	 </ul><!-- slides -->







</div><!-- .flexslider -->























<div id="find-box-wrapper">







<div id="find-box">















<?php echo do_shortcode("[tabby title='QUICK SEARCH']"); ?>















<div id="home-search">





<table style="font:9pt arial; background:#e0e0e0; border: 1px dotted #ccc;">



<tr><td>



<form name="dfform" action="http://mytownhome.localhomesearch.net/idx/" target="_new">



<input type="hidden" name="op" value="query">



<input type="hidden" name="stype" value="area">



<input type="hidden" name="_srf" value="1">



Property Type:<br/><select name="proptype">



<option value="cnd">Condos/Townhomes</option>



<option value="res">Single-family Homes</option>



<option value="mul">Multifamily</option>



<option value="lnd">Land</option>



</select><br/>





<input type="hidden" name="proptype" value="">

<input type="hidden" name="area" value="">

<!-- PUT THIS WHEREVER YOU WANT THE AUTOCOMPLETE TO GO -->

Subdivision/Complex: <input type="text" id="suggest1" name="subdivision" size="35" value=""/>







Beds: <select name="beds">



<option value="">any</option>



<option value="1">1+</option>



<option value="2">2+</option>



<option value="3">3+</option>



<option value="4">4+</option>



<option value="5">5+</option>



</select><br/>









Baths: <select name="baths">



<option value="">any</option>



<option value="1">1+</option>



<option value="2">2+</option>



<option value="3">3+</option>



<option value="4">4+</option>



</select><br/>









Min. Price:<select name="price_min">



<option value="">none</option>



<option value="100000">$100,000



<option value="150000">$150,000



<option value="200000">$200,000



<option value="250000">$250,000



<option value="300000">$300,000



<option value="350000">$350,000



<option value="400000">$400,000



<option value="450000">$450,000



<option value="500000">$500,000



<option value="600000">$600,000



<option value="700000">$700,000



<option value="800000">$800,000



<option value="900000">$900,000



<option value="1000000">$1,000,000



</select><br/>









Max Price:<select name="price_max">



<option value="">none</option>



<option value="100000">$100,000



<option value="150000">$150,000



<option value="200000">$200,000



<option value="250000">$250,000



<option value="300000">$300,000



<option value="350000">$350,000



<option value="400000">$400,000



<option value="450000">$450,000



<option value="500000">$500,000



<option value="600000">$600,000



<option value="700000">$700,000



<option value="800000">$800,000



<option value="900000">$900,000



<option value="1000000">$1,000,000



</select><br/>









MLS #: <input type="text" name="mls" size="10" maxlength="15"><br/>









Street name: <input type="text" name="street" size="15"><br/>









<input type="submit" value="Search">



</form>



</td></tr></table>























</div>























<?php echo do_shortcode("[tabby title='FIND AN AGENT']"); ?>















<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>







<div class="find-box-content"><?php the_field("find_an_agent"); ?></div>







<?php endwhile; wp_reset_postdata(); // end of the loop. ?>















<?php echo do_shortcode("[tabby title='SELL WITH US']"); ?>















<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>







 <div class="find-box-content"><?php the_field("sell_with_us"); ?></div>







<?php endwhile; wp_reset_postdata(); // end of the loop. ?>















<?php echo do_shortcode("[tabbyending]"); ?> 







</div>







</div>































         <?php endif; // end loop ?>







    <?php wp_reset_postdata(); ?>















</div>























</div>















<div id="home-row2">















<div id="home-row2-row1">















<div id="home-row2-row1-content">







<div id="home-row2-row1-content-heading"><a href="<?php bloginfo('url'); ?>/townhome-communities">SHOP BY COMMUNITY</a></div>















<!-- -->















<div id="home-slider2">







<?php 







// Query the Post type Slides







$querySlides = array(







	'post_type' => 'post',







'posts_per_page' => '-1'







);







// The Query







$the_query = new WP_Query( $querySlides );







?>















<?php 







// The Loop







 if ( $the_query->have_posts()) : ?>















<div class="flexslider2">







<ul class="slides">







        <?php while ( $the_query->have_posts() ) : ?>







			<?php $the_query->the_post(); ?>















            <li> 







            <?php







			 // check if the post has a Post Thumbnail assigned to it.







if ( has_post_thumbnail() ) {







	the_post_thumbnail();







} 







?>







<div class="communities-slide-box">







<div class="communities-photo2">







<?php







$image = get_field('featured_photo');







  $image = get_field('featured_photo');







  $url = $image['url'];







  $title = $image['title'];







  $alt = $image['alt'];







  $caption = $image['caption'];







 







  // thumbnail or custom size that will go







  // into the "thumb" variable.







  $size = 'communities-main';







  $thumb = $image['sizes'][ $size ];







  $width = $image['sizes'][ $size . '-width' ];







  $height = $image['sizes'][ $size . '-height' ];







if( !empty($image) ): ?>







	<a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></a>







<?php endif; ?>







</div>















<div class="communities-slide-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="price-range"><?php the_field("price_range"); ?></span></a></h2></div>







</div>















            </li>















<?php endwhile; ?>







      	 </ul><!-- slides -->







</div><!-- .flexslider -->























































         <?php endif; // end loop ?>







    <?php wp_reset_postdata(); ?>















</div>







<!-- -->







</div>























</div>















<div id="home-row2-row2">















<div id="home-row2-row2-box1">







<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>







 <?php the_content(); ?>







<?php endwhile; wp_reset_postdata(); // end of the loop. ?>







</div>















<div id="home-row2-row2-box2">







<div id="home-row2-row2-box2-text1">







We’d like to be your realtor for this home and the next. 







</div>















<div id="home-row2-row2-box2-text2">(And the one after that.)</div>















<div id="home-row2-row2-box2-text3">Whether searching for a townhome, single family home or home to lease, our priority is earning your trust and delivering value.</div>















<div id="home-row2-row2-box2-logos"> <a href="http://www.maisonproperties.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/maison-properties-logo.png" alt="" border="0"></a>







<br>







<a href="http://myhomeleasing.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/my-home-leasing-logo.png" alt="" border="0"></a>







</div>















</div>























</div>























</div>























<div id="home-row3">







<div id="home-row3-content">







<div id="home-row3-content-heading">SELLING?  KNOWLEDGE IS EVERYTHING.</div>







<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>















<div id="home-row3-content-box1"><a href="<?php the_field("link_one"); ?>"><img src="<?php bloginfo('template_url'); ?>/images/box1image.png" alt="" border="0"></a><div class="home-row3-content-link"><a href="<?php the_field("link_one"); ?>"><?php the_field("link_one_text"); ?></a></div></div>















<div id="home-row3-content-box2"><a href="<?php the_field("link_two"); ?>"><img src="<?php bloginfo('template_url'); ?>/images/box2image.png" alt="" border="0"></a><div class="home-row3-content-link"><a href="<?php the_field("link_two"); ?>"><?php the_field("link_two_text"); ?></a></div></div>















<div id="home-row3-content-box3"><a href="<?php the_field("link_three"); ?>"><img src="<?php bloginfo('template_url'); ?>/images/box3image.png" alt="" border="0"></a><div class="home-row3-content-link"><a href="<?php the_field("link_three"); ?>"><?php the_field("link_three_text"); ?></a></div></div>







<?php endwhile; wp_reset_postdata(); // end of the loop. ?>







</div>







</div>















<div id="home-row4">







<div id="home-row4-content">







<h2>OUR AGENTS</h2>















<!-- -->







<div id="home-agents">







<?php







 







// WP_User_Query arguments







$args = array (







    'role' => 'Agent',







		'number' => 4,







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







  







} 







?>







</div>















<!-- -->







<div id="agents-box"><div id="agents-box-padding">







<h2>Need help selecting an agent?</h2>







Fill out a simple form to get matched with an agent that meet your needs.







<a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent"><img src="<?php bloginfo('template_url'); ?>/images/agents-go-arrow.png" alt="" border="0"></a></div>







</div>























<div id="view-all-agents">







<div id="view-all-agents-box"><a href="<?php bloginfo('url'); ?>/my-townhome-agents">VIEW ALL AGENTS</a></div>







</div>















</div>















</div>























<div id="home-wrapper">















<!-- home row1 -->























<!-- home row2 -->















</div>































































<?php get_footer(); ?>































