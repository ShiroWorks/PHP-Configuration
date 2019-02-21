<?php
use Project\Helpers\Config;
require 'app/Config.php';

$config = new  Config;

$config->load('config.php');

//echo $config->get('db.host.primary');
var_dump($config->exists('db.hosts.primary'));