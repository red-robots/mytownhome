<?php 
/**
* Template Name: Search Test
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="main-wrapper">
<div id="main2">



<div class="page-content bw-search">

<div id="main">

</div>
<h1><?php the_title()?></h1>
<?php the_content()?>


<!-- content -->

<style>
#map_canvas img {
  max-width: none;
}
</style>
  <div class="container">


        
          <ul class="nav nav-tabs">
   <li><a href="#map" class="active">Map</a></li>       
  <li><a href="/idx/?stype=area">Area</a></li>
  <li><a href="/idx/?stype=proximity">Address</a></li>
  <li><a href="/idx/?stype=commute">Commute</a></li>
  <li><a href="/idx/?stype=mls">MLS#</a></li>
  
</ul>
    <div class="tab-content">
 
 <div id="map-top">
  <div id="map-top-left">Map Results by Zip Code
  
  <div class="map-top-form"><div class="form-group" style="float: left">Enter Zip Code<br>
    <input type="text" class="form-control input-group-sm" placeholder="Zip" size="5">
  </div>
 
<div class="map-top-form" style="padding-top: 16px;"><input type="submit" class="submit-button"></div>
  </div> </div>
 
  <div id="map-top-right">Map Results by Address or Street Name
  
  <div>
  <div class="map-top-form">Address <a href="#" class="locate">Locate Me</a><br>
<input type="text" class="form-control input-group-sm" placeholder="Address" size="31"></div><div class="map-top-form">City<br><input type="text" class="form-control input-group-sm" placeholder="City" size="20">
  </div><div class="map-top-form">State<br><select name="state" size="1">
  <option value="AK">AK</option>
  <option value="AL">AL</option>
  <option value="AR">AR</option>
  <option value="AZ">AZ</option>
  <option value="CA">CA</option>
  <option value="CO">CO</option>
  <option value="CT">CT</option>
  <option value="DC">DC</option>
  <option value="DE">DE</option>
  <option value="FL">FL</option>
  <option value="GA">GA</option>
  <option value="HI">HI</option>
  <option value="IA">IA</option>
  <option value="ID">ID</option>
  <option value="IL">IL</option>
  <option value="IN">IN</option>
  <option value="KS">KS</option>
  <option value="KY">KY</option>
  <option value="LA">LA</option>
  <option value="MA">MA</option>
  <option value="MD">MD</option>
  <option value="ME">ME</option>
  <option value="MI">MI</option>
  <option value="MN">MN</option>
  <option value="MO">MO</option>
  <option value="MS">MS</option>
  <option value="MT">MT</option>
  <option value="NC" selected>NC</option>
  <option value="ND">ND</option>
  <option value="NE">NE</option>
  <option value="NH">NH</option>
  <option value="NJ">NJ</option>
  <option value="NM">NM</option>
  <option value="NV">NV</option>
  <option value="NY">NY</option>
  <option value="OH">OH</option>
  <option value="OK">OK</option>
  <option value="OR">OR</option>
  <option value="PA">PA</option>
  <option value="RI">RI</option>
  <option value="SC">SC</option>
  <option value="SD">SD</option>
  <option value="TN">TN</option>
  <option value="TX">TX</option>
  <option value="UT">UT</option>
  <option value="VA">VA</option>
  <option value="VT">VT</option>
  <option value="WA">WA</option>
  <option value="WI">WI</option>
  <option value="WV">WV</option>
  <option value="WY">WY</option>
</select>
  </div><div class="map-top-form">Zip<br><input type="text" class="form-control input-group-sm" placeholder="Zip" size="5">
  </div><div class="map-top-form">Range in Miles<br><input type="text" class="form-control input-group-sm" placeholder="Range in Miles" size="13">
  </div><div class="map-top-form" style="padding-top: 24px;"><input type="submit" class="submit-button"></div></div></div>
 </div>         
          
        <div class="tab-pane active" id="zmap"><!--begin map tab-->

        <div id="google-search-map">
          <div>
<img class="loading" src="http://c1203752.r52.cf0.rackcdn.com/maploading.gif">
<div class="dfv2err"></div>

<p id="geo-err" class="bg-danger hidden"></p>
<div id="map_canvas" style="width:100%; height:500px;"></div>        
        </div>

</div><!-- / map -->

<div id="search-fields">
Filter Results By:
<form role="form" name="idx">
        <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
        <div class="form-group">
        <label><strong>Property Type</strong></label>
<table width="100%">
<tr>
<td>
<div class="checkbox">
<label><input type="checkbox" name="pt" class="pt" value="res"> Houses</label>
</div>
</td>
<td>
<div class="checkbox">
<label><input type="checkbox" name="pt" class="pt" value="cnd" checked> Condos</label>
</div>
</td>
</tr>
<tr>
<td>
<div class="checkbox">
<label><input type="checkbox" name="pt" class="pt" value="mul"> Multifamily</label>
</div>
</td>
<td>
<div class="checkbox">
<label><input type="checkbox" name="pt" class="pt" value="lnd"> Land</label>
</div>
</td>
</tr>
</table>
        </div>
        <div class="form-group form-group2">
        <label><strong>Beds</strong></label>
        <br>
        <select id="map_beds" class="form-control input-sm" name="beds">
        <option value="">any</option>
<option value="1" >1+</option>
<option value="2" >2+</option>
<option value="3" >3+</option>
<option value="4" >4+</option>
<option value="5" >5+</option>
        </select>
        </div>
        <div class="form-group form-group2">
        <label><strong>Baths</strong></label>
        <br>
        <select id="map_baths" class="form-control input-sm" name="baths">
        <option value="">any</option>
<option value="1" >1+</option>
<option value="2" >2+</option>
<option value="3" >3+</option>
<option value="4" >4+</option>
<option value="5" >5+</option>
        </select>
        </div>
        <div class="form-group form-group2">
        <label><strong>Square Footage:</strong></label>
        <br>
        <select id="map_sqft" class="form-control input-sm" name="sqft">
        <option value="any">any</option>
<option value="600"> 600
<option value="1000"> 1,000
<option value="1500"> 1,500
<option value="2000"> 2,000
<option value="2500"> 2,500
<option value="3000"> 3,000
<option value="4000"> 4,000
<option value="5000"> 5,000
        </select>
        </div>
        <div class="form-group form-group2">
        <label><strong>Min Price:</strong></label>
        <br>
        <input type="text" class="form-control input-group-sm" id="map_min" placeholder="Min Price" name="price_min">
        </select>
        </div>
        <div class="form-group form-group2">
        <label><strong>Max Price:</strong></label>
        <br>
        <input type="text" class="form-control input-group-sm" id="map_max" placeholder="Max Price" name="price_max">
        </select>
        </div>
        <div class="form-group">
        <div class="checkbox">
        <label><input type="checkbox" id="map_garage" name="has_garage">Garage</label></br>
        </div>
       
        </div>
        <div class="dfv3-spacer"></div>
        <p align="center"></p>
        
        
<div class="map-top-form"><button class="btn btn-primary" onClick="firstload = false;getResults(); fixNum(); return false;">Update</button></div>
        
        
        </div>
        
       
        </div>
        
        </form>

</div><!-- / search fields -->


        
        
      </div><!--/map-->

<br clear="all"/>
<hr>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script type="text/javascript" src="http://img.localhomesearch.net/rs/jquery.blockUI.js"></script>   
<script type="text/javascript">
function geo() {
        if (navigator.geolocation) {
            jQuery.blockUI({ message : 'Locating you...' });
            //alert('Locating');
            navigator.geolocation.getCurrentPosition(function(position) {  
                // Reverse
                var gurl = '/map/?lat=' + position.coords.latitude + '&lon=' + position.coords.longitude;
                window.location = gurl;
            },function(err){ 
            jQuery.unblockUI();
            geo_err();
            });
            //jQuery.unblockUI(); 
        } else {
            geo_err();
        }
}
function geo_err() {
    jQuery('p#geo-err').removeClass('hidden');
    jQuery('p#geo-err').html('Could not locate you.  This could be because your browser doesn\'t have permission to access your location.  Please check your settings.');
}
</script>   
    


<!-- / content -->


<!-- -->




</div><!-- / page content -->





<?php endwhile; endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>