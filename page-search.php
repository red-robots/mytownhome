<?php 
/**
* Template Name: Search
*/
 get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div id="main-wrapper">
<div id="main2">



<div class="page-content">

     <div id="page-heading"><h1><?php the_title()?></h1></div>
<div style="position: relative; width: 100%; float: left;">
<div id="find-box-wrapper">  
<div id="find-box">  

  
<div id="tabbed_section">


  <div id="menu">
    <ul id="ul_tabs">
      <li class="lh" id="t1" onClick="change('tab1')">
    QUICK SEARCH
      </li>
      <li class="lh" id="t2" onClick="change('tab2')">
    FIND AN AGENT
      </li>
      <li class="lh" id="t3" onClick="change('tab3')">
    SELL WITH US
      </li>
    </ul>
  </div>
  <div id="Display_content" onload="change('h1')">
  </div>
    <div id="tab1" class="content_tab">
<div id="home-search">



<form name="dfform" action="http://mytownhome.localhomesearch.net/idx/">



<input type="hidden" name="op" value="query">



<input type="hidden" name="stype" value="area">



<input type="hidden" name="_srf" value="1">



<div class="home-search-column">



Property Type: &nbsp; <select name="proptype" id="property-type">



<option value="cnd">Condos/Townhomes</option>



<option value="res">Single-family Homes</option>



<option value="mul">Multifamily</option>



<option value="lnd">Land</option>



</select>







<p>Area: &nbsp; <select name="area">



<option value="">Choose an area</option>



<option value="1"> N Mecklenburg



<option value="2"> NE Mecklenburg



<option value="3"> E Mecklenburg



<option value="4"> SE Mecklenburg



<option value="sc"> S Mecklenburg



<option value="7"> SW Mecklenburg



<option value="8"> W Mecklenburg



<option value="9"> NW Mecklenburg



<option value="99"> Uptown Charlotte



<option value="13"> Lake Norman



<option value="15"> Lake Wylie



<option value="42"> Mtn. Island Lake



<option value="10"> Union County



<option value="11"> Cabarrus County



<option value="12"> Iredell County



<option value="14"> Lincoln County



<option value="16"> Gaston County



<option value="17"> York County



<option value="24"> Lancaster County



<option value="35"> Chester County



<option value="">-----</option>



<option value="20"> Alexander County



<option value="44"> Alleghany County



<option value="25"> Anson County



<option value="40"> Ashe County



<option value="38"> Avery County



<option value="27"> Burke County



<option value="26"> Caldwell County



<option value="29"> Catawba County



<option value="36"> Chesterfield County



<option value="22"> Cleveland County



<option value="28"> Davidson County



<option value="31"> Davie County



<option value="51"> Forsyth County



<option value="50"> McDowell County



<option value="49"> Mitchell County



<option value="30"> Montgomery County



<option value="33"> Moore County



<option value="47"> Polk County



<option value="34"> Randolph County



<option value="32"> Richmond County



<option value="46"> Rockingham County



<option value="21"> Rowan County



<option value="45"> Rutherford County



<option value="23"> Stanly County



<option value="41"> Surry County



<option value="43"> Watauga County



<option value="39"> Wilkes County



<option value="37"> Yadkin County



<option value="48"> Yancey County



</select>



<p>Subdivision/Complex: &nbsp; 



<input type="text" id="suggest1" name="subdivision" size="35" value=""/>



</div>







<div class="home-search-column2">



Min. Price: &nbsp; <select name="price_min">



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



</select><p>



Max Price: &nbsp; <select name="price_max">



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



</select><p>



Beds: &nbsp; <select name="beds">



<option value="">any</option>



<option value="1">1+</option>



<option value="2">2+</option>



<option value="3">3+</option>



<option value="4">4+</option>



<option value="5">5+</option>



</select>







Baths: &nbsp; <select name="baths">



<option value="">any</option>



<option value="1">1+</option>



<option value="2">2+</option>



<option value="3">3+</option>



<option value="4">4+</option>



</select>



</div>







<div class="home-search-column">



MLS #: &nbsp; <input type="text" name="mls" size="10" maxlength="15"><p>







Street name: &nbsp; <input type="text" name="street" size="15">







<p><input type="submit" value="Quick Search">

<div id="advanced-search-link"><a href="http://www.mytownhome.com/property-search">Or, Try our Advanced Search</a></div>

</div>







</form>



</div>
    </div>
    <div id="tab2" class="content_tab">
<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>



<div class="find-box-content"><?php the_field("find_an_agent"); ?></div>



<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
    </div>
    <div id="tab3" class="content_tab">
<?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>



 <div class="find-box-content"><?php the_field("sell_with_us"); ?></div>



<?php endwhile; wp_reset_postdata(); // end of the loop. ?>

    </div>
</div>



 </div><!-- / page content -->
</div>
</div>
<?php the_content(); ?>
  
  



<?php endwhile; endif; ?>





<?php get_footer(); ?>