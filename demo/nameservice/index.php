<?php
require_once '../../vendor/autoload.php';

include 'config.php';
if (file_exists('user_config.php')) include 'user_config.php';

$s = s::init();
$s->register('name.getName', 1);
$s->register('name.setName', 2);
$s->serve();
