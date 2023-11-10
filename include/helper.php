<?php


// патерны:
// - страница сайта
define('patternPages',"/\?.*/");

/* имя файла страницы */
function page_php( $path, $pages) {
  return $path."/".str_replace( "/", "-", substr($pages,1)).'.php';  
} 

/*хлебные крошки*/
function make_breadcrumb( $path, $index) {             
  $breadcrumb = array();
  $crumbs = explode("/", $path);
  $crumb="";
  for($i=1; $i<count($crumbs); ++$i) {	
    $crumb .='/'.$crumbs[$i];	    				
    array_push($breadcrumb, [array_search($crumb,$index),$crumb]);
  }
  return $breadcrumb;
}

?>