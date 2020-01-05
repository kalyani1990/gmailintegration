<?php

//logout.php
require_once('settings.php');
require_once('google-login-api.php');

//Reset OAuth access token


//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index.php');

?>