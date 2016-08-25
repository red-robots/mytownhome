<?php
$author = get_queried_object();
$author_id = $author->ID; 

$favComm = array();
$commLinks = array();

$favComm = get_field('your_favorite_communities', 'user_'.$author_id);

$ballantyne_commons = get_field('ballantyne_commons', 'user_'.$author_id);
$bloc = get_field('bloc90', 'user_'.$author_id);
$the_williamson = get_field('the_williamson', 'user_'.$author_id);
$gallery_lofts = get_field('gallery_lofts', 'user_'.$author_id);
$the_cherokee = get_field('the_cherokee', 'user_'.$author_id);
$brevard = get_field('1brevard', 'user_'.$author_id);
$steelhaus = get_field('steelhaus', 'user_'.$author_id);
$midwood_meadows = get_field('midwood_meadows', 'user_'.$author_id);
$royal_truss = get_field('royal_truss', 'user_'.$author_id);
$lofts_t = get_field('lofts34', 'user_'.$author_id);
$walnut_hill = get_field('walnut_hill', 'user_'.$author_id);
$lela_court = get_field('lela_court', 'user_'.$author_id);
$heron_bay = get_field('heron_bay', 'user_'.$author_id);
$bradbury_hall = get_field('bradbury_hall', 'user_'.$author_id);
$south_hill_townhomes = get_field('south_hill_townhomes', 'user_'.$author_id);
$the_village_of_south_end = get_field('the_village_of_south_end', 'user_'.$author_id);
$southend_towns = get_field('southend_towns', 'user_'.$author_id);
$southborough = get_field('southborough', 'user_'.$author_id);
$park_avenue_condos = get_field('park_avenue_condos', 'user_'.$author_id);
$meeting_hall = get_field('meeting_hall', 'user_'.$author_id);
$lumina_townhomes = get_field('lumina_townhomes', 'user_'.$author_id);
$helix = get_field('helix', 'user_'.$author_id);
$the_block_at_church_street = get_field('the_block_at_church_street', 'user_'.$author_id);
$the_arlington = get_field('the_arlington', 'user_'.$author_id);
$the_abbott = get_field('the_abbott', 'user_'.$author_id);
$stonegrove = get_field('stonegrove', 'user_'.$author_id);
$berewick = get_field('berewick', 'user_'.$author_id);
$the_vyne = get_field('the_vyne', 'user_'.$author_id);
$central_t = get_field('central_27', 'user_'.$author_id);
$steel_gardens = get_field('steel_gardens', 'user_'.$author_id);
$renaissance_condos = get_field('renaissance_condos', 'user_'.$author_id);
$noda = get_field('noda18', 'user_'.$author_id);
$tranquil_court = get_field('tranquil_court', 'user_'.$author_id);
$oakmore = get_field('oakmore', 'user_'.$author_id);
$queens = get_field('420_queens', 'user_'.$author_id);
$metropolitan = get_field('metropolitan', 'user_'.$author_id);
$legacy_village = get_field('legacy_village', 'user_'.$author_id);
$scott_avenue_townhomes = get_field('scott_avenue_townhomes', 'user_'.$author_id);
$the_tremont = get_field('the_tremont', 'user_'.$author_id);
$royal_court_condominiums = get_field('royal_court_condominiums', 'user_'.$author_id);
$park_view = get_field('park_view', 'user_'.$author_id);
$ordermore = get_field('ordermore_8', 'user_'.$author_id);
$olmsted_park = get_field('olmsted_park', 'user_'.$author_id);
$latta_pavilion = get_field('latta_pavilion', 'user_'.$author_id);
$hillside_eastwest = get_field('hillside_east_&_west', 'user_'.$author_id);
$dilworth_crescent = get_field('dilworth_crescent', 'user_'.$author_id);
$atherton_heights = get_field('atherton_heights', 'user_'.$author_id);
$east_condominium = get_field('1315_east_condominium', 'user_'.$author_id);
$the_village_at_south_main = get_field('the_village_at_south_main', 'user_'.$author_id);
$wendover_heights = get_field('wendover_heights', 'user_'.$author_id);
$luxity_terraces = get_field('luxity_terraces', 'user_'.$author_id);
$courtside = get_field('courtside', 'user_'.$author_id);
$chapel_watch = get_field('chapel_watch', 'user_'.$author_id);
$the_avenue = get_field('the_avenue', 'user_'.$author_id);
$gateway_plaza = get_field('gateway_plaza', 'user_'.$author_id);
$gateway_lofts = get_field('gateway_lofts', 'user_'.$author_id);


