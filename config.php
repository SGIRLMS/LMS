
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('31693840412-fai497ep6mov9lhodujqpkmu16ien4j1.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('GRa1QatFEY1Rk5pV6HE7-zj1');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/lms/home.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
