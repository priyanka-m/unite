<?php
  /* 
    Main page for unite
  */
?>

<?php
  require_once('../../lib/base.php');
  if( !OC_USER::isLoggedIn()){
	echo "here";
	header( "Location: ".OC_HELPER::linkTo( "index.php" ));
	exit();
  } 
  echo "Hello World!";
?>