//array_push($hoodLinks,$ballantyne,$histBel,$centerCity,$cotswold,$davidson);

// echo '<pre>';
// print_r($favHoods);
// echo '</pre>';

if(in_array('Bloc90', $favComm)) {$commLinks['Bloc90'] = $bloc;}
if(in_array('The Williamson', $favComm)) {$commLinks['The Williamson'] = $the_williamson;}
if(in_array('The Gallery Lofts', $favComm)) {$commLinks['The Gallery Lofts'] = $gallery_lofts;}
if(in_array('The Cherokee', $favComm)) {$commLinks['The Cherokee'] = $the_cherokee;}
if(in_array('Steelhaus', $favComm)) {$commLinks['Steelhaus'] = $steelhaus;}
if(in_array('Midwood Meadows', $favComm)) {$commLinks['Midwood Meadows'] = $midwood_meadows;}
if(in_array('Royal Truss', $favComm)) {$commLinks['Royal Truss'] = $royal_truss;}
if(in_array('Lofts34', $favComm)) {$commLinks['Lofts34'] = $lofts_t;}
if(in_array('Walnut Hill', $favComm)) {$commLinks['Walnut Hill'] = $walnut_hill;}
if(in_array('Lela Court', $favComm)) {$commLinks['Lela Court'] = $lela_court;}
if(in_array('Heron Bay', $favComm)) {$commLinks['Heron Bay'] = $heron_bay;}
if(in_array('Bradbury Hall', $favComm)) {$commLinks['Bradbury Hall'] = $bradbury_hall;}
if(in_array('South Hill Townhomes', $favComm)) {$commLinks['South Hill Townhomes'] = $south_hill_townhomes;}
if(in_array('The Village of South End', $favComm)) {$commLinks['The Village of South End'] = $the_village_of_south_end;}
if(in_array('SouthEnd Towns', $favComm)) {$commLinks['SouthEnd Towns'] = $southend_towns;}
if(in_array('Southborough', $favComm)) {$commLinks['Southborough'] = $southborough;}
if(in_array('Park Avenue Condos', $favComm)) {$commLinks['Park Avenue Condos'] = $park_avenue_condos;}
if(in_array('Meeting Hall', $favComm)) {$commLinks['Meeting Hall'] = $meeting_hall;}
if(in_array('Lumina Townhomes', $favComm)) {$commLinks['Lumina Townhomes'] = $lumina_townhomes;}
if(in_array('Helix', $favComm)) {$commLinks['Helix'] = $helix;}
if(in_array('The Block at Church Street', $favComm)) {$commLinks['The Block at Church Street'] = $the_block_at_church_street;}
if(in_array('The Arlington', $favComm)) {$commLinks['The Arlington'] = $the_arlington;}
if(in_array('The Abbott', $favComm)) {$commLinks['The Abbott'] = $the_abbott;}
if(in_array('Stonegrove', $favComm)) {$commLinks['Stonegrove'] = $stonegrove;}
if(in_array('Berewick', $favComm)) {$commLinks['Berewick'] = $berewick;}
if(in_array('The Vyne', $favComm)) {$commLinks['The Vyne'] = $the_vyne;}
if(in_array('Central 27', $favComm)) {$commLinks['Central 27'] = $central_t;}
if(in_array('Steel Gardens', $favComm)) {$commLinks['Steel Gardens'] = $steel_gardens;}
if(in_array('Renaissance Condos', $favComm)) {$commLinks['Renaissance Condos'] = $renaissance_condos;}
if(in_array('NoDa18', $favComm)) {$commLinks['NoDa18'] = $noda;}
if(in_array('Tranquil Court', $favComm)) {$commLinks['Tranquil Court'] = $tranquil_court;}
if(in_array('Oakmore', $favComm)) {$commLinks['Oakmore'] = $oakmore;}
if(in_array('420 Queens', $favComm)) {$commLinks['420 Queens'] = $queens;}
if(in_array('Metropolitan', $favComm)) {$commLinks['Metropolitan'] = $metropolitan;}
if(in_array('Legacy Village', $favComm)) {$commLinks['Legacy Village'] = $legacy_village;}
if(in_array('Scott Avenue Townhomes', $favComm)) {$commLinks['Scott Avenue Townhomes'] = $scott_avenue_townhomes;}
if(in_array('The Tremont', $favComm)) {$commLinks['The Tremont'] = $the_tremont;}
if(in_array('Royal Court Condominiums', $favComm)) {$commLinks['Royal Court Condominiums'] = $royal_court_condominiums;}
if(in_array('Park View', $favComm)) {$commLinks['Park View'] = $park_view;}
if(in_array('Ordermore 8', $favComm)) {$commLinks['Ordermore 8'] = $ordermore;}
if(in_array('Olmsted Park', $favComm)) {$commLinks['Olmsted Park'] = $olmsted_park;}
if(in_array('Latta Pavilion', $favComm)) {$commLinks['Latta Pavilion'] = $latta_pavilion;}
if(in_array('Hillside East & West', $favComm)) {$commLinks['Hillside East & West'] = $hillside_eastwest;}
if(in_array('Dilworth Crescent', $favComm)) {$commLinks['Dilworth Crescent'] = $dilworth_crescent;}
if(in_array('Atherton Heights', $favComm)) {$commLinks['Atherton Heights'] = $atherton_heights;}
if(in_array('1315 East Condominium', $favComm)) {$commLinks['1315 East Condominium'] = $east_condominium;}
if(in_array('The Village at South Main', $favComm)) {$commLinks['The Village at South Main'] = $the_village_at_south_main;}
if(in_array('Wendover Heights', $favComm)) {$commLinks['Wendover Heights'] = $wendover_heights;}
if(in_array('Luxity Terraces', $favComm)) {$commLinks['Luxity Terraces'] = $luxity_terraces;}
if(in_array('Courtside', $favComm)) {$commLinks['Courtside'] = $courtside;}
// if(in_array('Fifth and Poplar', $favComm)) {$commLinks['Fifth and Poplar'] = $;}
// if(in_array('Jefferson Square', $favComm)) {$commLinks['Jefferson Square'] = $;}
if(in_array('Chapel Watch', $favComm)) {$commLinks['Chapel Watch'] = $chapel_watch;}
if(in_array('The Avenue', $favComm)) {$commLinks['The Avenue'] = $the_avenue;}
if(in_array('Gateway Plaza', $favComm)) {$commLinks['Gateway Plaza'] = $gateway_plaza;}
if(in_array('Gateway Lofts', $favComm)) {$commLinks['Gateway Lofts'] = $gateway_lofts;}
// if(in_array('Fourth Ward Townhomes', $favComm)) {$commLinks['Fourth Ward Townhomes'] = $;}
// if(in_array('The Fourth Ward Square', $favComm)) {$commLinks['The Fourth Ward Square'] = $;}
// if(in_array('First Ward Garden District', $favComm)) {$commLinks['First Ward Garden District'] = $;}
// if(in_array('230 South Tryon', $favComm)) {$commLinks['230 South Tryon'] = $;}
// if(in_array('715 North Church', $favComm)) {$commLinks['715 North Church'] = $;}
// if(in_array('626 North Graham', $favComm)) {$commLinks['626 North Graham'] = $;}
// if(in_array('400 North Church', $favComm)) {$commLinks['400 North Church'] = $;}
// if(in_array('Peridoe', $favComm)) {$commLinks['Peridoe'] = $;}
// if(in_array('Village Park Townhomes', $favComm)) {$commLinks['Village Park Townhomes'] = $;}
if(in_array('Ballantyne Commons', $favComm)) {$commLinks['Ballantyne Commons'] = $ballantyne_commons;}
if(in_array('1Brevard', $favComm)) {$commLinks['1Brevard'] = $brevard;}



// echo '<pre>';
// print_r($hoodLinks);
// echo '</pre>';

	// CREATE THE LINKS

foreach($commLinks as $key => $link) {

	// sanitize the key(neighborhood) first
	$sanitized = sanitize_text_field( $key );
  

  echo '<div class="question">'.$key.'</div>';  
  echo '<div class="answer"><iframe src="'.$link.'" width="100%"></iframe></div>';

}

?>













