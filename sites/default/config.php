<?php

/* 
 * @CODOLICENSE
 */

defined('IN_CODOF') or die();

$installed=true;

function get_codo_db_conf() {


    $config = array (
  'driver' => 'mysql',
  'host' => 'localhost',
  'database' => 'codoforum',
  'username' => 'codoforum',
  'password' => 'codoforumpw',
  'prefix' => '',
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
);

    return $config;
}

$DB = get_codo_db_conf();

$CONF = array (
    
  'driver' => 'Custom',
  'UID'    => '56e1850a44291',
  'SECRET' => '56e1850a442c7',
  'PREFIX' => ''
);
