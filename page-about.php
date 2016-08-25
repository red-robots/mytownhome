<?php 
/**
* Template Name: About
*/
 get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="main-wrapper">
<div id="main2">



<div class="page-content">

     <div id="page-heading"><h1><?php the_title()?></h1></div>
 <div id="page-text-left"><?php the_content(); ?>
 
 
 <div id="about-links">
 
<div class="about-link1">
<h2><a href="<?php bloginfo('url'); ?>/leadership">Leadership</a></h2>

<a href="<?php bloginfo('url'); ?>/leadership"><img src="<?php bloginfo('template_url'); ?>/images/leadership-photo.png" alt="" border="0"></a>

<p><a href="<?php bloginfo('url'); ?>/leadership">Learn more about MyTownhome’s leaders and staff</a>
</div>

<div class="about-link1">
<h2><a href="<?php bloginfo('url'); ?>/my-townhome-agents">Our Agents</a></h2>
<a href="<?php bloginfo('url'); ?>/my-townhome-agents"><img src="<?php bloginfo('template_url'); ?>/images/our-agents.jpg" alt="" border="0"></a>

<p><a href="<?php bloginfo('url'); ?>/my-townhome-agents">Find an expert to help you navigate the process of buying or selling a home.</a>
</div>
  
<div class="about-link2">
<h2><a href="<?php bloginfo('url'); ?>/careers">Careers</a></h2>

<a href="<?php bloginfo('url'); ?>/careers"><img src="<?php bloginfo('template_url'); ?>/images/my-townhome-careers-realtor.jpg" alt="" border="0"></a>

<p><a href="<?php bloginfo('url'); ?>/careers">Interested in a career with MyTownhome? See what we have to offer.</a>
</div>
 
 
 </div>
 
 
 </div>
     

<div id="page-right-column">

<div class="about-office">

<div class="about-office-image">
<?php
$image = get_field('office_photo', 'option');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'office_photo';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>
</div>

<div class="about-office-content">
<div class="about-office-text"><h2><?php the_field('office_name', 'option'); ?></h2>

<?php the_field('office_address', 'option'); ?>
<br><?php the_field('office_address_line2', 'option'); ?>
<br><?php the_field('office_address_line3', 'option'); ?>

<div class="sidebar-directions"><a href="<?php the_field('google_map', 'option'); ?>" target="_blank">Get Directions</a></div>


<div class="sidebar-email">email: <a href="mailto:<?php echo antispambot( 'elizabethmanager@mthrealestate.com' ); ?>"><?php echo antispambot( 'elizabethmanager' ); ?></a><br><a href="mailto:<?php echo antispambot( 'elizabethmanager@mthrealestate.com' ); ?>"><?php echo antispambot( '@mthrealestate.com' ); ?></a></div>
<div class="offices-phone">phone: <a href="tel:980-219-6013">980-219-6013</a></div>
</div>

  <div class="about-office-contact">
    <a href="<?php bloginfo('url'); ?>/our-offices-elizabeth">View Agents</a>
  </div>
  
</div>
</div>



<div class="about-office">

<div class="about-office-image">
<?php
$image = get_field('office_photo2', 'option');
  $image = get_field('office_photo2', 'option');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'office_photo';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>
</div>


<div class="about-office-content">
<div class="about-office-text"><h2><?php the_field('office_name2', 'option'); ?></h2>

<?php the_field('office_address2', 'option'); ?>
<br><?php the_field('office_address2_line2', 'option'); ?>
<br><?php the_field('office_address2_line3', 'option'); ?>

<div class="sidebar-directions"><a href="<?php the_field('google_map2', 'option'); ?>" target="_blank">Get Directions</a></div>



<div class="sidebar-email">email: <a href="mailto:<?php echo antispambot( 'southblvdmanager@mthrealestate.com' ); ?>"><?php echo antispambot( 'southblvdmanager' ); ?></a><br><a href="mailto:<?php echo antispambot( 'southblvdmanager@mthrealestate.com' ); ?>"><?php echo antispambot( '@mthrealestate.com' ); ?></a></div>

<div class="offices-phone">phone: <a href="tel:980-219-6001">980-219-6001</a></div>

</div><div class="about-office-contact"><div class="about-office-contact-padding"><a href="<?php bloginfo('url'); ?>/south-end-office">View Agents</a></div></div>
</div>

</div>

<div class="about-office">

<div class="about-office-image">
<?php
$image = get_field('office_photo3', 'option');
  $image = get_field('office_photo3', 'option');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'office_photo';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>
</div>



<div class="about-office-content">
<div class="about-office-text"><h2><?php the_field('office_name3', 'option'); ?></h2>

<?php the_field('office_address3', 'option'); ?>
<br><?php the_field('office_address3_line2', 'option'); ?>
<br><?php the_field('office_address3_line3', 'option'); ?>

<div class="sidebar-directions"><a href="<?php the_field('google_map3', 'option'); ?>" target="_blank">Get Directions</a></div>



<div class="sidebar-email">email: <a href="mailto:<?php echo antispambot( 'uptownmanager@mthrealestate.com' ); ?>"><?php echo antispambot( 'uptownmanager' ); ?></a><br><a href="mailto:<?php echo antispambot( 'uptownmanager@mthrealestate.com' ); ?>"><?php echo antispambot( '@mthrealestate.com' ); ?></a></div>
<div class="offices-phone">phone: <a href="tel:704-749-3561">704-749-3561</a></div></div>

<div class="about-office-contact"><div class="about-office-contact-padding"><a href="<?php bloginfo('url'); ?>/uptown-office">View Agents</a></div></div>

</div>

</div>


</div>



 </div><!-- / page content -->





<?php endwhile; endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>