<?php
$author = get_queried_object();
$author_id = $author->ID; 

$favHoods = array();
$hoodLinks = array();

$favHoods = get_field('your_favorite_neighborhoods', 'user_'.$author_id);

$ballantyne = get_field('ballantyne', 'user_'.$author_id);
$histBel = get_field('historic_belmont', 'user_'.$author_id);
$centerCity = get_field('center_city', 'user_'.$author_id);
$cotswold = get_field('cotswold', 'user_'.$author_id);
$davidson = get_field('davidson', 'user_'.$author_id);
$dilworth = get_field('dilworth', 'user_'.$author_id);
$elizabeth = get_field('elizabeth', 'user_'.$author_id);
$myers_park = get_field('myers_park', 'user_'.$author_id);
$midtown = get_field('midtown', 'user_'.$author_id);
$mooresville = get_field('mooresville', 'user_'.$author_id);
$north_davidson = get_field('north_davidson', 'user_'.$author_id);
$plaza_midwood = get_field('plaza_midwood', 'user_'.$author_id);
$south_park = get_field('south_park', 'user_'.$author_id);
$south_charlotte = get_field('south_charlotte', 'user_'.$author_id);
$south_park = get_field('south_park', 'user_'.$author_id);
$southend = get_field('southend', 'user_'.$author_id);
$university_area = get_field('university_area', 'user_'.$author_id);
$wesley_heights = get_field('wesley_heights', 'user_'.$author_id);


//array_push($hoodLinks,$ballantyne,$histBel,$centerCity,$cotswold,$davidson);

// echo '<pre>';
// print_r($favHoods);
// echo '</pre>';

if(in_array('BALLANTYNE', $favHoods)) {$hoodLinks['BALLANTYNE'] = $ballantyne;}
if(in_array('CENTER CITY', $favHoods)) {$hoodLinks['CENTER CITY'] = $centerCity;}
if(in_array('COTSWOLD', $favHoods)) {$hoodLinks['COTSWOLD'] = $cotswold;}
if(in_array('DAVIDSON', $favHoods)) {$hoodLinks['DAVIDSON'] = $ballantyne;}
if(in_array('DILWORTH', $favHoods)) {$hoodLinks['DILWORTH'] = $centerCity;}
if(in_array('ELIZABETH', $favHoods)) {$hoodLinks['ELIZABETH'] = $cotswold;}
if(in_array('HISTORIC BELMONT', $favHoods)) {$hoodLinks['HISTORIC BELMONT'] = $ballantyne;}
if(in_array('MIDTOWN', $favHoods)) {$hoodLinks['MIDTOWN'] = $ballantyne;}
if(in_array('MOORESVILLE', $favHoods)) {$hoodLinks['MOORESVILLE'] = $ballantyne;}
if(in_array('MYERS PARK', $favHoods)) {$hoodLinks['MYERS PARK'] = $ballantyne;}
if(in_array('NORTH DAVIDSON (NoDa)', $favHoods)) {$hoodLinks['NORTH DAVIDSON (NoDa)'] = $ballantyne;}
if(in_array('PLAZA MIDWOOD', $favHoods)) {$hoodLinks['PLAZA MIDWOOD'] = $ballantyne;}
if(in_array('SOUTH CHARLOTTE', $favHoods)) {$hoodLinks['SOUTH CHARLOTTE'] = $ballantyne;}
if(in_array('SOUTH PARK', $favHoods)) {$hoodLinks['SOUTH PARK'] = $ballantyne;}
if(in_array('SOUTHEND', $favHoods)) {$hoodLinks['SOUTHEND'] = $ballantyne;}
if(in_array('UNIVERSITY AREA', $favHoods)) {$hoodLinks['UNIVERSITY AREA'] = $ballantyne;}
if(in_array('WESLEY HEIGHTS', $favHoods)) {$hoodLinks['WESLEY HEIGHTS'] = $ballantyne;}


// echo '<pre>';
// print_r($hoodLinks);
// echo '</pre>';

	// CREATE THE LINKS

foreach($hoodLinks as $key => $link) {

	// sanitize the key(neighborhood) first
	$sanitized = sanitize_text_field( $key );
  
  echo '<div class="question">'.$key.'</div>';
  echo '<div class="answer"><iframe src="'.$link.'" width="100%"></iframe></div>';

}


	// SPIT OUT THE IFRAMES

// foreach($hoodLinks as $key => $link) {

// 	// sanitize the key(neighborhood) first
// 	$sanitized = sanitize_text_field( $key );


//   echo '<div id="'.$sanitized.'">';
//   echo '<iframe src="'.$link.'"></iframe>';
//   echo '</div>';
// }
?>













