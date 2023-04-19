<?php
// this file is helping to connect to the database
define('BASE', dirname(__DIR__));
require_once BASE.'/Library/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory(BASE.'/Models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:secret@mysql-server/blogDB'
    ));
});
