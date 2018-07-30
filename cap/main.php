<?php
	require_once 'facebook-sdk-v5/autoload.php';
 $fb = new Facebook\Facebook([
  'app_id' => '969125333230306', // Replace {app-id} with your app id
  'app_secret' => '1d275f75d4ad2955d195ce9035d0ce1f',
  
//'app_id' => '236379846773248', // Replace {app-id} with your app id
//'app_secret' => '3ac374d455827e56c475f24943875f94',

  'default_graph_version' => 'v2.9',
  ]);
?>