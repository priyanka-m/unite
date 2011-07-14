<?php

require_once('../../lib/base.php');
require('template.php');

if( !OC_USER::isLoggedIn()){
	header( 'Location: '.OC_HELPER::linkTo( 'index.php' ));
	exit();
} 
	
OC_UTIL::addStyle( 'unite', 'style' );
OC_UTIL::addScript( 'unite', 'script' );
OC_APP::setActiveNavigationEntry( 'unite_settings' );

$tmpl = new OC_TEMPLATE( 'unite', 'settings', 'admin' );
$tmpl->printPage();

?>
