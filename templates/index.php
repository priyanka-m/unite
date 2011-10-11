<?php
  /* 
    Main page template
  */
?>
<br/>
<h1>Unite</h1>
<h2><b>Plugins</b></h2>
<br/>

<?php
$apps = array();
$apps = OC_App::get();
foreach($apps as $app) {
	if(strpos($app[id],'unite_') === 0) {
		echo '<a href=../'.$app[id].'/index.php><b>'.$app[id].'</b></a>';
		echo '<br/>';
	}  
}
	
?>
