<?php
/* Define Base URL */
define('BASE_URL', 'https://blueleafy.github.io/water-analyzers-website/');
/* Page GZIP Compression */
if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING],  ‘gzip))
	ob_start(“ob_gzhandler);
else
	ob_start();
?>