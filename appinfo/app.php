<?php

$l=new OC_L10N('unite');

OC_Util::addScript('unite','loader');

OC_App::register( array( 'order' => 4, 'id' => 'unite', 'name' => 'Unite' ));

OC_App::addNavigationEntry( array( 'id' => 'unite_index', 'order' => 2, 'href' => OC_Helper::linkTo( 'unite', 'index.php' ), 'icon' => OC_Helper::imagePath( 'unite', 'icon.png' ), 'name' => $l->t('Unite') ));
?>
