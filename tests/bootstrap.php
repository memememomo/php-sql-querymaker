<?php
ini_set('include_path',
        ini_get('include_path')
        .PATH_SEPARATOR
        .dirname(__FILE__).'/../src');
ini_set('date.timezone', 'Asia/Tokyo');

require_once 'uchiko/SQL/QueryMaker.php';

$loader = require dirname(__DIR__) . '/vendor/autoload.php';

