<?php

require_once('../../../lib/base.php');
require('template.php');
/* TODO: Work on the below library for plugin related functions */
//require('../unite_plugins.php');

if( !OC_USER::isLoggedIn()){
	header( 'Location: '.OC_HELPER::linkTo( 'index.php' ));
	exit();
} 
	
OC_UTIL::addStyle( 'unite', 'style' );
OC_UTIL::addScript( 'unite', 'script' );
OC_APP::setActiveNavigationEntry( 'unite_index' );

$plugin = $_GET['plugin'];
/* TODO: Check if the plugin exists, and can be loaded */
$can_load = true;
// $can_load = plugin_exists_and_loadable($plugin);

if(!$can_load) {
	header( 'Location: '.OC_HELPER::linkTo( 'apps/unite/index.php' ));
	/* TODO: Also pass the error */
	exit();
}

/* Unite plugins must follow the conventions in order to load properly */
header( 'Location: '.OC_HELPER::linkTo('apps/unite/plugins/'.$plugin.'/index.php' ));
	
?>
