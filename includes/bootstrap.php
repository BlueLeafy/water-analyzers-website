<?php
/* Define Base URL */
define('BASE_URL', 'https://www.yourwebsite.com/');
/* Page GZIP Compression */
if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING],  ‘gzip))
	ob_start(“ob_gzhandler);
else
	ob_start();
?>