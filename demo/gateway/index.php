<?php
require_once '../../vendor/autoload.php';
include 'config.php';

$s = s::init();
$s->register('aa.bb.cc.test');
$s->register('Cc.test');
$s->serve();
