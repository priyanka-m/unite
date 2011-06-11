<?php

require('api/flickr_api.php');
require('api/secrets.php');

$uid = $_POST['userid'];
$flickr = new flickr($secret);
$photos = $flickr->peoplegetpublicphotos($uid, null, 50);

if(empty($photos['photos'])) {
  echo '<b>Sorry, no photos found for this user</b>';
}
else {
  echo '<b>Public photos:</b><br/>';
  echo '<table>';
  foreach($photos['photos'] as $photo)
  {
	echo '<tr>';
    $url = $flickr->getphotourl($photo);
    echo '<td><img src="'.$url.'" height="75" width="75"/></td>';
    echo '<td>'.$url.'</td>';
    echo '</tr>';
  }
  echo '</table>';
}
?>
