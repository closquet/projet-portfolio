<?php
show_admin_bar(false);
/*
* Create own thumbnails
*/
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	// additional image sizes
	add_image_size( 'my_thumbnail', 400, 225, true );
}

/**
 * Retourne l'age en fonction de la date de naissance
 *
 * @param  date $date_naissance au format AAAA-MM-JJ
 * @return int  $age
 */
function calcule_age($date_naissance)
{
	$date_today=explode("-",date ('Y-n-j'));
	$annee_today=$date_today[0];
	$mois_today=$date_today[1];
	$jour_today=$date_today[2];
	
	$date_naissance=explode("-", $date_naissance);
	$annee_naissance=$date_naissance[0];
	$mois_naissance=$date_naissance[1];
	$jour_naissance=$date_naissance[2];
	
	$age =  $annee_today - $annee_naissance;
	if ($mois_today < $mois_naissance) $age=$age-1;
	if ( ($mois_today == $mois_naissance) && ($jour_today < $jour_naissance) )  $age=$age-1;
	return $age;
}

/*
 * Register navigation menu
 */
register_nav_menus([
	'aside'=>'Menu du aside.',
	'header'=>'Menu du header.'
	]);

/*
 * Get menu items
 */
function ec_get_nav_items($location)
{
	$id = ec_get_nav_id($location);
	if(!$id) return [];
	$nav = [];
	$children = [];
	foreach (wp_get_nav_menu_items($id) as $object) {
		$item = new stdClass();
		$item->link = $object->url;
		$item->label = $object->title;
		$item->children = [];
		
		if($object->menu_item_parent) {
			$item->parent = $object->menu_item_parent;
			$children[] = $item;
		}
		else {
			$nav[$object->ID] = $item;
		}
	}
	foreach ($children as $item) {
		$nav[$item->parent]->children[] = $item;
	}
	return $nav;
}

/*
 * Get menu ID from location
*/
function ec_get_nav_id($location)
{
	foreach (get_nav_menu_locations() as $navLocation => $id) {
		if($navLocation == $location) return $id;
	}
	return false;
}

/*
 * Get theme asset URI (pour avoir un bon chemin url pour les fichiers css/js)
*/
function ec_get_uri_asset($resource){
return get_template_directory_uri() . '/assets/' . trim($resource, '/'); //trim, enlève le second éléments (le /) de la string du premier élément ($resouce) au début et à la fin.
}

/*
 * Output theme asset URI
 */
function ec_asset($resource){
echo ec_get_uri_asset($resource);
}


/*
 * fil d'ariane
 */
function ec_fildarian(){
	$def = "index";
	$dPath = $_SERVER['REQUEST_URI'];
	$dChunks = explode("/", $dPath);
	
	echo('<a class="link" href="/">Accueil</a><span class="arian-sep">  >  </span>');
	for($i=1; $i<count($dChunks)-1; $i++ ){
		echo('<a class="link" href="/');
		for($j=1; $j<=$i; $j++ ){
			echo($dChunks[$j]);
			if($j!=count($dChunks)-1){ echo("/");}
		}
		
		if($i==count($dChunks)-2){
			$prChunks = explode(".", $dChunks[$i]);
			if ($prChunks[0] == $def) $prChunks[0] = "";
			$prChunks[0] = $prChunks[0] . "</a>";
		}
		else $prChunks[0]=$dChunks[$i] . '</a><span class="dynNav">  >  </span>';
		echo('">');
		echo(str_replace("_" , " " , $prChunks[0]));
	}
}

/*
 * Get a converted  date format from jj/mm/aaa to jj-mm-aaaa
 */

function ec_get_html_date_field($field_name){
    $mydate = get_field($field_name);
    $mydate = str_replace( '/', '-', $mydate);
    return $mydate;
}

/*
 * Output a converted  date format from jj/mm/aaa to jj-mm-aaaa
 */

function ec_the_html_date_field($field_name){
	echo ec_get_html_date_field($field_name);
}