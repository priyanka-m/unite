<?php

require_once('../../lib/base.php');

if( !OC_USER::isLoggedIn()){
	header('Location: '.OC_HELPER::linkTo('index.php'));
	exit();
} 
	
OC_UTIL::addStyle( 'unite', 'style' );
OC_UTIL::addScript( 'unite', 'script' );
OC_APP::setActiveNavigationEntry( 'unite_index' );

$tmpl = new OC_TEMPLATE('unite','index','user');
$tmpl->printPage();
	
?>
