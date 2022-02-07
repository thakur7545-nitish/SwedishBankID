<?php

    define('DB_HOSTNAME', '127.0.0.1');
	define('DB_USERNAME', 'hpcspher_hpcs0ff');
	define('DB_PASSWORD', 'hpcspher_hpcs0ff321!@#$');
	define('DB_DATABASE', 'dblhpgv19bg88d');

    // define('DB_HOSTNAME', '127.0.0.1');
	// define('DB_USERNAME', 'root');
	// define('DB_PASSWORD', '');
	// define('DB_DATABASE', 'bankid');


	
    $conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>