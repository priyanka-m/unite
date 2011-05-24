<?php

	OC_APP::register( array( 
		'order' => 10, 
		'id' => 'unite', 
		'name' => 'Unite' ));
		
	OC_APP::addNavigationEntry( array( 
		'id' => 'unite_index', 
		'order' => 10, 
		'href' => OC_HELPER::linkTo( 'unite', 'index.php' ), 
		'icon' => OC_HELPER::imagePath( 'unite', 'icon.png' ), 
		'name' => 'Unite' ));

	OC_APP::addSettingsPage( array( 
		'id' => 'unite_settings', 
		'order' => 10, 
		'href' => OC_HELPER::linkTo( 'unite', 'settings.php' ), 
		'name' => 'Unite', 
		'icon' => OC_HELPER::imagePath( 'unite', 'icon.png' )));
?>
