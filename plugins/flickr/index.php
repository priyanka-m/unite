<?php

require_once('../../../../lib/base.php');
require('template.php');

/* TODO: Add the functions related to the plugin tables to the below library */
require('apps/unite/lib/plugin_util.php');


if( !OC_USER::isLoggedIn()){
	header( 'Location: '.OC_HELPER::linkTo( 'index.php' ));
	exit();
} 
	
OC_UTIL::addStyle( 'unite', 'style' );
OC_UTIL::addScript( 'unite', 'script' );
OC_APP::setActiveNavigationEntry( 'unite_index' );

/* TODO: Check if the database is setup properly */
// $database_setup = are_unite_tables_setup();
$tables_setup = true;
if($tables_setup) {
  if($_POST['userid']) {
    $tmpl = new OC_TEMPLATE( 'unite/plugins/flickr', 'getPhotos', 'user' );
    $tmpl->printPage();
  }
  else {
    $tmpl = new OC_TEMPLATE( 'unite/plugins/flickr', 'index', 'user' );
    $tmpl->printPage();
  }
}
else {
  /* TODO: Write function to setup database */
  // setup_unite_tables();
  header( 'Location: '.OC_HELPER::linkTo( 'apps/unite/index.php' ));
  /* TODO: Also pass the error */
  exit();
}
?>
