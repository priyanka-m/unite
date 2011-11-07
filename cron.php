<?php
require_once('../../lib/base.php');
 
function require_plugin($plugin) {
	$file = '../unite_'.$plugin.'/cron_download.php';
	if(!file_exists($file))
		return false;
	include($file);
	if(!function_exists($plugin.'_cron_download')) return false;
	return true;
}
  
$plugins = array(0=>'flickr', 1=>'googledocs');
foreach($plugins as $plugin){
	if(require_plugin($plugin)){
		$plugin_download_function = $plugin.'_cron_download';
		$plugin_download_function();
	}
}
?>
