<?php

$_CONFIG = [
	'SERVICE_APP' => 'gateway',
	'SERVICE_CALL_NAMESERVICE' => 'token2:10',
];

if (file_exists('user_config.php')) {
	/** @noinspection PhpIncludeInspection */
	include 'user_config.php';
}
